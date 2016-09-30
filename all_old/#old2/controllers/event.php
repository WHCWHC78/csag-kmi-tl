<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event extends CI_Controller {

    public function index() {

        if ($this->auth->is_admin())
            $query = $this->db->get('events');
        else
            $query = $this->db->get_where('events', array('public' => 'Y'));

        $event_list = array();

        foreach ($query->result() as $row) {
            if (!$this->auth->is_member()) {
                $row->is_join = 0;
            } else {
                $mid = $this->auth->get_member_id();
                if ($this->is_join($mid, $row->eid)) {
                    $row->is_join = 1;
                } else {
                    $row->is_join = 0;
                }
            }
            array_push($event_list, $row);
        }

        $data["event_list"] = $event_list;

        $this->template->write_view('content', 'event/list', $data);
        $this->template->render();
    }

    public function detail($eid = null, $desc = null) {
        if ($eid == null || $eid == "" || !is_numeric($eid)) {
            redirect("home");
        } else {
            $query = $this->db->get_where('events', array('eid' => $eid));
            if ($query->num_rows() == 0) {
                $this->info->show('error', lang("event.alert.cannotFoundID"), 'event', 5);
            } else {
                $data["event"] = $query->row_array();
                if ($desc == null)
                    redirect("event/detail/" . $data["event"]["eid"] . "/" . $data["event"]['ename_' . getLang()]);

                if ($data["event"]["public"] != 'Y' && !$this->auth->is_admin()) {
                    redirect("");
                } else {
                    $this->session->set_userdata('event', $eid);
                    $this->template->write_view('content', 'event/detail', $data);
                    $this->template->render();
                }
            }
        }
    }

    private function is_join($mid = null, $eid = null) {
        if ($mid == null || $eid == null)
            exit("Error Unexpect: CELISJ0");
        $query = $this->db->get_where('member_join_event', array('mid' => $mid, 'eid' => $eid));
        if ($query->num_rows() != 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function join($eid = null, $check = false) {
        if ($eid == null || $eid == "" || !is_numeric($eid)) {
            redirect("home");
        } else {
            $query = $this->db->get_where('events', array('eid' => $eid));
            if ($query->num_rows() == 0) {
                $this->info->show('error', lang("event.alert.cannotFoundID"), 'event', 5, !$check);
            } else {
                $row = $query->row();
                if (!$this->auth->is_member()) {
                    $this->info->show('info', lang("event.alert.memberOnly"), 'regis/form', -1, !$check);
                } else {
                    $mid = $this->auth->get_member_id();
                    if ($this->is_join($mid, $eid)) {
                        $this->info->show('warning', lang("event.alert.alreadyJoin"), 'event/detail/' . $row->eid, 5, !$check);
                    } else {
                        $this->load->helper('event');
                        if (!event_is_not_full($row->eid, $row->limit_joiner)) {
                            $this->info->show('error', lang("event.alert.fullSeat"), 'event/detail/' . $row->eid, 5, !$check);
                        } else {
                            if (!event_is_not_expire($row->eapply_type, $row->eapply_start, $row->eapply_finnish)) {
                                $this->info->show('error', lang("event.alert.close"), 'event/detail/' . $row->eid, 5, !$check);
                            } else {
                                if ($row->public != 'Y' && !$this->auth->is_admin()) {
                                    $this->info->show('error', lang("event.alert.cannotFoundID"), 'event', 5, !$check);
                                } else {
                                    // Check join restrict_rule
                                    $can_join = false;
                                    $member = $this->auth->get_member_info();
                                    switch ($row->restrict_rules) {
                                        case "#any" :
                                            $can_join = true;
                                            break;
                                        case "#Student" :
                                            if ($member->reg_type == "Student")
                                                $can_join = true;
                                            break;
                                        case "#Inside" :
                                            if ($member->reg_type == "Inside")
                                                $can_join = true;
                                            break;
                                        case "#KMITL" :
                                            if ($member->reg_type == "Student" || $member->reg_type == "Inside")
                                                $can_join = true;
                                            break;
                                        case "#Outside" :
                                            if ($member->reg_type == "Outside")
                                                $can_join = true;
                                            break;
                                        default:
                                            if ($member->reg_type == "Student" || $member->reg_type == "Inside")
                                                if (preg_match($row->restrict_rules, $member->ldap))
                                                    $can_join = true;
                                            break;
                                    }

                                    if (!$can_join && !$this->auth->is_admin()) {
                                        $this->info->show('error', lang("event.alert.qualification"), 'event/detail/' . $row->eid, 5, !$check);
                                    } else {
                                        if ($check) {
                                            echo "success!";
                                        } else {
                                            $data = array(
                                                'mid' => $mid,
                                                'eid' => $eid,
                                                'join_when' => date("y-m-d H:i:s", strtotime("now")),
                                                'know' => $this->input->post('know'),
                                                'reason' => $this->input->post('reason')
                                            );

                                            $this->db->insert('member_join_event', $data);
                                            $this->logs->save($mid, "join_event", $eid);
                                            $this->info->show('success', lang("event.alert.joinComplete"), 'event/detail/' . $row->eid, 5, !$check);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function leave($eid = null, $check = false) {
        if ($eid == null || $eid == "" || !is_numeric($eid)) {
            redirect("home");
        } else {
            $query = $this->db->get_where('events', array('eid' => $eid));
            if ($query->num_rows() == 0) {
                $this->info->show('error', lang("event.alert.cannotFoundID"), 'event', 5, !$check);
            } else {
                if (!$this->auth->is_member()) {
                    $this->info->show('error', lang("event.alert.memberOnlyLeave"), 'event', 5, !$check);
                } else {
                    $mid = $this->auth->get_member_id();
                    if (!$this->is_join($mid, $eid)) {
                        $this->info->show('error', lang("event.alert.notJoinList"), 'event', 5, !$check);
                    } else {
                        $row = $query->row();
                        if ($row->public != 'Y' && !$this->auth->is_admin()) {
                            $this->info->show('error', lang("event.alert.cannotFoundID"), 'event', 5, !$check);
                        } else {
                            if ($row->can_leave != 'Y') {
                                $this->info->show('error', lang("event.alert.leaveEventClose"), 'event/detail/' . $row->eid, 5, !$check);
                            } else {
                                if ($check) {
                                    echo "success!";
                                } else {
                                    $this->db->delete('member_join_event', array('mid' => $mid, 'eid' => $eid));
                                    $this->logs->save($mid, "leave_event", $eid, $this->input->post('reason'));
                                    $this->info->show('success', lang("event.alert.leaveComplete"), 'event/detail/' . $row->eid, 5, !$check);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

}

?>