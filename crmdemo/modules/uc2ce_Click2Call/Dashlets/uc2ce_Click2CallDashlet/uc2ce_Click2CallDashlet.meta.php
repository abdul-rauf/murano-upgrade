<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/
 
global $app_strings;

$dashletMeta['uc2ce_Click2CallDashlet'] = array('module'		=> 'uc2ce_Click2Call',
										  'title'       => translate('LBL_HOMEPAGE_TITLE', 'uc2ce_Click2Call'), 
                                          'description' => 'A customizable view into uc2ce_Click2Call',
                                          'icon'        => 'icon_uc2ce_Click2Call_32.gif',
                                          'category'    => 'Module Views');