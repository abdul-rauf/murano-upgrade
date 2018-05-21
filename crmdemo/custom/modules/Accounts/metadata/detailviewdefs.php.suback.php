<?php
// created: 2015-01-11 07:10:26
$viewdefs = array (
  'Accounts' => 
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
            4 => 'CONNECTOR',
          ),
        ),
        'maxColumns' => '2',
        'useTabs' => true,
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
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Accounts/Account.js',
          ),
        ),
        'tabDefs' => 
        array (
          'LBL_ACCOUNT_INFORMATION' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ADVANCED' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_DETAILVIEW_PANEL1' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' => 
      array (
        'lbl_account_information' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
              'displayParams' => 
              array (
                'enableConnectors' => true,
                'module' => 'Accounts',
                'connectors' => 
                array (
                  0 => 'ext_rest_twitter',
                ),
              ),
            ),
            1 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' => 
              array (
                'link_target' => '_blank',
              ),
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL',
            ),
            1 => 
            array (
              'name' => 'phone_alternate',
              'comment' => 'An alternate phone number',
              'label' => 'LBL_PHONE_ALT',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'billing',
              ),
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'otherinformation_c',
              'studio' => 'visible',
              'label' => 'LBL_OTHERINFORMATION ',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'additionalinformation_c',
              'studio' => 'visible',
              'label' => 'LBL_ADDITIONALINFORMATION',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'news_links_c',
              'studio' => 'visible',
              'label' => 'LBL_NEWS_LINKS',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
            1 => 
            array (
              'name' => 'modified_by_name',
              'label' => 'LBL_MODIFIED_NAME',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAMS',
            ),
            1 => '',
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'insideview_account_c',
              'label' => 'LBL_INSIDEVIEW',
              'customCode' => '<iframe src=\'https://my.insideview.com/iv/crm/analyseAccount.do?crm_account_name={$fields.name.value}&crm_account_ticker={$fields.ticker_symbol.value}&crm_account_id={$fields.id.value}&crm_context=account&crm_deploy_id=3&crm_size=400&crm_org_id={php} global $sugar_config; echo $sugar_config[\'unique_key\'];{/php}&crm_user_firstname={php}global $current_user; echo $current_user->first_name; {/php}&crm_user_lastname={php} echo $current_user->last_name;{/php}&crm_user_title={php} echo $current_user->title;{/php}&crm_user_email={php} echo $current_user->email1;{/php}&crm_user_phone={php} echo $current_user->phone_work;{/php}&crm_user_street={php} echo $current_user->address_street;{/php}&crm_user_city={php} echo $current_user->address_city;{/php}&crm_user_state={php} echo $current_user->address_state;{/php}&crm_user_postalcode={php} echo $current_user->address_postalcode;{/php}&crm_user_country={php} echo $current_user->address_country;{/php}&crm_server_url={php} echo $sugar_config[\'site_url\']{/php}&crm_org_name={php}
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
        'LBL_PANEL_ADVANCED' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'ownership',
              'comment' => '',
              'label' => 'LBL_OWNERSHIP',
            ),
            1 => 
            array (
              'name' => 'aum_c',
              'label' => 'LBL_AUM',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'investment_geography_c',
              'studio' => 'visible',
              'label' => 'LBL_INVESTMENT_GEOGRAPHY',
            ),
            1 => 
            array (
              'name' => 'fundtype_c',
              'studio' => 'visible',
              'label' => 'LBL_FUNDTYPE',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'fund_strategy_c',
              'studio' => 'visible',
              'label' => 'LBL_FUND_STRATEGY',
            ),
            1 => 
            array (
              'name' => 'interest_c',
              'label' => 'LBL_INTEREST',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'fundname_c',
              'label' => 'LBL_FUNDNAME',
            ),
            1 => 
            array (
              'name' => 'fundmanager_c',
              'label' => 'LBL_FUNDMANAGER ',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
        ),
        'lbl_detailview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'maplocation_c',
              'label' => 'LBL_MAPLOCATION',
            ),
            1 => '',
          ),
        ),
      ),
    ),
  ),
);