<?php

define('sugarEntry', true);
define('ENTRY_POINT_TYPE', 'api');
require_once 'include/entryPoint.php';

$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) != 'cli') {
    sugar_die("cron.php is CLI only.");
}
require 'phpmailer/PHPMailerAutoload.php';

class PostMail
{
    public function getSyncStats()
    {
        $GLOBALS['log']->debug('Getting Sync stats for post sync email');
        $stats = array();
        $lastDayWhere       = 'date_modified >= ( CURDATE() - INTERVAL 1 DAY )';
        $addedWhere         = "status IN ('In Process', 'Internal') AND deleted = 0";
        $deletedWhere       = "status != 'In Process' OR deleted = 1";
        $addedStatsQuery    = "SELECT COUNT(*) AS add_cnt FROM leads WHERE $addedWhere AND $lastDayWhere";
        $deletedStatsQuery  = "SELECT COUNT(*) AS del_cnt FROM leads WHERE $deletedWhere AND $lastDayWhere";
        
        $addStats    = self::getDBResult($addedStatsQuery);
        $deleteStats = self::getDBResult($deletedStatsQuery);
        $stats['deleted'] = $deleteStats['del_cnt'];
        $stats['added']   = $addStats['add_cnt'];
        $GLOBALS['log']->debug('Stats for lead syncing', $stats);
        return $stats;
    }
    
    public function getDBResult($query)
    {
        global $db;
        $GLOBALS['log']->debug('Executing Query for stats', $query);
        $result = $db->query($query);
        $row = $db->fetchByAssoc($result);
        return $row;
    }
    
    public function getPhpMailerObj()
    {
        global $sugar_config;
        $postMailSettings = $sugar_config['sync_post_mail_settings'];
        $GLOBALS['log']->debug('Retrieving PHP Mailer object for given settings from $sugar_config["sync_post_mail_settings"]');
        
        if (empty($postMailSettings)) {
            echo "No Email Settings Configured".PHP_EOL;
            $GLOBALS['log']->debug('No Email Settings found in configuration');
            return false;
        }
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host       = $postMailSettings['host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $postMailSettings['user_name'];
        $mail->Password   = $postMailSettings['password'];
        $mail->SMTPSecure = 'auto';
        $mail->From       = $postMailSettings['from'];
        $mail->FromName   = $postMailSettings['from_name'];
        $mail->WordWrap   = 50;
        $mail->isHTML(true);
        
        $mail->addAddress($postMailSettings['to_email'], $postMailSettings['to_email_name']);
        foreach ($postMailSettings['cc'] as $cc) {
            $mail->AddCC($cc['email'], $cc['name']);
        }
        return $mail;
    }
    
    public function getPostMailSubjectAndBody($stats)
    {
        global $sugar_config;
        $subject = $sugar_config['sync_post_mail_settings']['subject'];
        $body    = "Leads that are modified since yesterday are now syncing with connecta crm.<br> ";
        $body   .= "Count of leads synced are- ".$stats['added'].".<br> ";
        $body   .= "<h3 style='color:black;'>Steps of synchronization</h3>";
        $body   .= "<h3 style='color:red;'>Master CRM</h3>";
        $body   .= "1.Truncate table leads_connecta<br>";
        $body   .= "2.Truncate table leads_cstm_connecta<br>";
        $body   .= "3.Leads that were modified last day are now inserted to leads_connecta from leads table<br>";
        $body   .= "4.Leads cstm table  having id matched with in-process status lead records id are now inserted to leads_connecta from leads_cstm table<br>";
        $body   .= "<h3 style='color:red;'>Connecta</h3>";
        $body   .= "5.leads_connecta table is created through mysqldump<br>";
        $body   .= "6.Truncate table leads<br>";
        $body   .= "7.leads_connecta all records are now inserted from leads_connecta to leads table<br>";
        $body   .= "8.Drop table leads_connecta<br>";
        $body   .= "9.leads_cstm_connecta table is created through mysqldump<br>";
        $body   .= "10.Truncate table leads_cstm<br>";
        $body   .= "11.leads_cstm_connecta all records are now inserted from leads_cstm_connecta to leads_cstm table<br>";
        $body   .= "12.Drop table leads_cstm_connecta<br>";
        $body   .= "13.Column account_name1 is updated as equal to account_name in leads table<br>";
        $body   .= "<i><h3 style='color:blue;'>Here is the synchronization process accomplished.</h3></i>";
        $GLOBALS['log']->debug('Preparing Email subject and body');
        return array($subject, $body);
    }
    
    public function sendEmail()
    {
        $GLOBALS['log']->debug('Preparing Post sync status email');
        $stats = self::getSyncStats();
        
        $phpMailerObj = self::getPhpMailerObj();
        if (!$phpMailerObj) {
            $GLOBALS['log']->debug('Email cannot be send, Invalid PHP Mailer Obj');
            echo "Can't send email".PHP_EOL;
            exit;
        }
        list($subject, $body) = self::getPostMailSubjectAndBody($stats);
        $phpMailerObj->Subject = $subject;//"Master CRM Leads synchronization with connecta service status";
        $phpMailerObj->Body    = $body;
        
        $GLOBALS['log']->debug('Sending Email');
        if(!$phpMailerObj->send()) {
           echo 'Message could not be sent.'. PHP_EOL;
           echo 'Mailer Error: ' . $phpMailerObj->ErrorInfo. PHP_EOL;
           $GLOBALS['log']->debug('Message could not be sent - Mailer Error: ' . $phpMailerObj->ErrorInfo);
           exit;
        }
        $GLOBALS['log']->debug('Mail has been sent for service run');
        echo "Mail has been sent for service run". PHP_EOL;
    }
}

echo PHP_EOL . '==================================================' . PHP_EOL;
echo PHP_EOL . '              Sending status email' . PHP_EOL;
echo PHP_EOL . '==================================================' . PHP_EOL;
PostMail::sendEmail();
echo PHP_EOL . '--------------------------------------------------' . PHP_EOL . PHP_EOL . PHP_EOL;
?>
