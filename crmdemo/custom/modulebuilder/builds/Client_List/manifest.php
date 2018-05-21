<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/en/msa/master_subscription_agreement_11_April_2011.pdf
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
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'PRO',
    ),
  ),
  'readme' => '',
  'key' => 'cl',
  'author' => 'Ole',
  'description' => 'This is Murano specific- showing which clients have gotten which leads and when.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Client_List',
  'published_date' => '2012-03-05 15:22:34',
  'type' => 'module',
  'version' => 1330960955,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Client_List',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'cl_Client_list',
      'class' => 'cl_Client_list',
      'path' => 'modules/cl_Client_list/cl_Client_list.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/cl_client_list_leads_cl_Client_list.php',
      'to_module' => 'cl_Client_list',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/cl_client_list_leadsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/cl_Client_list',
      'to' => 'modules/cl_Client_list',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'et_EE',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'it_it',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'lt_LT',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ja_JP',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'nb_NO',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'nl_NL',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pl_PL',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pt_PT',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ro_RO',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ru_RU',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'sv_SE',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'tr_TR',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'zh_CN',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'en_us',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'bg_BG',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'cs_CZ',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'da_DK',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'de_DE',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'es_ES',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'et_EE',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'fr_FR',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'he_IL',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'hu_HU',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'it_it',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'lt_LT',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'ja_JP',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'nb_NO',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'nl_NL',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'pl_PL',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'pt_PT',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'ro_RO',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'ru_RU',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'sv_SE',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'tr_TR',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cl_Client_list.php',
      'to_module' => 'cl_Client_list',
      'language' => 'zh_CN',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cl_client_list_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cl_client_list_leads_cl_Client_list.php',
      'to_module' => 'cl_Client_list',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Leads' => 'cl_client_list_leads_name',
      ),
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/cl_client_list_leads_cl_Client_list.php',
      'to_module' => 'cl_Client_list',
    ),
  ),
);