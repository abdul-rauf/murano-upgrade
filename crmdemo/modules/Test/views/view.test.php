<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class ViewTest extends SugarView
{
    public function _construct()
    {
        parent::SugarView();
    }
    
     public function preDisplay(){
        parent::preDisplay();
    $this->dv->tpl = 'modules/Test/tpl/test.tpl';
    }     
    
    public function display()
    {
        include("MuranoC1_SOAP_Client.php");
           //I also tried the following, it displays an empty page
         parent::display();
    }
} 

?>