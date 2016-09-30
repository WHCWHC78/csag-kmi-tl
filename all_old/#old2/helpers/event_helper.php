<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function event_is_not_expire($type, $start, $finnish) {
    // Check event is not expire
    switch ($type) {
        case "Open" : $not_exp = true;
            break;
        case "Close" : $not_exp = false;
            break;
        case "Auto" :
            $now = strtotime("now");
            $start = strtotime($start);
            $finnish = strtotime($finnish);
            if ($now >= $start && $now <= $finnish) {
                $not_exp = true;
            } else {
                $not_exp = false;
            }
            break;
    }
    if ($not_exp)
        return true;
    else
        return false;
}

function event_is_not_full($eid, $limit) {
    // Check event is not full
    $CI = & get_instance();
    if ($limit <= 0)
        $not_full = true;
    else {
        if (event_joiner_count($eid) < $limit) {
            $not_full = true;
        } else {
            $not_full = false;
        }
    }
    if ($not_full)
        return true;
    return false;
}

function event_joiner_count($eid) {
    $CI = & get_instance();
    $query = $CI->db->get_where('member_join_event', array('eid' => $eid));
    return $query->num_rows();
}

function event_member_is_join($mid, $eid) {
    $CI = & get_instance();
    $query = $CI->db->get_where('member_join_event', array('mid' => $mid, 'eid' => $eid));
    if ($query->num_rows() == 1)
        return true;
    return false;
}