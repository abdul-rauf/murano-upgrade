<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * This GitHub repository is restricted to access and use by SugarCRM’s OEM partners only.  The installation and use of
 * files and any related documentation available in this particular repository (the “OEM GitHub Repository”) are subject
 * to the terms in the contract(s) between your company and SugarCRM.  If you have any questions about your usage rights
 * or any restrictions for what’s in the OEM GitHub Repository, please contact the person in your company is responsible
 * for the SugarCRM relationship.  They can help advise you on the relevant contract terms.
 *
 * Copyright 2004-2014 SugarCRM Inc.  All rights reserved.
 *********************************************************************************/

/**
 * Variables.less
 * Variables to customize the look and feel of Bootstrap
 */

$lessdefs = array(

    'colors' => array(
        /**
         * Primary Color:
         * 3 pixel line on the navbar
         * -------------------------
         * was @primary
         */
        'BorderColor' => 'transparent', 

        /**
         * Secondary Color:
         * color of the navbar
         * -------------------------
         * was @secondary
         */
        'NavigationBar' => '#181818',

        /**
         * Primary Button Color:
         * color of the primary button
         * -------------------------
         * was @primaryBtn
         */
        'PrimaryButton' => '#ddc700',
		'btn' => '#ddc700',
		'dropdownLinkBackgroundHover' => '#ddc700',
		'btnBackground' => '#ddc700', 
    ),
);
