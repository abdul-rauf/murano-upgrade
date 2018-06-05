<?php
$clientCache['ProspectLists']['base']['layout'] = array (
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
                      0 => 'name',
                      1 => 'billing_address_country',
                      2 => 'billing_address_city',
                    ),
                  ),
                  'context' => 
                  array (
                    'module' => 'Accounts',
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
          'label' => 'LBL_PROSPECTS_SUBPANEL_TITLE',
          'override_paneltop_view' => 'panel-top-for-prospectlists',
          'context' => 
          array (
            'link' => 'prospects',
          ),
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CONTACTS_SUBPANEL_TITLE',
          'override_paneltop_view' => 'panel-top-for-prospectlists',
          'context' => 
          array (
            'link' => 'contacts',
          ),
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_LEADS_SUBPANEL_TITLE',
          'override_paneltop_view' => 'panel-top-for-prospectlists',
          'context' => 
          array (
            'link' => 'leads',
          ),
          'override_subpanel_list_view' => 'subpanel-for-prospectlists-leads',
        ),
        3 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_USERS_SUBPANEL_TITLE',
          'override_paneltop_view' => 'panel-top-for-prospectlists',
          'context' => 
          array (
            'link' => 'users',
          ),
        ),
        4 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_SUBPANEL_TITLE',
          'override_subpanel_list_view' => 'subpanel-for-prospectlists',
          'override_paneltop_view' => 'panel-top-for-prospectlists',
          'context' => 
          array (
            'link' => 'accounts',
          ),
        ),
        5 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CAMPAIGNS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'campaigns',
          ),
        ),
        6 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_PROSPECTLISTS_MUR_CLIENT_N_LIST_1_FROM_MUR_CLIENT_N_LIST_TITLE',
          'context' => 
          array (
            'link' => 'prospectlists_mur_client_n_list_1',
          ),
        ),
        7 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_PROSPECTLISTS_PROSPECTLISTS_1_FROM_PROSPECTLISTS_R_TITLE',
          'context' => 
          array (
            'link' => 'prospectlists_prospectlists_1',
          ),
        ),
        8 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_PROSPECTLISTS_TASKS_1_FROM_TASKS_TITLE',
          'context' => 
          array (
            'link' => 'prospectlists_tasks_1',
          ),
        ),
      ),
    ),
  ),
  '_hash' => 'a3a88c760917b457a3c514afb43851f0',
);

