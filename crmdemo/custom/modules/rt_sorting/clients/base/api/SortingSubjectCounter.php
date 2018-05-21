<?php

class SortingSubjectCounter extends SugarApi {

    /**
     * @function registerApiRest
     * @description registering the API call to make project status field read-only or not
     * @return type
     */
    public function registerApiRest() {
        return array(
            'getSubjectCounter' => array(
                'reqType' => 'GET',
                'path' => array('Sorting', 'subjectCounter', '?', '?'),
                'pathVars' => array('', '', 'team_value', 'lead_id'),
                'method' => 'getSubjectCounter',
                'shortHelp' => 'Generate counter for subject',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Function to generate a auto increment value for subject
     * @param null
     * @return null
     */
    public function getSubjectCounter($api, $args) {
        global $app_list_strings, $db, $current_user;
        $teamValue = $args['team_value'];
        $leadId = $args['lead_id'];
        $leadObj = new Lead();
        $leadObj->retrieve($leadId);
        $leadObj->load_relationship('rt_sorting_leads');
        $counter = 1;
        foreach ($leadObj->rt_sorting_leads->getBeans() as $sorting) {
            if ($sorting->assigned_team == $teamValue) {
                $counter ++;
            }
        }
        $subjectName = $app_list_strings['assigned_team_list'][$teamValue] . "-" . $counter;
        return $subjectName;
    }

}
