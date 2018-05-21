<?php
/**
 * @brief Logic hook class for rt_sorting module
 * @author bdekoning@levementum.com
 * @date 4/22/15
 */
class SortingLogic {
    /**
     * @brief Saves Leads Account Name and Primary Address
     * @param rt_sorting $bean
     * @param $event
     * @param $args
     */
    function updateFields($bean, $event, $args)
    {
        $leadRecord = new Lead();
        $leadRecord->retrieve($args['related_id']);
        $bean->account_name = $leadRecord->account_name;
        $bean->primary_address_country = $leadRecord->primary_address_country;
        $bean->description = $leadRecord->account_description;
    }
}                                                                                                                                      