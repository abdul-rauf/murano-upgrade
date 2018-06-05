<?php
define('sugarEntry', true);
define('ENTRY_POINT_TYPE', 'api');
require_once 'include/entryPoint.php';

$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) != 'cli') {
    sugar_die("cron.php is CLI only.");
}

class DBCreds
{
    public function getDBCreds($instance = '', $varPrefix = '')
    {
        global $sugar_config;
        $mapping = array(
            'db_host_name' => 'host',
            'db_user_name' => 'username',
            'db_password' => 'password',
            'db_name' => 'dbname',
        );
        $dbConfig = empty($instance) ? $sugar_config['dbconfig'] : $sugar_config['db'][$instance];
        foreach ($mapping as $configVar => $bashVar) {
            echo "$varPrefix$bashVar=".$dbConfig[$configVar].PHP_EOL;
        }
    }
}
DBCreds::getDBCreds();
DBCreds::getDBCreds('connector', 'remote_');


