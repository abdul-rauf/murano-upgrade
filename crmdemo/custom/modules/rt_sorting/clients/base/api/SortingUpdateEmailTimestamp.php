<?php

class SortingUpdateEmailTimestamp extends SugarApi {

    /**
     * @function registerApiRest
     * @description registering the API call to make project status field read-only or not
     * @return type
     */
    public function registerApiRest() {
        return array(
            'updateEmailTimestamp' => array(
                'reqType' => 'GET',
                'path' => array('Sorting', 'emailTimestamp', '?', '?', '?'),
                'pathVars' => array('', '', 'sorting_id', 'client_id', 'attch_no'),
                'method' => 'updateEmailTimestamp',
                'shortHelp' => 'Update Email Timestamp in sorting module',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Function to generate a auto increment value for subject
     * @param null
     * @return null
     */
    public function updateEmailTimestamp($api, $args) {
        global $timedate;
        $sortingId = $args['sorting_id'];
        $clientId = $args['client_id'];
        $attachmentCount = $args['attch_no'];

        $sortingId = explode(",", $sortingId);
        $cClients = array();
        foreach ($sortingId as $id) {
            $sortingObj = new rt_sorting();
            $sortingObj->retrieve($id);
            $sortingObj->email_timestamp = $timedate->now();
            $sortingObj->save();

            $clientInfo = new cl_Client_list();
            $clientInfo->client_drop_c = $clientId;
            $clientInfo->hit_status = 'Lead_Sent';
            $clientInfo->save();

            $clientInfo->load_relationship('cl_client_list_leads');
            $clientInfo->cl_client_list_leads->add($sortingObj->rt_sorting_leadsleads_ida);
        }

        $sql = new SugarQuery();
        $sql->from(BeanFactory::getBean('mur_client_n_list'));
        $sql->Where()->equals('id', $clientId);
        $cl_reporting = $sql->join('rt_client_reporting_mur_client_n_list')->joinName();
        $sql->select(array("$cl_reporting.client_alias"));
        $sql->limit(1);
        $reportingResult = $sql->execute();
        if (empty($reportingResult[0]['client_alias'])) {
            $sql = new SugarQuery();
            $sql->select(array("id"));
            $sql->from(BeanFactory::getBean('rt_report_board'));
            $sql->Where()->equals('mur_client_n_list_id_c', $clientId);
            $sql->limit(1);
            $clientResult = $sql->execute();
            if (empty($clientResult)) {
                $reportBoard = new rt_report_board();
                $reportBoard->mur_client_n_list_id_c = $clientId;
                $reportBoard->no_of_reports = $attachmentCount;
                $reportBoard->save();
            } else {
                $reportBoard = new rt_report_board();
                $reportBoard->retrieve($clientResult[0]['id']);
                $reportBoard->mur_client_n_list_id_c = $clientId;
                $reportBoard->no_of_reports = $reportBoard->no_of_reports + $attachmentCount;
                $reportBoard->save();
            }
        } else {
            $sql = new SugarQuery();
            $sql->select(array("id"));
            $sql->from(BeanFactory::getBean('rt_report_board'));
            $sql->Where()->equals('client_alias', $reportingResult[0]['client_alias']);
            $sql->limit(1);
            $clientResult = $sql->execute();
            if (empty($clientResult)) {
                $reportBoard = new rt_report_board();
                $reportBoard->client_alias = $reportingResult[0]['client_alias'];
                $reportBoard->no_of_reports = + $attachmentCount;
                $reportBoard->save();
            } else {
                $reportBoard = new rt_report_board();
                $reportBoard->retrieve($clientResult[0]['id']);
                $reportBoard->client_alias = $reportingResult[0]['client_alias'];
                $reportBoard->no_of_reports = $reportBoard->no_of_reports + $attachmentCount;
                $reportBoard->save();
            }
        }
    }

}
