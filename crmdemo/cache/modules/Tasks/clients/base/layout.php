<?php
$clientCache['Tasks']['base']['layout'] = array (
  'list-dashboard' => 
  array (
    'meta' => 
    array (
      'metadata' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'rows' => 
            array (
              0 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'type' => 'dashablelist',
                    'label' => 'TPL_DASHLET_MY_MODULE',
                    'display_columns' => 
                    array (
                      0 => 'full_name',
                      1 => 'email',
                      2 => 'phone_work',
                      3 => 'status',
                    ),
                  ),
                  'context' => 
                  array (
                    'module' => 'Leads',
                  ),
                  'width' => 12,
                ),
              ),
              1 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'type' => 'dashablelist',
                    'label' => 'TPL_DASHLET_MY_MODULE',
                    'display_columns' => 
                    array (
                      0 => 'bug_number',
                      1 => 'name',
                      2 => 'status',
                    ),
                  ),
                  'context' => 
                  array (
                    'module' => 'Bugs',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 12,
          ),
        ),
      ),
      'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
    ),
  ),
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_NOTES_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'notes',
          ),
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_PROSPECTLISTS_TASKS_1_FROM_PROSPECTLISTS_TITLE',
          'context' => 
          array (
            'link' => 'prospectlists_tasks_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-tasks-prospectlists_tasks_1',
        ),
      ),
    ),
  ),
  '_hash' => '46158e4e4c52b9025b7558248d3bd588',
);

