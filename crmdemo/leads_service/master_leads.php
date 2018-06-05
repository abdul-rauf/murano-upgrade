<?php

define('sugarEntry', true);
define('ENTRY_POINT_TYPE', 'api');
require_once 'include/entryPoint.php';

$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) != 'cli') {
    sugar_die("cron.php is CLI only.");
}
class MasterLeads
{
    public function queriesToExecute()
    {
        $lastDayWhere = 'date_modified >= ( CURDATE() - INTERVAL 1 DAY )';
        return array(
            array(
                'message' => 'Deleting leads_connecta table in master crm if exists',                
                'query' => 'DROP TABLE IF EXISTS leads_connecta',
            ),
            array(
                'message' => 'Deleting leads_cstm_connecta table in master crm if exists',                
                'query' => 'DROP TABLE IF EXISTS leads_cstm_connecta',
            ),
            array(
                'message' => 'Deleting email_addr_bean_rel_connecta table in master crm if exists',                
                'query' => 'DROP TABLE IF EXISTS email_addr_bean_rel_connecta',
            ),
            array(
                'message' => 'Deleting email_addresses_connecta table in master crm if exists',                
                'query' => 'DROP TABLE IF EXISTS email_addresses_connecta',
            ),
            array(
                'message' => 'Creating leads_connecta table in master crm if not exists',                
                'query' => 'CREATE TABLE IF NOT EXISTS leads_connecta LIKE leads',
            ),
            array(
                'message' => 'Creating leads_cstm_connecta table in master crm if not exists',                
                'query' => 'CREATE TABLE IF NOT EXISTS leads_cstm_connecta LIKE leads_cstm',
            ),
            array(
                'message' => 'Creating email_addr_bean_rel_connecta table in master crm if not exists',                
                'query' => 'CREATE TABLE IF NOT EXISTS email_addr_bean_rel_connecta LIKE email_addr_bean_rel',
            ),
            array(
                'message' => 'Creating email_addresses_connecta table in master crm if not exists',                
                'query' => 'CREATE TABLE IF NOT EXISTS email_addresses_connecta LIKE email_addresses',
            ),
            array(
                'message' => 'Going for truncate leads_connecta -master crm',
                'query' => 'TRUNCATE TABLE leads_connecta',                
            ),
            array(
                'message' => 'Going for truncate leads_cstm_connecta-master crm',
                'query' => 'TRUNCATE TABLE leads_cstm_connecta',                
            ),
            array(
                'message' => 'Going for truncate email_addresses_connecta-master crm',
                'query' => 'TRUNCATE TABLE email_addr_bean_rel_connecta',                
            ),
            array(
                'message' => 'Going for truncate email_addresses_connecta-master crm',
                'query' => 'TRUNCATE TABLE email_addresses_connecta',                
            ),
            array(
                'message' => 'Going for insertion from all modified leads records since yesterday to leads_connecta -master crm',
                'query' => "INSERT INTO leads_connecta SELECT * FROM leads WHERE $lastDayWhere ",
            ),
            array(
                'message' => 'Going for set date_data_updated where NULL',
                'query' => "UPDATE leads_connecta SET date_data_updated = NOW() WHERE date_data_updated IS NULL",
            ),
            array(
                'message' => 'Going for set delete for leads that are either deleted or no "InProcess" -master crm',
                'query' => "UPDATE leads_connecta SET deleted = 1 , date_data_updated = NOW() WHERE status NOT IN ('In Process', 'Internal')",
            ),
            array(
                'message' => 'Going for insertion of  leads_cstm with in process id to leads_cstm_connecta-master crm',
                'query' => "INSERT INTO leads_cstm_connecta SELECT * FROM leads_cstm WHERE id_c in (SELECT leads_connecta.id FROM leads_connecta WHERE deleted = 0)",
            ),
            array(
                'message' => 'Going for insertion of  email_addr_bean_rel with in process id to leads_cstm_connecta-master crm',
                'query' => "INSERT INTO email_addr_bean_rel_connecta SELECT * FROM email_addr_bean_rel WHERE bean_id in (SELECT leads_connecta.id FROM leads_connecta WHERE deleted = 0)",
            ),
            array(
                'message' => 'Going for insertion of  email_addresses with in process id to leads_cstm_connecta-master crm',
                'query' => "INSERT INTO email_addresses_connecta SELECT * FROM email_addresses WHERE id in (SELECT email_addr_bean_rel_connecta.email_address_id FROM email_addr_bean_rel_connecta WHERE deleted = 0)",
            ),
            array(
                'message' => 'Going for add account_name1 column in leads_connecta table in master crm',
                'query' => "ALTER TABLE leads_connecta ADD account_name1 VARCHAR( 255 ) NULL DEFAULT NULL",
            )
        );
    }
    public function copyLeadsToTempTables()
    {
        try {
            global $db;
            $GLOBALS['log']->fatal('[Master CRM] Creating and copying data and structure of leads tables into connecta tables');
            $queriesToExecute = self::queriesToExecute();
            foreach ($queriesToExecute as $index => $queryInfo) {
                echo $index.'. '.$queryInfo['message'].PHP_EOL;
                $GLOBALS['log']->debug('Executing query', $queryInfo);
                $db->query($queryInfo['query'], true);
            }
            $GLOBALS['log']->fatal('[Master CRM] Creating and copying Done');
        } catch (Exception $e) {
            $GLOBALS['log']->fatal('Error during Sync: ',$e->getMessage());
            exit();
        }
    }
}
echo PHP_EOL . '==================================================' . PHP_EOL;
echo PHP_EOL . 'Creating and Copying Master temp tables like leads' . PHP_EOL;
echo PHP_EOL . '==================================================' . PHP_EOL;
MasterLeads::copyLeadsToTempTables();
echo PHP_EOL . '--------------------------------------------------' . PHP_EOL . PHP_EOL . PHP_EOL;

?>
