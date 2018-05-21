<?php
 // created: 2012-03-05 19:01:50
$layout_defs["cl_Client_list"]["subpanel_setup"]['cl_client_list_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CL_CLIENT_LIST_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'cl_client_list_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
