<?php

/**
 * @brief Logic hook class for rt_sorting module
 */
class AmendedDate {

    /**
     * @brief Saves Leads Account Name and Primary Address
     * @param rt_sorting $bean
     * @param $event
     * @param $args
     */
    function updateDate($bean, $event, $args) {
        global $timedate, $db, $current_user;
        if ($bean->amendments != $bean->fetched_row['amendments']) {
            $bean->last_amended_modified = TimeDate::getInstance()->getNow(true)->asDb();
        }
    }

    function convertDate($bean, $event, $args) {
        global $current_user, $timedate, $db;
        if (!empty($bean->last_amended_modified)) {
            $currentTime = TimeDate::getInstance()->getNow(true)->asDb();
            $last_amended_modified = $bean->last_amended_modified;
            $exp = new Exception();
            if (!empty($bean->last_amended_modified)) {
                $sql = "Select last_amended_modified from rt_sorting where deleted='0' and id='" . $bean->id . "'";

                $result = $db->query($sql);
                $result = $db->fetchByAssoc($result);
                $last_amended_modified = $result['last_amended_modified'];
            }
            $bean->amended_date = self::time_elapsed_string($last_amended_modified, $currentTime);
        }
    }

    function time_elapsed_string($datetime, $currentTime, $full = false) {
        $UTC = new DateTimeZone("UTC");
        $now = new DateTime($currentTime, $UTC);
        $ago = new DateTime($datetime, $UTC);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full)
            $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

}
