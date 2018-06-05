<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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
 require_once("include/MVC/View/views/view.detail.php");
 
 class mur_approval_managmentViewDetail extends ViewDetail
 {
	function mur_approval_managmentViewDetail()
	{		
		parent::ViewDetail();
	}
	
	/**
	*	to display the twilio call recording image to listen audio call recording
	*
	**/
 
	function preDisplay()
	{
				global $db;
			 $sql="select first_name,last_name,last_spoke_c,description from leads inner join leads_cstm on leads_cstm.id_c = leads.id where leads_cstm.id_c ='".$this->bean->lead_id_c."' ";			
			 
     $result = $db->query($sql);
      $row =$db->fetchByAssoc($result);
     $this->bean->description=$row['description'];
	 $name = $row['first_name']." ".$row['last_name'];
 $this->bean->name=$name;

  $this->bean->last_spoke_c=$name;
 //  $this->bean->name=$name;


 $sql2 =" update mur_approval_managment set name = '".$name."',description='".$row['description']."' where id='".$this->bean->id."'";

$sql3 =" update mur_approval_managment_cstm set last_spoke_c = '".$row['last_spoke_c']."' where id_c='".$this->bean->id."'"; 
$db->query($sql2);
 $db->query($sql2);
		
	
		parent::preDisplay();
	}
 }
 
 ?>