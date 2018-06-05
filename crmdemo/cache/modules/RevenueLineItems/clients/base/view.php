<?php
$clientCache['RevenueLineItems']['base']['view'] = array (
  'create-actions' => 
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
({extendsFrom:\'CreateView\',initialize:function(options){this._super("initialize",[options]);this._parsePanelFields(this.meta.panels);},bindDataChange:function(){this.model.on(\'change:likely_case\',this._handleLikelyChange,this);this._super(\'bindDataChange\');},_handleLikelyChange:function(new_model,val,options){if(_.isEmpty(new_model.get(\'product_template_id\'))&&!_.isFinite(new_model.get(\'discount_price\'))){var quantity=new_model.get(\'quantity\'),new_value=\'\';if(!_.isFinite(quantity)||parseFloat(quantity)===0){quantity=1;}
if(!_.isEmpty(val)){new_value=app.math.div(val,quantity);}
new_model.set({discount_price:new_value});}},_parsePanelFields:function(panels){_.each(panels,function(panel){if(!app.metadata.getModule("Forecasts","config").is_setup){_.every(panel.fields,function(field,index){if(field.name==\'commit_stage\'){panel.fields[index]={\'name\':\'spacer\',\'span\':6,\'readonly\':true};return false;}
return true;},this);}},this);}})',
    ),
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
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
        27 => 
        array (
          'name' => 'RevenueLineItemsCreate-actionsView_read_only_fields',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'product_template_name',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'category_name',
                'label' => 'category_name_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_price',
                'label' => 'discount_price_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            2 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'tax_class',
                'label' => 'tax_class_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            3 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'mft_part_num',
                'label' => 'mft_part_num_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            4 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'weight',
                'label' => 'weight_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        28 => 
        array (
          'name' => 'RevenueLineItemsCreate-actionsView_commit_stage_readonly_set_value',
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
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                    ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        29 => 
        array (
          'name' => 'RevenueLineItemsCreate-actionsView_best_worst_sales_stage_read_only',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        30 => 
        array (
          'name' => 'RevenueLineItemsCreate-actionsView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'likely_case',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'opportunity_name',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'readonly' => true,
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'sales_stage',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'probability',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'date_closed',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'commit_stage',
              'enabled' => true,
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'product_template_name',
              'enabled' => true,
              'default' => false,
            ),
            8 => 
            array (
              'name' => 'category_name',
              'enabled' => true,
              'default' => false,
            ),
            9 => 
            array (
              'name' => 'quantity',
              'enabled' => true,
              'default' => false,
            ),
            10 => 
            array (
              'name' => 'likely_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'best_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            12 => 
            array (
              'name' => 'worst_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            13 => 
            array (
              'name' => 'quote_name',
              'label' => 'LBL_ASSOCIATED_QUOTE',
              'related_fields' => 
              array (
                0 => 'quote_id',
              ),
              'readonly' => true,
              'enabled' => true,
              'default' => false,
            ),
            14 => 
            array (
              'name' => 'assigned_user_name',
              'enabled' => true,
              'default' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
  'filter-rows' => 
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
({extendsFrom:\'FilterRowsView\',getFilterableFields:function(moduleName){var fields=this._super("getFilterableFields",[moduleName]);if(app.metadata.getModule("Forecasts","config").is_setup!=1){delete fields[\'commit_stage\'];}else{_.each(fields,function(field,key,list){if(key.indexOf(\'_case\')!=-1){var fld=\'show_worksheet_\'+key.replace(\'_case\',\'\');if(app.metadata.getModule("Forecasts","config")[fld]!=1){delete list[key];}}});}
return fields;}})',
    ),
    'meta' => 
    array (
      'meta' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
  'list' => 
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'status',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'quantity',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'date_entered',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
    'templates' => 
    array (
      'invalid_link' => '
<a href="#RevenueLineItems/{{id}}" title="{{name}}">{{name}}</a><br />
',
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
({extendsFrom:\'MassupdateView\',initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'DisableMassDelete\',\'MassQuote\');this._super("initialize",[options]);},delegateListFireEvents:function(){this.layout.on("list:records:deleted",this.deleteCommitWarning,this);this._super("delegateListFireEvents");},deleteCommitWarning:function(lastSelectedModels){var message=null;if(!_.isUndefined(_.find(lastSelectedModels,function(model){if(model.get("commit_stage")=="include"){return true;}
return false;}))){var forecastModuleSingular=app.lang.get(\'LBL_MODULE_NAME_SINGULAR\',\'Forecasts\');message=app.lang.get("WARNING_DELETED_RECORD_LIST_RECOMMIT_1","RevenueLineItems")
+\'<a href="#Forecasts">\'+forecastModuleSingular+\'</a>.  \'
+app.lang.get("WARNING_DELETED_RECORD_LIST_RECOMMIT_2","RevenueLineItems")
+\'<a href="#Forecasts">\'+forecastModuleSingular+\'</a>.\';app.alert.show("included_list_delete_warning",{level:"warning",messages:message,onLinkClick:function(){app.alert.dismissAll();}});}
return message;}})',
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
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
  'panel-top' => 
  array (
    'templates' => 
    array (
      'panel-top' => '
<div class="label label-module label-{{module}} pull-left">{{moduleIconLabel module}}</div> <h4 class="pull-left">{{str layout.label parentModule}}</h4>
<div class="subpanel-controls btn-toolbar pull-right">
    {{#each meta.buttons}}
        {{field ../this}}
    {{/each}}
</div>
',
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
({extendsFrom:\'PanelTopView\',initialize:function(options){this._super("initialize",[options]);if(this.parentModule=="Accounts"){this.meta.buttons=_.filter(this.meta.buttons,function(item){if(item.type!="actiondropdown"){return true;}
return false;});}},createRelatedClicked:function(event){app.alert.dismiss(\'opp-rli-create\');this._super("createRelatedClicked",[event]);}})',
    ),
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'css_class' => 'btn-invisible',
          'icon' => 'icon-chevron-up',
          'tooltip' => 'LBL_TOGGLE_VISIBILITY',
        ),
        1 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'panel_dropdown',
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'sticky-rowaction',
              'icon' => 'icon-plus',
              'name' => 'create_button',
              'label' => ' ',
              'acl_action' => 'create',
              'tooltip' => 'LBL_CREATE_BUTTON_LABEL',
            ),
            1 => 
            array (
              'type' => 'link-action',
              'name' => 'select_button',
              'label' => 'LBL_ASSOC_RELATED_RECORD',
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
({extendsFrom:\'RecordView\',initialize:function(options){this.plugins=_.union(this.plugins||[],[\'HistoricalSummary\']);this._super(\'initialize\',[options]);this._parsePanelFields(this.meta.panels);},cancelClicked:function(){var changedAttributes=this.model.changedAttributes(this.model.getSyncedAttributes());this.model.set(changedAttributes);this._super(\'cancelClicked\');this.context.trigger(\'button:cancel_button:click\');},getCustomSaveOptions:function(options){var origSuccess=options.success;return{success:_.bind(function(){if(_.isFunction(origSuccess)){origSuccess();}
if(!_.isEmpty(this.model.get(\'quote_id\'))){app.alert.show(\'save_rli_quote_notice\',{level:\'info\',messages:app.lang.get(\'SAVE_RLI_QUOTE_NOTICE\',\'RevenueLineItems\'),autoClose:true});}},this)};},initButtons:function(){this._super(\'initButtons\');if(this.model.has(\'quote_id\')&&!_.isEmpty(this.model.get(\'quote_id\'))&&!_.isUndefined(this.buttons[\'convert_to_quote_button\'])){this.buttons[\'convert_to_quote_button\'].setDisabled(true);}},bindDataChange:function(){this.model.on(\'duplicate:before\',this._handleDuplicateBefore,this);this.model.on(\'change:likely_case\',this._handleLikelyChange,this);this._super(\'bindDataChange\');},_handleLikelyChange:function(new_model,val,options){if(_.isEmpty(options)&&_.isEmpty(new_model.get(\'product_template_id\'))&&!_.isFinite(new_model.get(\'discount_price\'))){var quantity=new_model.get(\'quantity\'),new_value=\'\';if(!_.isFinite(quantity)||parseFloat(quantity)===0){quantity=1;}
if(!_.isEmpty(val)){new_value=app.math.div(val,quantity);}
new_model.set({discount_price:new_value});}},_handleDuplicateBefore:function(new_model){new_model.unset(\'quote_id\');new_model.unset(\'quote_name\');},delegateButtonEvents:function(){this.context.on(\'button:convert_to_quote:click\',this.convertToQuote,this);this._super(\'delegateButtonEvents\');},convertToQuote:function(e){if(_.isEmpty(this.model.get(\'product_template_id\'))&&!_.isEmpty(this.model.get(\'category_id\'))){app.alert.show(\'invalid_items\',{level:\'error\',title:app.lang.get(\'LBL_ALERT_TITLE_ERROR\',this.module)+\':\',messages:[app.lang.get(\'LBL_CONVERT_INVALID_RLI_PRODUCT\',this.module)]});return;}
var alert=app.alert.show(\'info_quote\',{level:\'info\',autoClose:false,closeable:false,title:app.lang.get(\'LBL_CONVERT_TO_QUOTE_INFO\',this.module)+\':\',messages:[app.lang.get(\'LBL_CONVERT_TO_QUOTE_INFO_MESSAGE\',this.module)]});alert.$(\'.close\').remove();var url=app.api.buildURL(this.model.module,\'quote\',{id:this.model.id}),callbacks={\'success\':_.bind(function(resp){app.alert.dismiss(\'info_quote\');app.router.navigate(app.bwc.buildRoute(\'Quotes\',resp.id,\'EditView\',{return_module:this.model.module,return_id:this.model.id}),{trigger:true});},this),\'error\':_.bind(function(){app.alert.dismiss(\'info_quote\');app.alert.show(\'error_xhr\',{level:\'error\',title:app.lang.get(\'LBL_CONVERT_TO_QUOTE_ERROR\',this.module)+\':\',messages:[app.lang.get(\'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE\',this.module)]});},this)};app.api.call(\'create\',url,null,callbacks);},_parsePanelFields:function(panels){_.each(panels,function(panel){if(!app.metadata.getModule(\'Forecasts\',\'config\').is_setup){_.every(panel.fields,function(field,index){if(field.name==\'commit_stage\'){panel.fields[index]={\'name\':\'spacer\',\'span\':6,\'readonly\':true};return false;}
return true;},this);}},this);}})',
    ),
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'event' => 'button:cancel_button:click',
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
              'primary' => true,
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
              'acl_module' => 'RevenueLineItems',
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
              'label' => 'LBL_MODULE_NAME_SINGULAR',
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
            4 => 
            array (
              'type' => 'badge',
              'name' => 'badge',
              'readonly' => true,
              'related_fields' => 
              array (
                0 => 'quote_id',
              ),
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
              'name' => 'product_template_name',
            ),
            1 => 
            array (
              'name' => 'spacer',
              'span' => 6,
              'readonly' => true,
            ),
            2 => 'account_name',
            3 => 'status',
            4 => 'quantity',
            5 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            6 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_price',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            8 => 
            array (
              'name' => 'discount_amount',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            9 => 
            array (
              'name' => 'discount_rate_percent',
              'readonly' => true,
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_RECORD_SHOWMORE',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'serial_number',
            1 => 'contact_name',
            2 => 'asset_number',
            3 => 'date_purchased',
            4 => 
            array (
              'name' => 'book_value',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'book_value',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            5 => 'date_support_starts',
            6 => 'book_value_date',
            7 => 'date_support_expires',
            8 => 'website',
            9 => 'tax_class',
            10 => 'manufacturer_name',
            11 => 'weight',
            12 => 'mft_part_num',
            13 => 
            array (
              'name' => 'category_name',
              'type' => 'productCategoriesRelate',
              'label' => 'LBL_CATEGORY',
              'readonly' => true,
            ),
            14 => 'vendor_part_num',
            15 => 'product_type',
            16 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            17 => 'support_name',
            18 => 'support_contact',
            19 => 'support_description',
            20 => 'support_term',
            21 => 
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
            22 => 
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
        27 => 
        array (
          'name' => 'RevenueLineItemsRecordView_read_only_fields',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'product_template_name',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'category_name',
                'label' => 'category_name_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_price',
                'label' => 'discount_price_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            2 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'tax_class',
                'label' => 'tax_class_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            3 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'mft_part_num',
                'label' => 'mft_part_num_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            4 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'weight',
                'label' => 'weight_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        28 => 
        array (
          'name' => 'RevenueLineItemsRecordView_commit_stage_readonly_set_value',
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
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                    ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        29 => 
        array (
          'name' => 'RevenueLineItemsRecordView_best_worst_sales_stage_read_only',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        30 => 
        array (
          'name' => 'RevenueLineItemsRecordView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'likely_case',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
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
  'recordlist' => 
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
({extendsFrom:\'RecordlistView\',initialize:function(options){this._super("initialize",[options]);this.layout.on("list:record:deleted",function(deletedModel){this.deleteCommitWarning(deletedModel);},this);this.before(\'mergeduplicates\',this._checkMergeModels,undefined,this);},_checkMergeModels:function(mergeModels){var primaryRecordOppId=_.first(mergeModels).get(\'opportunity_id\');var invalid_models=_.find(mergeModels,function(model){return!_.isEqual(model.get(\'opportunity_id\'),primaryRecordOppId);});if(!_.isUndefined(invalid_models)){app.alert.show("merge_duplicates_different_opps_warning",{level:"warning",messages:app.lang.get(\'WARNING_MERGE_RLIS_WITH_DIFFERENT_OPPORTUNITIES\',this.module)});return false;}
return true;},_createCatalog:function(fields){var forecastConfig=app.metadata.getModule(\'Forecasts\',\'config\');if(forecastConfig.is_setup){fields=_.filter(fields,function(fieldMeta){if(fieldMeta.name.indexOf(\'_case\')!==-1){var field=\'show_worksheet_\'+fieldMeta.name.replace(\'_case\',\'\');return(forecastConfig[field]==1);}
return true;});}else{fields=_.reject(fields,function(fieldMeta){return(fieldMeta.name===\'commit_stage\');});}
var catalog=this._super(\'_createCatalog\',[fields]);return catalog;},deleteCommitWarning:function(deletedModel){var message=null;if(deletedModel.get("commit_stage")=="include"){var forecastModuleSingular=app.lang.get(\'LBL_MODULE_NAME_SINGULAR\',\'Forecasts\');message=app.lang.get("WARNING_DELETED_RECORD_RECOMMIT_1","RevenueLineItems")
+\'<a href="#Forecasts">\'+forecastModuleSingular+\'</a>.  \'
+app.lang.get("WARNING_DELETED_RECORD_RECOMMIT_2","RevenueLineItems")
+\'<a href="#Forecasts">\'+forecastModuleSingular+\'</a>.\';app.alert.show("included_list_delete_warning",{level:"warning",messages:message,onLinkClick:function(){app.alert.dismissAll();}});}
return message;}})',
    ),
    'meta' => 
    array (
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
        27 => 
        array (
          'name' => 'RevenueLineItemsRecordlistView_read_only_fields',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'product_template_name',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'category_name',
                'label' => 'category_name_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_price',
                'label' => 'discount_price_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            2 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'tax_class',
                'label' => 'tax_class_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            3 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'mft_part_num',
                'label' => 'mft_part_num_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            4 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'weight',
                'label' => 'weight_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        28 => 
        array (
          'name' => 'RevenueLineItemsRecordlistView_commit_stage_readonly_set_value',
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
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                    ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        29 => 
        array (
          'name' => 'RevenueLineItemsRecordlistView_best_worst_sales_stage_read_only',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        30 => 
        array (
          'name' => 'RevenueLineItemsRecordlistView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'likely_case',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'opportunity_name',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'readonly' => true,
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'sales_stage',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'probability',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'date_closed',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'commit_stage',
              'enabled' => true,
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'product_template_name',
              'enabled' => true,
              'default' => false,
            ),
            8 => 
            array (
              'name' => 'category_name',
              'enabled' => true,
              'default' => false,
            ),
            9 => 
            array (
              'name' => 'quantity',
              'enabled' => true,
              'default' => false,
            ),
            10 => 
            array (
              'name' => 'likely_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'best_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            12 => 
            array (
              'name' => 'worst_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            13 => 
            array (
              'name' => 'quote_name',
              'label' => 'LBL_ASSOCIATED_QUOTE',
              'related_fields' => 
              array (
                0 => 'quote_id',
              ),
              'readonly' => true,
              'enabled' => true,
              'default' => false,
            ),
            14 => 
            array (
              'name' => 'assigned_user_name',
              'enabled' => true,
              'default' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'opportunity_name',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'readonly' => true,
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'sales_stage',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'probability',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'date_closed',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'commit_stage',
              'enabled' => true,
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'product_template_name',
              'enabled' => true,
              'default' => false,
            ),
            8 => 
            array (
              'name' => 'category_name',
              'enabled' => true,
              'default' => false,
            ),
            9 => 
            array (
              'name' => 'quantity',
              'enabled' => true,
              'default' => false,
            ),
            10 => 
            array (
              'name' => 'likely_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'best_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            12 => 
            array (
              'name' => 'worst_case',
              'required' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => false,
            ),
            13 => 
            array (
              'name' => 'quote_name',
              'label' => 'LBL_ASSOCIATED_QUOTE',
              'related_fields' => 
              array (
                0 => 'quote_id',
              ),
              'readonly' => true,
              'enabled' => true,
              'default' => false,
            ),
            14 => 
            array (
              'name' => 'assigned_user_name',
              'enabled' => true,
              'default' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
  'subpanel-for-opportunities' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
      'favorite' => true,
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'enabled' => true,
              'default' => true,
            ),
            2 => 'status',
            3 => 'quantity',
            4 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            7 => 'date_entered',
          ),
        ),
      ),
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
          0 => 
          array (
            'name' => 'quote_button',
            'type' => 'button',
            'label' => 'LBL_GENERATE_QUOTE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massquote:fire',
            ),
            'acl_action' => 'massquote',
          ),
          1 => 
          array (
            'name' => 'delete_button',
            'type' => 'button',
            'label' => 'LBL_DELETE',
            'acl_action' => 'delete',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massdelete:fire',
            ),
          ),
        ),
      ),
      'rowactions' => 
      array (
        'css_class' => 'pull-right',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_PREVIEW',
            'event' => 'list:preview:fire',
            'icon' => 'icon-eye-open',
            'acl_action' => 'view',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'name' => 'edit_button',
            'icon' => 'icon-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
        27 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-for-opportunitiesView_read_only_fields',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'product_template_name',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'category_name',
                'label' => 'category_name_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_price',
                'label' => 'discount_price_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            2 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'tax_class',
                'label' => 'tax_class_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            3 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'mft_part_num',
                'label' => 'mft_part_num_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            4 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'weight',
                'label' => 'weight_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        28 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-for-opportunitiesView_commit_stage_readonly_set_value',
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
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                    ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        29 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-for-opportunitiesView_best_worst_sales_stage_read_only',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        30 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-for-opportunitiesView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'likely_case',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
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
({extendsFrom:\'SubpanelListView\',parseFields:function(){var catalog=this._super(\'parseFields\'),config=app.metadata.getModule(\'Forecasts\',\'config\'),isForecastSetup=config.is_setup;_.each(catalog,function(group,i){if(isForecastSetup){catalog[i]=_.filter(group,function(fieldMeta){if(fieldMeta.name.indexOf(\'_case\')!=-1){var field=\'show_worksheet_\'+fieldMeta.name.replace(\'_case\',\'\');return(config[field]==1);}
return true;});}else{catalog[i]=_.filter(group,function(fieldMeta){return(fieldMeta.name!=\'commit_stage\');});}});return catalog;}})',
    ),
    'meta' => 
    array (
      'favorite' => true,
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'opportunity_name',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'sortable' => false,
            ),
            3 => 'status',
            4 => 'quantity',
            5 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            6 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            8 => 'date_entered',
          ),
        ),
      ),
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
          0 => 
          array (
            'name' => 'delete_button',
            'type' => 'button',
            'label' => 'LBL_DELETE',
            'acl_action' => 'delete',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massdelete:fire',
            ),
          ),
        ),
      ),
      'rowactions' => 
      array (
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_PREVIEW',
            'event' => 'list:preview:fire',
            'icon' => 'icon-eye-open',
            'acl_action' => 'view',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'name' => 'edit_button',
            'icon' => 'icon-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => '                ifElse(and(isNumeric($quantity), isNumeric($discount_price)),                  ifElse(equal($quantity, 0),                    "0",                      currencySubtract(                        currencyMultiply($discount_price, $quantity),                        ifElse(isNumeric($discount_amount), $discount_amount, 0                      )                  )                ), ""            )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),"")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'ifElse(isNumeric($discount_amount), currencyDivide($discount_amount, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'deal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'ifElse(equal($discount_select, "1"),                            currencyMultiply(currencyMultiply($discount_price, $quantity), currencyDivide($discount_amount, 100)),                            ifElse(isNumeric($discount_amount), $discount_amount, 0)                        )',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'ifElse(isNumeric($deal_calc), currencyDivide($deal_calc, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'ifElse(isNumeric($cost_price), currencyDivide($cost_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'ifElse(isNumeric($discount_price), currencyDivide($discount_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'ifElse(isNumeric($list_price), currencyDivide($list_price, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'ifElse(isNumeric($book_value), currencyDivide($book_value, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string($total_amount)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
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
        14 => 
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
        15 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        16 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'quantity',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_price',
            4 => 'quantity',
            5 => 'discount_amount',
            6 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        17 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        18 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
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
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        19 => 
        array (
          'name' => 'readOnlydeal_calc',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_select',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'discount_amount',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        20 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'deal_calc',
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
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'cost_price',
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
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        22 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        23 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'list_price',
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
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'book_value',
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
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        25 => 
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
        26 => 
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
        27 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-listView_read_only_fields',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'product_template_name',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'category_name',
                'label' => 'category_name_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_price',
                'label' => 'discount_price_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            2 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'tax_class',
                'label' => 'tax_class_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            3 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'mft_part_num',
                'label' => 'mft_part_num_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            4 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'weight',
                'label' => 'weight_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        28 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-listView_commit_stage_readonly_set_value',
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
                'value' => 'ifElse(isForecastClosedWon($sales_stage), "include",                    ifElse(isForecastClosedLost($sales_stage), "exclude", $commit_stage))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        29 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-listView_best_worst_sales_stage_read_only',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            3 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        30 => 
        array (
          'name' => 'RevenueLineItemsSubpanel-listView_likely_case_copy_when_closed',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'likely_case',
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
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $best_case))',
              ),
            ),
            1 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => 'string(ifElse(isForecastClosed($sales_stage), $likely_case, $worst_case))',
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
  '_hash' => '00122c99a5cad6857282e511814a2f53',
);

