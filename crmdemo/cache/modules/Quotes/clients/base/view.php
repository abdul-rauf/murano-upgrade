<?php
$clientCache['Quotes']['base']['view'] = array (
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
              'label' => 'LBL_LIST_QUOTE_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
              'enabled' => true,
              'default' => true,
              'name' => 'total_usdollar',
            ),
            3 => 
            array (
              'name' => 'date_quote_expected_closed',
              'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
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
              'default' => false,
              'sortable' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
              'label' => 'LBL_LIST_QUOTE_NUM',
              'enabled' => true,
              'default' => true,
              'name' => 'quote_num',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_QUOTE_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            2 => 
            array (
              'target_record_key' => 'billing_account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'billing_account_name',
              'sortable' => false,
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
              'enabled' => true,
              'default' => true,
              'name' => 'total_usdollar',
            ),
            4 => 
            array (
              'name' => 'date_quote_expected_closed',
              'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
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
              'sortable' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
              'label' => 'LBL_LIST_QUOTE_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
              'enabled' => true,
              'default' => true,
              'name' => 'total_usdollar',
            ),
            3 => 
            array (
              'name' => 'date_quote_expected_closed',
              'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
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
              'default' => false,
              'sortable' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
              'label' => 'LBL_LIST_QUOTE_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
              'enabled' => true,
              'default' => true,
              'name' => 'total_usdollar',
            ),
            3 => 
            array (
              'name' => 'date_quote_expected_closed',
              'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
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
              'default' => false,
              'sortable' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
              'label' => 'LBL_LIST_QUOTE_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
              'enabled' => true,
              'default' => true,
              'name' => 'total_usdollar',
              'readonly' => true,
            ),
            2 => 
            array (
              'name' => 'date_quote_expected_closed',
              'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
              'label' => 'LBL_LIST_QUOTE_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
              'enabled' => true,
              'default' => true,
              'name' => 'total_usdollar',
              'readonly' => true,
            ),
            3 => 
            array (
              'name' => 'date_quote_expected_closed',
              'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
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
              'sortable' => false,
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
            'name' => 'edit_button',
            'icon' => 'icon-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'acl_action' => 'edit',
            'allow_bwc' => true,
            'event' => 'list:editrow:fire',
            'full_form' => true,
          ),
          1 => 
          array (
            'type' => 'unlink-action',
            'icon' => 'icon-trash',
            'label' => 'LBL_UNLINK_BUTTON',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_RECORD_HEADER',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'readonly' => true,
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
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'assigned_user_name',
            1 => 'team_name',
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_SHOW_MORE',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            1 => 
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
            2 => 
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
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'subtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'deal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'new_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'tax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'total_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
                'value' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'readOnlysubtotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtotal',
            1 => 'subtotal',
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
                'target' => 'subtotal_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlyshipping_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'shipping',
            1 => 'shipping',
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
                'target' => 'shipping_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydeal_tot_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_tot',
            1 => 'deal_tot',
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
                'target' => 'deal_tot_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlynew_sub_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'new_sub',
            1 => 'new_sub',
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
                'target' => 'new_sub_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlytax_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'tax',
            1 => 'tax',
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
                'target' => 'tax_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlytotal_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total',
            1 => 'total',
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
                'target' => 'total_usdollar',
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
  '_hash' => '5f2256ef438bb77b106ee7cf3254c416',
);

