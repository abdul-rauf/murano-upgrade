<?php
$clientCache['Opportunities']['base']['view'] = array (
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_DEFAULT',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => '30%',
              'link' => true,
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'width' => '20%',
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'id' => 'ACCOUNT_ID',
              'sortable' => true,
              'ACLTag' => 'ACCOUNT',
              'contextMenu' => 
              array (
                'objectType' => 'sugarAccount',
                'metaData' => 
                array (
                  'return_module' => 'Contacts',
                  'return_action' => 'ListView',
                  'module' => 'Accounts',
                  'parent_id' => '{$ACCOUNT_ID}',
                  'parent_name' => '{$ACCOUNT_NAME}',
                  'account_id' => '{$ACCOUNT_ID}',
                  'account_name' => '{$ACCOUNT_NAME}',
                ),
              ),
              'related_fields' => 
              array (
                0 => 'account_id',
              ),
            ),
            2 => 
            array (
              'name' => 'sales_stage',
              'width' => '10%',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'amount_usdollar',
              'default' => true,
              'enabled' => true,
              'width' => '10%',
              'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
              'align' => 'right',
              'currency_format' => true,
            ),
            4 => 
            array (
              'name' => 'date_entered',
              'width' => '10%',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
            5 => 
            array (
              'name' => 'next_step',
              'width' => '10%',
              'label' => 'LBL_NEXT_STEP',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'date_closed',
              'width' => '10',
              'label' => 'LBL_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '5%',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'opportunity_type',
              'width' => '15%',
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'default' => false,
            ),
            9 => 
            array (
              'name' => 'lead_source',
              'width' => '15%',
              'label' => 'LBL_LEAD_SOURCE',
              'enabled' => true,
              'default' => false,
            ),
            10 => 
            array (
              'name' => 'probability',
              'width' => '10%',
              'label' => 'LBL_PROBABILITY',
              'enabled' => true,
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'created_by_name',
              'width' => '10%',
              'label' => 'LBL_CREATED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            12 => 
            array (
              'name' => 'team_name',
              'type' => 'teamset',
              'width' => '5%',
              'label' => 'LBL_LIST_TEAM',
              'enabled' => true,
              'default' => false,
            ),
            13 => 
            array (
              'name' => 'modified_by_name',
              'width' => '5%',
              'label' => 'LBL_MODIFIED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'record' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'name' => 'cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'edit',
        ),
        1 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:save_button:click',
          'name' => 'save_button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn btn-primary',
          'showOn' => 'edit',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'showOn' => 'view',
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:edit_button:click',
              'name' => 'edit_button',
              'label' => 'LBL_EDIT_BUTTON_LABEL',
              'acl_action' => 'edit',
            ),
            1 => 
            array (
              'type' => 'shareaction',
              'name' => 'share',
              'label' => 'LBL_RECORD_SHARE_BUTTON',
              'acl_action' => 'view',
            ),
            2 => 
            array (
              'type' => 'pdfaction',
              'name' => 'download-pdf',
              'label' => 'LBL_PDF_VIEW',
              'action' => 'download',
              'acl_action' => 'view',
            ),
            3 => 
            array (
              'type' => 'pdfaction',
              'name' => 'email-pdf',
              'label' => 'LBL_PDF_EMAIL',
              'action' => 'email',
              'acl_action' => 'view',
            ),
            4 => 
            array (
              'type' => 'divider',
            ),
            5 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:find_duplicates_button:click',
              'name' => 'find_duplicates_button',
              'label' => 'LBL_DUP_MERGE',
              'acl_action' => 'edit',
            ),
            6 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:duplicate_button:click',
              'name' => 'duplicate_button',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Opportunities',
              'acl_action' => 'create',
            ),
            7 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:historical_summary_button:click',
              'name' => 'historical_summary_button',
              'label' => 'LBL_HISTORICAL_SUMMARY',
              'acl_action' => 'view',
            ),
            8 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:audit_button:click',
              'name' => 'audit_button',
              'label' => 'LNK_VIEW_CHANGE_LOG',
              'acl_action' => 'view',
            ),
            9 => 
            array (
              'type' => 'divider',
            ),
            10 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:delete_button:click',
              'name' => 'delete_button',
              'label' => 'LBL_DELETE_BUTTON_LABEL',
              'acl_action' => 'delete',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'size' => 'large',
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 
            array (
              'name' => 'name',
            ),
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'dismiss_label' => true,
            ),
            3 => 
            array (
              'name' => 'follow',
              'label' => 'LBL_FOLLOW',
              'type' => 'follow',
              'readonly' => true,
              'dismiss_label' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'account_name',
              'related_fields' => 
              array (
                0 => 'account_id',
              ),
            ),
            1 => 
            array (
              'name' => 'date_closed',
              'related_fields' => 
              array (
                0 => 'date_closed_timestamp',
              ),
            ),
            2 => 
            array (
              'name' => 'sales_stage',
            ),
            3 => 'probability',
            4 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'span' => 6,
            ),
            5 => 
            array (
              'span' => 6,
            ),
            6 => 
            array (
              'name' => 'best_case',
              'type' => 'currency',
              'label' => 'LBL_BEST',
              'related_fields' => 
              array (
                0 => 'best_case',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 
            array (
              'name' => 'worst_case',
              'type' => 'currency',
              'label' => 'LBL_WORST',
              'related_fields' => 
              array (
                0 => 'worst_case',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            8 => 
            array (
              'name' => 'insideview_opportunities_c',
              'studio' => 'visible',
              'label' => 'LBL_INSIDEVIEW',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_RECORD_SHOWMORE',
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'columns' => 2,
          'fields' => 
          array (
            0 => 'next_step',
            1 => 'opportunity_type',
            2 => 'lead_source',
            3 => 'campaign_name',
            4 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            5 => 'assigned_user_name',
            6 => 'team_name',
            7 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
            8 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'maxColumns' => '2',
        'useTabs' => false,
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'OpportunitiesRecordView_commit_stage_readonly_set_value',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'commit_stage',
                'label' => 'commit_stage_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'commit_stage',
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'OpportunitiesRecordView_best_worst_sales_stage_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'best_case',
                'label' => 'best_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'worst_case',
                'label' => 'worst_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            2 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'OpportunitiesRecordView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => '$amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'RecordView\',alert:undefined,initialize:function(options){this.plugins=_.union(this.plugins||[],[\'HistoricalSummary\']);this._super(\'initialize\',[options]);},cancelClicked:function(){var changedAttributes=this.model.changedAttributes(this.model.getSyncedAttributes());this.model.set(changedAttributes);this._super(\'cancelClicked\');},})',
    ),
  ),
  'create-actions' => 
  array (
    'meta' => 
    array (
      'template' => 'record',
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
        ),
        1 => 
        array (
          'name' => 'restore_button',
          'type' => 'button',
          'label' => 'LBL_RESTORE',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'select',
        ),
        2 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'switch_on_click' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_button',
              'label' => 'LBL_SAVE_BUTTON_LABEL',
            ),
            1 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_view_button',
              'label' => 'LBL_SAVE_AND_VIEW',
              'showOn' => 'create',
            ),
            2 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_create_button',
              'label' => 'LBL_SAVE_AND_CREATE_ANOTHER',
              'showOn' => 'create',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'OpportunitiesCreate-actionsView_commit_stage_readonly_set_value',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'commit_stage',
                'label' => 'commit_stage_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'commit_stage',
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'OpportunitiesCreate-actionsView_best_worst_sales_stage_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'best_case',
                'label' => 'best_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'worst_case',
                'label' => 'worst_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            2 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'OpportunitiesCreate-actionsView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => '$amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'dupecheck-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => 30,
              'link' => true,
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'total_revenue_line_items',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'name' => 'account_name',
              'width' => 20,
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'sales_status',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
            3 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'readonly' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'width' => 10,
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'opportunity_type',
              'width' => 15,
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'lead_source',
              'width' => 15,
              'label' => 'LBL_LEAD_SOURCE',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'next_step',
              'width' => 10,
              'label' => 'LBL_NEXT_STEP',
              'enabled' => true,
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'date_closed',
              'width' => 10,
              'label' => 'LBL_DATE_CLOSED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            8 => 
            array (
              'name' => 'created_by_name',
              'width' => 10,
              'label' => 'LBL_CREATED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            9 => 
            array (
              'name' => 'team_name',
              'type' => 'teamset',
              'width' => 5,
              'label' => 'LBL_LIST_TEAM',
              'enabled' => true,
              'default' => false,
            ),
            10 => 
            array (
              'name' => 'assigned_user_name',
              'width' => 5,
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'modified_by_name',
              'width' => 5,
              'label' => 'LBL_MODIFIED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            12 => 
            array (
              'name' => 'date_entered',
              'width' => 10,
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:"MassupdateView",initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'DisableMassDelete\');this._super("initialize",[options]);}})',
    ),
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-link btn-invisible cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'primary' => false,
        ),
        1 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'LBL_UPDATE',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'resolve-conflicts-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => 30,
              'link' => true,
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'total_revenue_line_items',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'name' => 'account_name',
              'width' => 20,
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'sales_status',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
            3 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'readonly' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'width' => 10,
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'opportunity_type',
              'width' => 15,
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'lead_source',
              'width' => 15,
              'label' => 'LBL_LEAD_SOURCE',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'next_step',
              'width' => 10,
              'label' => 'LBL_NEXT_STEP',
              'enabled' => true,
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'date_closed',
              'width' => 10,
              'label' => 'LBL_DATE_CLOSED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            8 => 
            array (
              'name' => 'created_by_name',
              'width' => 10,
              'label' => 'LBL_CREATED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            9 => 
            array (
              'name' => 'team_name',
              'type' => 'teamset',
              'width' => 5,
              'label' => 'LBL_LIST_TEAM',
              'enabled' => true,
              'default' => false,
            ),
            10 => 
            array (
              'name' => 'assigned_user_name',
              'width' => 5,
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'modified_by_name',
              'width' => 5,
              'label' => 'LBL_MODIFIED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            12 => 
            array (
              'name' => 'date_entered',
              'width' => 10,
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'selection-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => 30,
              'link' => true,
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'total_revenue_line_items',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'name' => 'account_name',
              'width' => 20,
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'sales_status',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
            3 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'readonly' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'width' => 10,
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'opportunity_type',
              'width' => 15,
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'lead_source',
              'width' => 15,
              'label' => 'LBL_LEAD_SOURCE',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'next_step',
              'width' => 10,
              'label' => 'LBL_NEXT_STEP',
              'enabled' => true,
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'date_closed',
              'width' => 10,
              'label' => 'LBL_DATE_CLOSED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            8 => 
            array (
              'name' => 'created_by_name',
              'width' => 10,
              'label' => 'LBL_CREATED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            9 => 
            array (
              'name' => 'team_name',
              'type' => 'teamset',
              'width' => 5,
              'label' => 'LBL_LIST_TEAM',
              'enabled' => true,
              'default' => false,
            ),
            10 => 
            array (
              'name' => 'assigned_user_name',
              'width' => 5,
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'modified_by_name',
              'width' => 5,
              'label' => 'LBL_MODIFIED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
            12 => 
            array (
              'name' => 'date_entered',
              'width' => 10,
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-accounts' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'width' => 10,
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'OpportunitiesSubpanel-for-accountsView_commit_stage_readonly_set_value',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'commit_stage',
                'label' => 'commit_stage_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'commit_stage',
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'OpportunitiesSubpanel-for-accountsView_best_worst_sales_stage_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'best_case',
                'label' => 'best_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'worst_case',
                'label' => 'worst_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            2 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'OpportunitiesSubpanel-for-accountsView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => '$amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'related_fields' => 
              array (
                0 => 'sales_status',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
            ),
            2 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'width' => 10,
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'ifElse(isNumeric($amount), currencyDivide($amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlyamount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'amount',
            1 => 'amount',
            2 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'readOnlyprobability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'OpportunitiesSubpanel-listView_commit_stage_readonly_set_value',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'commit_stage',
                'label' => 'commit_stage_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'commit_stage',
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'OpportunitiesSubpanel-listView_best_worst_sales_stage_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'best_case',
                'label' => 'best_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'worst_case',
                'label' => 'worst_case_label',
                'value' => 'isForecastClosed($sales_stage)',
              ),
            ),
            2 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'OpportunitiesSubpanel-listView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => '$amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $best_case)',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'ifElse(isForecastClosed($sales_stage), $amount, $worst_case)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => 'dfdd17cd09887643ebbb7c57cbcc6685',
);

