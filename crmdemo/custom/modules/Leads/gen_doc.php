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

function utf8_to_rtf($utf8_text) { 
	$utf8_patterns = array( "[\xC2-\xDF][\x80-\xBF]", "[\xE0-\xEF][\x80-\xBF]{2}", "[\xF0-\xF4][\x80-\xBF]{3}", ); $new_str = $utf8_text; foreach($utf8_patterns as $pattern) { $new_str = preg_replace("/($pattern)/e",  "'\u'.hexdec(bin2hex(mb_convert_encoding('$1', 'UTF-16', 'UTF-8'))).'?'",  $new_str); } 
	return $new_str;
	}

	function utf8_to_rtf_decoded($utf8_text) { 
	$utf8_patterns = array( "[\xC2-\xDF][\x80-\xBF]", "[\xE0-\xEF][\x80-\xBF]{2}", "[\xF0-\xF4][\x80-\xBF]{3}", ); $new_str = $utf8_text; foreach($utf8_patterns as $pattern) { $new_str = preg_replace("/($pattern)/e",  "'\u'.hexdec(bin2hex(mb_convert_encoding('$1', 'UTF-16', 'UTF-8'))).'?'",  $new_str); } 
	return html_entity_decode($new_str,ENT_QUOTES);
	}

global $sugar_config, $dbconfig, $beanList, $beanFiles, $app_strings, $app_list_strings, $current_user ,$mod_strings;
require_once("modules/Leads/Lead.php");
$focus = new Lead();
$focus->retrieve($_REQUEST['record']);
$cur_date = date('m/d/y');
$doc_location = "custom/modules/Leads/leads24.rtf";
$fp = file_get_contents($doc_location);
@ob_end_clean();
$fp =str_replace('Account_name',html_entity_decode(utf8_to_rtf_decoded($focus->account_name)),$fp);

$fp =str_replace('__name__',utf8_to_rtf_decoded($focus->name),$fp);
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

 $notes = utf8_to_rtf_decoded($focus->account_description);
// $notes = mb_convert_encoding($focus->account_description, "EUC-JP", "auto");
//echo $notes = $focus->account_description;


//$comp = html_entity_decode($focus->further_information_c);
$comp = utf8_to_rtf_decoded($focus->further_information_c);

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
$address =utf8_to_rtf_decoded($focus->primary_address_street);
$address1 =utf8_to_rtf_decoded($focus->primary_address_city);
$address1 .=" ".utf8_to_rtf_decoded($focus->primary_address_state).' '.utf8_to_rtf_decoded($focus->primary_address_postalcode);
$address3 =utf8_to_rtf_decoded($focus->primary_address_country);
$fp =str_replace('__title__',utf8_to_rtf_decoded($focus->title),$fp);
$fp =str_replace('bmw',$address,$fp);
$fp =str_replace('_country_',$address3,$fp);

$fp =str_replace('__email__',$focus->email1,$fp);
$fp =str_replace('_city_',$address1,$fp);

$fp =str_replace('_website_',$focus->website,$fp);

//$fp =str_replace('__aum__',$focus->aum_c,$fp);

// New fields as Molly email
$fp =str_replace('__aum__',utf8_to_rtf_decoded($focus->aum_c),$fp);
$fp =str_replace(' _typ_invest_c_',utf8_to_rtf_decoded($focus->typ_invest_c),$fp);
$fp =str_replace('_req_aum_c_',$focus->req_aum_c,$fp);
$fp =str_replace('_min_track_c_',$focus->min_track_c,$fp);
$fp =str_replace('_pref_liquid_c_',$focus->pref_liquid_c,$fp);
$focus->fund_structure_c = str_replace('^','',$focus->fund_structure_c);
$focus->fund_structure_c = str_replace('_',' ',$focus->fund_structure_c);

$fp =str_replace('_fund_structure_',$focus->fund_structure_c,$fp);

// end new fields
ob_start();
header('Content-disposition: attachment; filename=Murano Investor Report11.doc');
header('Content-type: application/word  charset=utf8');
ob_start();
echo $fp;
@ob_flush();
?>
