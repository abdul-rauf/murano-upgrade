<?php

class SortingConfirmedClients extends SugarApi {

    /**
     * @function registerApiRest
     * @description registering the API call to get confirmed clients from sorting records
     * @return type
     */
    public function registerApiRest() {
        return array(
            'getClients' => array(
                'reqType' => 'GET',
                'path' => array('Sorting', 'getConfirmedClients', '?'),
                'pathVars' => array('', '', 'sorting_id'),
                'method' => 'getClients',
                'shortHelp' => 'list of confirmed clients',
                'longHelp' => '',
            ),
            'getMultiClients' => array(
                'reqType' => 'GET',
                'path' => array('Sorting', 'getMultiConfirmedClients', '?'),
                'pathVars' => array('', '', 'sorting_id'),
                'method' => 'getMultiClients',
                'shortHelp' => 'list of confirmed clients from multiple sorting',
                'longHelp' => '',
            ),
            'deleteDocs' => array(
                'reqType' => 'GET',
                'path' => array('Sorting', 'deleteDocs', '?'),
                'pathVars' => array('', '', 'doc_ids'),
                'method' => 'deleteDocs',
                'shortHelp' => 'Delete documents after successful email sent',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Function to return a list of confirmed clients
     * @param null
     * @return null
     */
    public function getClients($api, $args) {
        $sortingId = $args['sorting_id'];
        return self::confirmedClients($sortingId);
    }

    public function getMultiClients($api, $args) {
        require_once 'custom/modules/Leads/clients/base/api/generateWPDFApi.php';
        $templateName = 'Murano Investor Report';
        $sortingId = $args['sorting_id'];
        $sortingId = explode(",", $sortingId);
        $cClients = array();
        foreach ($sortingId as $id) {
            $client = self::confirmedClients($id);
            $cClients = array_merge($cClients, $client);
        }
        $objNote = new generateWPDFApi();
        $multiClients = array();
        foreach ($cClients as $client) {
            $args['module'] = 'Leads';
            $args['record'] = $client[0]['leadId'];
            $args['pdf_template_id'] = $templateName;
            $note = $objNote->generateWPDF("", $args);
            if (array_key_exists($client[0]['id'], $multiClients)) {
                $notesArr = array();
                $notesArr = $multiClients[$client[0]['id']]['noteId'];

                $search = " & ";
                $subject = $multiClients[$client[0]['id']]['leadName'];
                $replace = ", ";

                $multiClients[$client[0]['id']]['leadName'] = self::str_lreplace($search, $replace, $subject);
                $multiClients[$client[0]['id']]['leadName'].=" & " . $client[0]['leadName'];

                $sortingIds = array();
                $sortingIds = $multiClients[$client[0]['id']]['sortingId'];
                array_push($sortingIds, $client[0]['sortingId']);
                $client[0]['sortingId'] = $sortingIds;
                
                array_push($notesArr, $note);
                $client[0]['noteId'] = $notesArr;
                
                $multiClients[$client[0]['id']]['noteId'] = $notesArr;
                $multiClients[$client[0]['id']]['sortingId'] = $sortingIds;
            } else {
                $notesArr = array();
                array_push($notesArr, $note);

                $sortingIds = array();
                array_push($sortingIds, $client[0]['sortingId']);
                $client[0]['sortingId'] = $sortingIds;
                
                $client[0]['noteId'] = $notesArr;
                $multiClients[$client[0]['id']] = $client[0];
            }

        }
        $multiClients = array_values($multiClients);
        return $multiClients;
    }

    private function str_lreplace($search, $replace, $subject) {
        $pos = strrpos($subject, $search);

        if ($pos !== false) {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }

        return $subject;
    }

    /**
     * @function confirmedClients
     * @param sorting record Id
     * @return confirmed clients array
     */
    public function confirmedClients($sortingId) {
        global $current_user;
        $sortingObj = new rt_sorting();
        $sortingObj->retrieve($sortingId);
        $clients = explode("\n", $sortingObj->confirmed_clients);

        $leadObj = new Lead();
        $leadObj->retrieve($sortingObj->rt_sorting_leadsleads_ida);
        $leadAccountName = $leadObj->account_name;

        $clientsResult = array();
        foreach ($clients as $client) {
            if (!empty($client)) {
                $sql = new SugarQuery();
                $sql->from(BeanFactory::getBean('mur_client_n_list'));
                $sql->Where()->equals('name', $client);
                $cl_reporting = $sql->join('rt_client_reporting_mur_client_n_list')->joinName();
                $sql->select(array("id", "name", "$cl_reporting.assigned_user_id", "$cl_reporting.backup_analyst", "$cl_reporting.email_to", "$cl_reporting.email_cc", "$cl_reporting.email_bcc"));
                $sql->limit(1);
                $result = $sql->execute();
                $clientUserName = new User();
                $clientUserName->retrieve($result[0]['assigned_user_id']);
                $result[0]["sortingId"] = $sortingId;
                $result[0]["leadName"] = $leadAccountName;
                $result[0]["leadId"] = $sortingObj->rt_sorting_leadsleads_ida;
                if (count($result) > 0 && ($current_user->user_name == $clientUserName->user_name || $current_user->user_name == $result[0]['backup_analyst'])) {
                    array_push($clientsResult, $result);
                }
            }
        }
        return $clientsResult;
    }

    public function deleteDocs($api, $args) {
        global $current_user;
        $docIds = $args['doc_ids'];

        $docIds = explode(",", $docIds);

        foreach ($docIds as $id) {
            $doc = new Document();
            $doc->retrieve($id);

            $docRev = new DocumentRevision();
            $docRev->retrieve($doc->document_revision_id);
            $docRev->deleted = '1';
            unlink("upload://" . $docRev->id);
            $docRev->save();


            $doc->deleted = '1';
            $doc->save();
        }
    }

}
