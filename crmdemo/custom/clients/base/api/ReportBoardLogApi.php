<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class ReportBoardLogApi extends SugarApi {

    public function registerApiRest() {
        return array(
            //GET
            'LogReportBoard' => array(
                'reqType' => 'GET',
                'noLoginRequired' => false,
                'path' => array('ReportBoard', 'LogData'),
                'pathVars' => array('', ''),
                'method' => 'GetLogData',
                'shortHelp' => 'Returns all records for report board',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Method to be used for my ReportBoard/LogData endpoint
     */
    public function GetLogData($api, $args) {
        $sql = new SugarQuery();
        $sql->from(BeanFactory::getBean('rt_report_board'));
        $sql->select(array("client_alias","no_of_reports","four_weeks_average","minimum_black","fund_type","green_status","assigned_team","date_entered","date_modified"));
        $sql->orderBy('assigned_team');
        $result = $sql->execute();
        foreach($result as $key => $field){
            $field[$field['fund_type']] = $field['client_alias'];
            unset($field['fund_type']);
            unset($field['client_alias']);
            $result[$key] = $field;
            if($field['green_status'] == "Y"){
                $greenStatus = $result[$key];
                unset($result[$key]);
                array_unshift($result, $greenStatus);
            }
        }
        return $result;
    }

}

?>