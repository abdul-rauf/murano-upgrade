 <?php
 //die("hell");
 if(!defined('sugarEntry'))define('sugarEntry', true);
echo "<center><h1>CRM Repaired successfully</h1></center><hr>";
ini_set('display_errors',1);
error_reporting(E_ERROR);
//echo "hi";
require_once('include/entryPoint.php');
require_once('include/utils/sugar_file_utils.php');
require_once('include/utils/layout_utils.php');
require_once('modules/Administration/QuickRepairAndRebuild.php');
require_once('modules/Users/User.php');
 
 
 
 $current_user = new User();
                $current_user->getSystemUser();

               
                $randc = new RepairAndClear();
                $actions = array();
                $actions[] = 'clearAll';
                $randc->repairAndClearAll($actions, array(translate('LBL_ALL_MODULES')), false,true,'');
?>
