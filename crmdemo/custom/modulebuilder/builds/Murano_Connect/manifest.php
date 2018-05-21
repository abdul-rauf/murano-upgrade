<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
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


    $manifest = array (
         'acceptable_sugar_versions' => 
          array (
            
          ),
          'acceptable_sugar_flavors' =>
          array(
            'PRO'
          ),
          'readme'=>'',
          'key'=>'test',
          'author' => 'Admin',
          'description' => '',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'Murano_Connect',
          'published_date' => '2011-09-13 15:24:51',
          'type' => 'module',
          'version' => '1315927491',
          'remove_tables' => 'prompt',
          );
$installdefs = array (
  'id' => 'Murano_Connect',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'test_Murano_Connect',
      'class' => 'test_Murano_Connect',
      'path' => 'modules/test_Murano_Connect/test_Murano_Connect.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/test_Murano_Connect',
      'to' => 'modules/test_Murano_Connect',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/bg_BG.lang.php',
      'to_module' => 'application',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/cs_CZ.lang.php',
      'to_module' => 'application',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/da_DK.lang.php',
      'to_module' => 'application',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/de_DE.lang.php',
      'to_module' => 'application',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/et_EE.lang.php',
      'to_module' => 'application',
      'language' => 'et_EE',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/he_IL.lang.php',
      'to_module' => 'application',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/hu_HU.lang.php',
      'to_module' => 'application',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/it_it.lang.php',
      'to_module' => 'application',
      'language' => 'it_it',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ja_JP.lang.php',
      'to_module' => 'application',
      'language' => 'ja_JP',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/lt_LT.lang.php',
      'to_module' => 'application',
      'language' => 'lt_LT',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nb_NO.lang.php',
      'to_module' => 'application',
      'language' => 'nb_NO',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nl_NL.lang.php',
      'to_module' => 'application',
      'language' => 'nl_NL',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pl_PL.lang.php',
      'to_module' => 'application',
      'language' => 'pl_PL',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_PT.lang.php',
      'to_module' => 'application',
      'language' => 'pt_PT',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ro_RO.lang.php',
      'to_module' => 'application',
      'language' => 'ro_RO',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_RU.lang.php',
      'to_module' => 'application',
      'language' => 'ru_RU',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sv_SE.lang.php',
      'to_module' => 'application',
      'language' => 'sv_SE',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/tr_TR.lang.php',
      'to_module' => 'application',
      'language' => 'tr_TR',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/zh_CN.lang.php',
      'to_module' => 'application',
      'language' => 'zh_CN',
    ),
  ),
);