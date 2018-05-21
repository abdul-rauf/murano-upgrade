<?php

$manifest = array(
    0 =>
    array(
        'acceptable_sugar_versions' =>
        array(
            2 => '7.5.2.2',
	       3 =>'7.9.1.0',
        ),
    ),
    1 =>
    array(
        'acceptable_sugar_flavors' =>
        array(
            1 => 'PRO',
            2 => 'ENT',
        ),
    ),
    'readme' => '',
    'key' => 'rt',
    'author' => '',
    'description' => '',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Reportboard_bug_fixes v1.0',
    'published_date' => '2018-02-06 03:13:07',
    'type' => 'module',
    'version' => 1.0,
    'remove_tables' => 'prompt',
);

$installdefs = array(
    'id' => 'Reportboard_bug_fixes_v1.0',
    'copy' => array(
        0 => array(
            'from' => '<basepath>/custom/modules/Leads/clients/base/api/generateWPDFApi.php',
            'to' => 'custom/modules/Leads/clients/base/api/generateWPDFApi.php',
        ),
        1 => array(
            'from' => '<basepath>/custom/include/generic/SugarWidgets/compose_email.js',
            'to' => 'custom/include/generic/SugarWidgets/compose_email.js',
        ),
        2 => array(
            'from' => '<basepath>/custom/modules/rt_sorting/clients/base/views/recordlist/recordlist.js',
            'to' => 'custom/modules/rt_sorting/clients/base/views/recordlist/recordlist.js',
        ),
        3 => array(
            'from' => '<basepath>/custom/modules/Emails/clients/base/views/compose/compose.js',
            'to' => 'custom/modules/Emails/clients/base/views/compose/compose.js',
        ),
        
    ),
);
?>
