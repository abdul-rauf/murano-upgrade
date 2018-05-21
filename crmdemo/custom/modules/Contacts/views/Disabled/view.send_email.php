<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


/**
 * ContactsViewContactAddressPopup
 * 
 * */

require_once('include/MVC/View/views/view.detail.php');


ini_set('display_errors','1');
error_reporting(E_ALL);

class ContactsViewSend_email extends ViewDetail {
	    var $options = array('show_header' => true, 'show_title' => true, 'show_subpanels' => false, 'show_search' => true, 'show_footer' => true, 'show_javascript' => true, 'view_print' => false,);

 	function ContactsViewSend_email(){
 		parent::ViewDetail();
 	}
 	
 	function process() {
		//$this->display();
parent::process();
 	}

 	function display() {

global $mod_strings;


 		$smarty = new Sugar_Smarty();
						
			
$smarty->assign('id', $this->bean->id);
$smarty->assign('name', $this->bean->name);
$smarty->assign('module', $this->bean->module_dir);
			$smarty->assign('MOD', $mod_strings);
$smarty->assign('popup_link', '{"call_back_function":"set_return","form_name":"Quick_email","field_to_name_array":{"id":"to_hidden","name":"to"}}');

			
			$smarty->display("custom/modules/tpls/QuickEmail.tpl");	
 	}	
}
?>