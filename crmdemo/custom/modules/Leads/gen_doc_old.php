<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
 function nl2br2($string) { 
$string = str_replace(array("\r\n", "\r", "\n"), "^p", $string); 
return $string; 
} 
global $sugar_config, $dbconfig, $beanList, $beanFiles, $app_strings, $app_list_strings, $current_user ,$mod_strings;
require_once("modules/Leads/Lead.php");
$focus = new Lead();
$focus->retrieve($_REQUEST['record']);
$cur_date = date('m/d/y');
$doc_location = "upload://leads11.rtf";
$fp = file_get_contents($doc_location);
@ob_end_clean();
$fp =str_replace('Account_name',$focus->account_name,$fp);

$fp =str_replace('__name__',$focus->name,$fp);
$fp =str_replace('_phn1_',$focus->phone_work,$fp);
$focus->investor_typ_c = str_replace('^','',$focus->investor_typ_c);
$investers = explode(',',$focus->investor_typ_c);
$invest = '';
foreach($investers as $key=>$invester)
{
	$invest .= $GLOBALS['app_list_strings']['fundstrategy_c_list'][$invester].', '; 
}
$invest = substr($invest,0,-2);
$fp =str_replace('inv_type',$invest,$fp);
//$focus->account_description =nl2br($focus->account_description);
 $focus->account_description =str_replace("\n","\line ",$focus->account_description);

$notes = html_entity_decode($focus->account_description);
//$notes = $focus->account_description;

$comp = html_entity_decode($focus->further_information_c);
$fp =str_replace('_notes_',$notes,$fp);
$fp =str_replace('_comp_',$comp,$fp);
/*if(strlen($focus->account_description) > 935) 
{
	$notes_trunc = substr($focus->account_description,0,935); 
	$fp =str_replace('_notes_',$notes_trunc,$fp);
} else {
	$fp =str_replace('_notes_',$focus->account_description,$fp);
}

if(strlen($focus->further_information_c) > 816) 
{
	$desc_trunc = substr($focus->further_information_c,0,816); 
	$fp =str_replace('_comp_',$desc_trunc,$fp);
} else {
	$fp =str_replace('_comp_',$focus->further_information_c,$fp);
}*/

$fp =str_replace('__assigned_analyst__',$focus->assigned_user_name,$fp);
$focus->primary_address_street =str_replace("\n","\line ",$focus->primary_address_street);
$address =html_entity_decode($focus->primary_address_street);
$address1 =$focus->primary_address_city;
$address1 .=" ".$focus->primary_address_state.' '.$focus->primary_address_postalcode;
$address3 =$focus->primary_address_country;
$fp =str_replace('__title__',$focus->title,$fp);
$fp =str_replace('bmw',$address,$fp);
$fp =str_replace('_country_',$address3,$fp);

$fp =str_replace('__email__',$focus->email1,$fp);
$fp =str_replace('_city_',$address1,$fp);

$fp =str_replace('_website_',$focus->website,$fp);

$fp =str_replace('__aum__',$focus->aum_c,$fp);

ob_start();
header('Content-disposition: attachment; filename=Murano Investor Report.doc');
header('Content-type: application/word  charset=utf-8');
ob_start();
echo $fp;
@ob_flush();
?>