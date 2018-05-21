<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.5.2.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 'rt',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Sorting',
  'published_date' => '2017-11-23 11:10:41',
  'type' => 'module',
  'version' => 1511435441,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Sorting',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'rt_sorting',
      'class' => 'rt_sorting',
      'path' => 'modules/rt_sorting/rt_sorting.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/rt_sorting_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/rt_sorting_leadsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/rt_sorting',
      'to' => 'modules/rt_sorting',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'et_EE',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'it_it',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'lt_LT',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'ja_JP',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'nb_NO',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'nl_NL',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'pl_PL',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'pt_PT',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'ro_RO',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'ru_RU',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'sv_SE',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'tr_TR',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'zh_CN',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'pt_BR',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'ca_ES',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'en_UK',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'sr_RS',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'lv_LV',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'el_EL',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'ko_KR',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'sk_SK',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'sq_AL',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'es_LA',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/rt_sorting.php',
      'to_module' => 'rt_sorting',
      'language' => 'fi_FI',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'en_us',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'bg_BG',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'cs_CZ',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'da_DK',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'de_DE',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'es_ES',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'et_EE',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'fr_FR',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'he_IL',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'hu_HU',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'it_it',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'lt_LT',
    ),
    45 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ja_JP',
    ),
    46 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'nb_NO',
    ),
    47 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'nl_NL',
    ),
    48 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pl_PL',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pt_PT',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ro_RO',
    ),
    51 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ru_RU',
    ),
    52 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'sv_SE',
    ),
    53 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'tr_TR',
    ),
    54 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'zh_CN',
    ),
    55 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'pt_BR',
    ),
    56 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ca_ES',
    ),
    57 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'en_UK',
    ),
    58 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'sr_RS',
    ),
    59 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'lv_LV',
    ),
    60 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'el_EL',
    ),
    61 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'ko_KR',
    ),
    62 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'sk_SK',
    ),
    63 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'sq_AL',
    ),
    64 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'es_LA',
    ),
    65 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Leads.php',
      'to_module' => 'Leads',
      'language' => 'fi_FI',
    ),
    66 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'sidecar' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/rt_sorting_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/rt_sorting_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rt_sorting_leads_Leads.php',
      'to_module' => 'Leads',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/rt_sorting_leads_rt_sorting.php',
      'to_module' => 'rt_sorting',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/rt_sorting_leads_Leads.php',
      'to_module' => 'Leads',
    ),
  ),
);