<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/


require_once('include/SugarFields/Parsers/Rules/BaseRule.php');

class QuotesParseRule extends BaseRule {

function QuotesParseRule() {
	
}

function preParse($panels, $view) {
	
	if($view == 'DetailView') {

		foreach($panels as $name=>$panel) {
		  if($name == 'default') {
		   	  foreach($panel as $rowCount=>$row) {
		   	  	 foreach($row as $key=>$column) {
		   	  	 	if($this->matches($column, '/billing_address_country/')) {
		   	  	 	   $column['label'] = 'LBL_BILL_TO';
		   	  	 	   $column['name'] = 'billing_address_street';
		   	  	 	   $panels[$name][$rowCount][$key] = $column;
		   	  	 	} else if($this->matches($column, '/shipping_address_country/')) {
		   	  	 	   $column['label'] = 'LBL_SHIP_TO';
		   	  	 	   $column['name'] = 'shipping_address_street';
		   	  	 	   $panels[$name][$rowCount][$key] = $column;		   	  	 		
		   	  	 	} else if($this->matches($column, '/^date_quote_closed$/')) {
		   	  	 	   $panels[$name][$rowCount][$key] = 'date_quote_expected_closed';
		   	  	 	} else if($this->matches($column, '/^tag\.opportunity$/')) {
                       $panels[$name][$rowCount][$key] = 'opportunity_name';
		   	  	 	}
				} //foreach 
		   	  } //foreach
		  } //if
	    } //foreach
	}
	
	if($view == 'EditView') {
		$processedBillToPanel = false;

		foreach($panels as $name=>$panel) {
			// This panel is an exception in that it has nested tables...
			if($name == 'lbl_bill_to' && !$processedBillToPanel) {
			   $billToPanel = $panel;
			   $newBillPanel = array();
			   foreach($billToPanel as $subpanel) {
			       $col = array();
			   	   foreach($subpanel as $rowCount=>$row) {
			   	   	   
			   	   	   if(!is_array($row)) {
			   	   	   		  if(!$this->matches($row, '/^(shipping|billing)_address_(street|city|state|country|postalcode)$/si')) {
					       	   	  $col[] = $row;
					       	  }			   	   	   	 
			   	   	   } else {
					       foreach($row as $key=>$column) {
					       	   if(is_array($column)) {
					       	   	  continue;
					       	   }
					       	   
					       	   if($this->matches($column, '/^(billing|shipping)_(account|contact)_name$/')) {
					       	      $match = $this->getMatch($column, '/^(billing|shipping)_(account|contact)_name$/');
					       	      $col[$match[0]] = $match[0];
					       	   } else if(!$this->matches($column, '/^(shipping|billing)_address_(street|city|state|country|postalcode)$/si')) {
					       	   	  $col[] = $column;
					       	   }
					       } //foreach
			   	   	   }
			       } //foreach
			       if(!empty($col)) {
			          $newBillPanel[] = $col;
			       }
			   } //foreach
               $panels['lbl_bill_to'] = $newBillPanel;
               $processedBillToPanel = true;
               continue;
			} //if
			
			foreach($panel as $rowCount=>$row) {
				foreach($row as $key=>$column) {
					//We are just going to clean up address fields since we have
					//to insert a new address panel anyway
	                if($this->matches($column, '/^(shipping|billing)_address_(street|city|state|country|postalcode)$/si')) {
	                   $panels[$name][$rowCount][$key] = '';
	                }
				} //foreach 
			} //foreach
		} //foreach
	} 
	
	return $panels;	
	
}

}
?>
