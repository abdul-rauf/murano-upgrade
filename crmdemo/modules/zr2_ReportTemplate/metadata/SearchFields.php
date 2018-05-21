<?php
// created: 2015-01-11 06:57:44
$searchFields = array (
  'A1234_murano' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'A1234_murano\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
  ),
  'cl_Client_list' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'cl_Client_list\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
  ),
  'mr_consultant' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'mr_consultant\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
  ),
  'mu_Enquriy_Tracker' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'mu_Enquriy_Tracker\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
  ),
  'mur_approval_managment' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'mur_approval_managment\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
  ),
  'mur_client_n_list' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'mur_client_n_list\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
  ),
  'uc2ce_Click2Call' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites 
			                    WHERE sugarfavorites.deleted=0 
			                        and sugarfavorites.module = \'uc2ce_Click2Call\'
			                        and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'zr2_QueryTemplate' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
								WHERE sugarfavorites.deleted=0
									and sugarfavorites.module = \'zr2_QueryTemplate\'
									and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'zr2_Report' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
								WHERE sugarfavorites.deleted=0
									and sugarfavorites.module = \'zr2_Report\'
									and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'zr2_ReportContainer' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
								WHERE sugarfavorites.deleted=0
									and sugarfavorites.module = \'zr2_ReportContainer\'
									and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'zr2_ReportParameter' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
								WHERE sugarfavorites.deleted=0
									and sugarfavorites.module = \'zr2_ReportParameter\'
									and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'zr2_ReportParameterLink' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
								WHERE sugarfavorites.deleted=0
									and sugarfavorites.module = \'zr2_ReportParameterLink\'
									and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'zr2_ReportTemplate' => 
  array (
    'name' => 
    array (
      'query_type' => 'default',
    ),
    'current_user_only' => 
    array (
      'query_type' => 'default',
      'db_field' => 
      array (
        0 => 'assigned_user_id',
      ),
      'my_items' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
      'type' => 'bool',
    ),
    'assigned_user_id' => 
    array (
      'query_type' => 'default',
    ),
    'range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_entered' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'start_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'end_range_date_modified' => 
    array (
      'query_type' => 'default',
      'enable_range_search' => true,
      'is_date_field' => true,
    ),
    'favorites_only' => 
    array (
      'query_type' => 'format',
      'operator' => 'subquery',
      'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
								WHERE sugarfavorites.deleted=0
									and sugarfavorites.module = \'zr2_ReportTemplate\'
									and sugarfavorites.assigned_user_id = \'{0}\'',
      'db_field' => 
      array (
        0 => 'id',
      ),
    ),
  ),
);