<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;
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


require_once 'modules/ModuleBuilder/parsers/views/GridLayoutMetaDataParser.php' ;
require_once 'modules/ModuleBuilder/parsers/views/MetaDataParserInterface.php' ;
require_once 'modules/ModuleBuilder/parsers/constants.php' ;

class WirelessGridLayoutMetaDataParser extends GridLayoutMetaDataParser implements MetaDataParserInterface
{

    static $variableMap = array (
    	MB_WIRELESSEDITVIEW => 'EditView' ,
    	MB_WIRELESSDETAILVIEW => 'DetailView' ,
    	) ;

    /*
     * Save a draft layout
     */
    function writeWorkingFile ()
    {
        $this->_populateFromRequest ( $this->_fielddefs ) ;
        $viewdefs = $this->_viewdefs ;

        $panels = each ( $this->_convertToCanonicalForm ( $this->_viewdefs [ 'panels' ] , $this->_fielddefs ) ) ;
        $viewdefs [ 'panels' ] = $panels [ 'value' ] ;
        $this->implementation->save ( array ( self::$variableMap [ $this->_view ] => $viewdefs ) ) ;
    }

    /*
     * Deploy the layout
     * @param boolean $populate If true (default), then update the layout first with new layout information from the $_REQUEST array
     */
    function handleSave ($populate = true)
    {
    	$GLOBALS [ 'log' ]->info ( get_class ( $this ) . "->handleSave()" ) ;

        if ($populate)
            $this->_populateFromRequest ( $this->_fielddefs ) ;

        $viewdefs = $this->_viewdefs ;
        $panels = each ( $this->_convertToCanonicalForm ( $this->_viewdefs [ 'panels' ] , $this->_fielddefs ) ) ;
        $viewdefs [ 'panels' ] = $panels [ 'value' ] ;
        $this->implementation->deploy ( array ( self::$variableMap [ $this->_view ] => $viewdefs ) ) ;
    }

}

?>