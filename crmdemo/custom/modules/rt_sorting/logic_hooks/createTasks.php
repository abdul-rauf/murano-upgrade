<?php

/**
 * @brief Logic hook class for rt_sorting module
 */
class SortingTask {

    /**
     * @brief Create Task on Sorting record creation
     * @param rt_sorting $bean
     * @param $event
     * @param $args
     */
    function createTasks($bean, $event, $args) {
        global $timedate, $db, $current_user;
        $counter = 0;
        if (array_key_exists('feedback_date', $args['dataChanges']) || (empty($args['dataChanges']) && $bean->feedback_date != "")) {
            $query = "SELECT count(*) as num "
                    . "FROM   tasks "
                    . "WHERE  deleted=0 "
                    . "AND    parent_id ='$bean->rt_sorting_leadsleads_ida';";
            $result = $db->query($query, true, "Error reading number of tasks: ");
            $row = $db->fetchByAssoc($result);
            if ($row != null) {
                $counter = $row['num'] + 1;
            }

            $taskClient = new Task();
            $taskClient->name = "Feedback " . $counter;
            if (empty($args['dataChanges'])) {
                $taskClient->date_start = $bean->date_entered;
            } else {
                $taskClient->date_start = $bean->fetched_row['date_entered'];
            }
            if ($bean->report_status == "send") {
                $time = "11:45pm";
                $date = $bean->feedback_date;
                $combinedDT = $date . " " . $time;
                $datetime = new datetime("$combinedDT");
                $timedate = new TimeDate();
                $taskClient->date_due = $timedate->asUser($datetime);
            } else {
                $taskClient->date_due = $timedate->now();
            }
            $taskClient->priority = "High";
            $taskClient->status = "In Progress";
            $taskClient->parent_type = "Leads";
            $taskClient->parent_id = $bean->rt_sorting_leadsleads_ida;
            $taskClient->assigned_user_id = $bean->assigned_user_id;
            $taskClient->save();
            $counter++;
        }
    }

}
