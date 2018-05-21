<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class UpdateSorting {

    function updateSorting($bean, $event, $arguments) {
        if (array_key_exists('account_name', $arguments['dataChanges']) ||
                array_key_exists('primary_address_country', $arguments['dataChanges']) ||
                array_key_exists('account_description', $arguments['dataChanges'])) {
            $bean->load_relationship('rt_sorting_leads');
            foreach ($bean->rt_sorting_leads->getBeans() as $sorting) {
                $sorting->account_name = $bean->account_name;
                $sorting->primary_address_country = $bean->primary_address_country;
                $sorting->description = $bean->account_description;
                $sorting->save();
            }
        }
    }

}

?>
