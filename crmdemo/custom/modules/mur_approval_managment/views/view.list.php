<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
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

require_once('include/MVC/View/views/view.list.php');

class mur_approval_managmentViewList extends ViewList{
 	function mur_approval_managmentViewList(){
 		parent::ViewList();
 		
 	}



public function preDisplay()
 	{
 		$this->lv = new ListViewSmarty();
		$this->lv->actionsMenuExtraItems[0] = $this->buildapprove();
		
		$this->lv->delete = true;
		$this->lv->export = false;
		$this->lv->mergeduplicates = false;
		$this->lv->mass = false;
		$this->lv->showMassupdateFields  = false;
 	}
 	protected function buildapprove(){
        $x ="<a href='#' style='width: 150px' class='menuItem' onmouseover=hiliteItem(this,'yes'); onmouseout='unhiliteItem(this);' onclick =act_submit('MassFullUpdate');> Approve </a>";
        return $x;
	}
		function display(){
  
   echo '<script>';
   echo 'var x= document.getElementById("actionLinkTop");';
   echo "if(x){ var y = x.className +' show ' ;";
   echo "x.className = y";
   echo '}';
   echo 'function act_submit(){
	   //alert("hiii");
   document.MassUpdate.action.value ="up_action";
   document.MassUpdate.submit();
   }';
   echo '</script>';
   parent::display();
	}
}
?>
