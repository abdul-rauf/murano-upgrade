<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
require_once 'include/utils.php';
 

class notification_form {
  
  
	function send_lead_notifications($to_id,$next_id,$tracker_id,$template_id,$module,$by_admin)
    {
		//if($bean->fetched_row) return;

		$notify_user = new $module();
		$admin =new User;
		$admin->retrieve('1');
if($by_admin){
$notify_user->retrieve($to_id);
}
else
{
$notify_user->retrieve($next_id);
}
		
        global $current_user;

        
            $sendToEmail = $notify_user->emailAddress->getPrimaryAddress($notify_user);
            $sendEmail = TRUE;
            if(empty($sendToEmail)) {
                $GLOBALS['log']->warn("Notifications: no e-mail address set for user {$notify_user->user_name}, cancelling send");
                $sendEmail = FALSE;
            }

            $notify_mail = $this->create_lead_notification_email($notify_user,$id,$template_id,$tracker_id);
            $notify_mail->setMailer();
$admin1 = new Administration();
$admin1->retrieveSettings();

            //if(empty($admin->settings['notify_send_from_assigning_user'])) {
if($by_admin) {

                $notify_mail->From = $admin1->settings['notify_fromaddress'];
                $notify_mail->FromName = (empty($admin1->settings['notify_fromname'])) ? "" : $admin1->settings['notify_fromname'];
            } else {
             
			$fromAddress = $sendToEmail;

                $notify_mail->From = $fromAddress;
                //Use the users full name is available otherwise default to system name
                $from_name = $notify_user->first_name." ".$notify_user->last_name;
                $notify_mail->FromName = $from_name;
           }

           $oe = new OutboundEmail();
            $oe = $oe->getUserMailerSettings($admin);
			
            //only send if smtp server is defined
            if($sendEmail){
                $smtpVerified = false;

                //first check the user settings
                if(!empty($oe->mail_smtpserver)){
                    $smtpVerified = true;
                }

                //if still not verified, check against the system settings
                if (!$smtpVerified){
                    $oe = $oe->getSystemMailerSettings();
                    if(!empty($oe->mail_smtpserver)){
                        $smtpVerified = true;
                    }
                }
                //if smtp was not verified against user or system, then do not send out email
                if (!$smtpVerified){
                    $GLOBALS['log']->fatal("Notifications: error sending e-mail, smtp server was not found ");
                    //break out
                    return;
                }

                if(!$notify_mail->Send()) {
                    $GLOBALS['log']->fatal("Notifications: error sending e-mail (method: {$notify_mail->Mailer}), (error: {$notify_mail->ErrorInfo})");
                }else{
                    $GLOBALS['log']->info("Notifications: e-mail successfully sent $sendToEmail");
                }
            }

   
}
    /**
    * This function handles create the email notifications email.
    * @param string $notify_user the user to send the notification email to
    */
    function create_lead_notification_email($notify_user,$record,$template_id,$tracker_id) {
        global $sugar_version;
        global $sugar_config;
        global $app_list_strings;
        global $current_user;
        global $locale;
        global $beanList;
        $OBCharset = $locale->getPrecedentPreference('default_email_charset');


        require_once("include/SugarPHPMailer.php");
		require_once("modules/EmailTemplates/EmailTemplate.php");
		 $email_template = new EmailTemplate();
		 $email_template->retrieve($template_id);
        $notify_address = $notify_user->emailAddress->getPrimaryAddress($notify_user);
        $notify_name = $notify_user->full_name;
        $GLOBALS['log']->debug("Notifications: user has e-mail defined");

        $notify_mail = new SugarPHPMailer();
        $notify_mail->AddAddress($notify_address,$locale->translateCharsetMIME(trim($notify_name), 'UTF-8', $OBCharset));
$notify_mail->IsHTML(true); 
        if(empty($_SESSION['authenticated_user_language'])) {
            $current_language = $sugar_config['default_language'];
        } else {
            $current_language = $_SESSION['authenticated_user_language'];
        }
       

        $this->current_notify_user = $notify_user;

        $port = '';

        if(isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {
            $port = $_SERVER['SERVER_PORT'];
        }

        if (!isset($_SERVER['HTTP_HOST'])) {
            $_SERVER['HTTP_HOST'] = '';
        }

        $httpHost = $_SERVER['HTTP_HOST'];

        if($colon = strpos($httpHost, ':')) {
            $httpHost    = substr($httpHost, 0, $colon);
        }

        $parsedSiteUrl = parse_url($sugar_config['site_url']);
        $host = $parsedSiteUrl['host'];
        if(!isset($parsedSiteUrl['port'])) {
            $parsedSiteUrl['port'] = 80;
        }

        $port		= ($parsedSiteUrl['port'] != 80) ? ":".$parsedSiteUrl['port'] : '';
        $path		= !empty($parsedSiteUrl['path']) ? $parsedSiteUrl['path'] : "";
        $cleanUrl	= "{$parsedSiteUrl['scheme']}://{$host}{$port}{$path}";

       // $url = $cleanUrl."/index.php?module={$this->module_dir}&action=DetailView&record={$this->id}";
	
	
        $body_html =str_replace('$id',$tracker_id,$email_template->body_html);
	        $body_html =str_replace('$from',$notify_address,$body_html);
	$template_html =str_replace('$from',$notify_address,$email_template->subject);

		
        $notify_mail->Body = from_html($body_html);
        $notify_mail->Subject = from_html($template_html);

        // cn: bug 8568 encode notify email in User's outbound email encoding
        $notify_mail->prepForOutbound();

        return $notify_mail;
    }

	

	
	

	}

?>