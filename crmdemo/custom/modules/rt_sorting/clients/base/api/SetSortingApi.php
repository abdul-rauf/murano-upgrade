<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once("clients/base/api/FilterApi.php");

class SetSortingApi extends FilterApi {
    public function registerApiRest()
    {
        //in case we want to add additional endpoints
        return parent::registerApiRest();
    }
    protected function runQuery(ServiceBase $api, array $args, SugarQuery $q, array $options, SugarBean $seed) {
        $data = parent::runQuery($api, $args, $q, $options, $seed);
        if (key_exists("question_marks", $data['records'][0])) { // Qaiser
            $length = count($data['records']);
            for ($p = 0; $p < $length; $p++) {
                $questionStr = $data['records'][$p]["question_marks"];
                $auto_nbr = 1;
                $clientsarry = explode("\n", $questionStr);
                foreach ($clientsarry as $cnt_value) {
                    $cntName = explode("?", $cnt_value);
                    $data['records'][$p]["client" . $auto_nbr] = $cntName[0];
                    $auto_nbr ++;
                }
            }
        }
        return $data;
    }

}
