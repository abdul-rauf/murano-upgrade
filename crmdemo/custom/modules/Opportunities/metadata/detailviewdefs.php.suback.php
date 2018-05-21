<?php
// created: 2015-01-11 07:10:26
$viewdefs = array (
  'Opportunities' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
        'tabDefs' => 
        array (
          'DEFAULT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
        'useTabs' => false,
      ),
      'panels' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            0 => 'name',
            1 => 'account_name',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'amount',
              'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
            ),
            1 => 'date_closed',
          ),
          2 => 
          array (
            0 => 'sales_stage',
            1 => 'opportunity_type',
          ),
          3 => 
          array (
            0 => 'probability',
            1 => 'lead_source',
          ),
          4 => 
          array (
            0 => 'next_step',
            1 => 'campaign_name',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'nl2br' => true,
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'insideview_opportunities_c',
              'label' => 'LBL_INSIDEVIEW',
              'customCode' => '<iframe src=\'https://my.insideview.com/iv/crm/analyseAccount.do?crm_account_name={$fields.account_name.value}&crm_account_id={$fields.account_id.value}&crm_context=opportunities&crm_deploy_id=3&crm_size=400&crm_org_id={php} global $sugar_config; echo $sugar_config[\'unique_key\'];{/php}&crm_user_firstname={php}global $current_user; echo $current_user->first_name; {/php}&crm_user_lastname={php} echo $current_user->last_name;{/php}&crm_user_title={php} echo $current_user->title;{/php}&crm_user_email={php} echo $current_user->email1;{/php}&crm_user_phone={php} echo $current_user->phone_work;{/php}&crm_user_street={php} echo $current_user->address_street;{/php}&crm_user_city={php} echo $current_user->address_city;{/php}&crm_user_state={php} echo $current_user->address_state;{/php}&crm_user_postalcode={php} echo $current_user->address_postalcode;{/php}&crm_user_country={php} echo $current_user->address_country;{/php}&crm_server_url={php} echo $sugar_config[\'site_url\']{/php}&crm_org_name={php}
							 if( strstr($sugar_config[\'host_name\'], \'sugarondemand\') ) 
							 {
								if(phpversion() >= 5) 
								 echo substr(parse_url($sugar_config[\'site_url\'], PHP_URL_PATH), 1);
								else{
									  $path = parse_url($sugar_config[\'site_url\']);
									  echo substr( $path[\'path\'], 1); 
									}
							}
							else
							 echo $sugar_config[\'host_name\'];
							{/php}&crm_host_name={php} echo $sugar_config[\'host_name\'];{/php}&crm_user_id={php} 
								if ($current_user->id =="1")
								 echo $current_user->id.$sugar_config[\'unique_key\']; 
								else
								 echo $current_user->id;
							 {/php}&crm_session_id=&crm_version=v59\' width=\'100%\' height=\'400px\' marginwidth=\'0\' marginheight=\'0\' scrolling=\'no\' frameborder=\'0\'></iframe>',
              'customLabel' => 'InsideView',
            ),
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
          ),
          1 => 
          array (
            0 => 'team_name',
            1 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
          ),
        ),
      ),
    ),
  ),
);