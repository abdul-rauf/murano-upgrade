<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
require_once('include/SugarQuery/SugarQuery.php');

class SortingCountApi extends SugarApi {

    /**
     * @function registerApiRest
     * @description registering the API call to get count of question mark clients columns
     * @return type
     */
    public function registerApiRest() {
        return array(
            'getsortingCountForTable' => array(
                'reqType' => 'GET',
                'path' => array('rt_sorting', 'getsortingCount'),
                'pathVars' => array('', ''),
                'method' => 'getCount',
                'shortHelp' => 'get Count Of sorting module',
                'longHelp' => '',
            ),
        );
    }

    public function getCount($api, $args) {
        global $db;
        $countOFSorting = "SELECT count(*) as total_rows , max(ROUND ((LENGTH(question_marks)- LENGTH( REPLACE (question_marks, '?', '') ) ) / LENGTH('?'))) AS count FROM rt_sorting where deleted = 0";
        $result_1 = $GLOBALS['db']->query($countOFSorting);
        $row = $GLOBALS['db']->fetchByAssoc($result_1);
        $count_columns = $row['count'];

        $response_array = Array();
        $response_array['column_count'] = $count_columns;


        return $response_array;
    }

}

?>
