<?php
 // created: 2017-11-23 11:21:02
$layout_defs["mur_client_n_list"]["subpanel_setup"]['rt_client_reporting_mur_client_n_list'] = array (
  'order' => 100,
  'module' => 'rt_client_reporting',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RT_CLIENT_REPORTING_MUR_CLIENT_N_LIST_FROM_RT_CLIENT_REPORTING_TITLE',
  'get_subpanel_data' => 'rt_client_reporting_mur_client_n_list',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);
