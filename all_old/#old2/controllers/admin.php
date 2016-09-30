<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    var $mid = "";

    function __construct() {
        parent::__construct();
        if (!$this->auth->is_member()) {
            redirect("");
        }
        if (!$this->auth->is_admin()) {
            redirect("");
        }
        $this->mid = $this->auth->get_member_id();
        if ($this->mid == null || $this->mid == "")
            exit("Error Unexpect: CAC001");
    }

    public function index() {
        $this->template->write_view('content', 'admin/index');
        $this->template->render();
    }

    public function viewAsUser() {
        $this->auth->remove_admin();
        redirect("member");
    }

    public function event() {
        $this->load->helper('event');
        $this->db->order_by("eid", "desc");
        $query = $this->db->get('events');
        $data["event_list"] = $query->result();
        $this->template->write_view('content', 'admin/event_list', $data);
        $this->template->render();
    }

    public function event_create() {
        if ($this->input->post('CREATE') != "true") {
            $this->template->write_view('content', 'admin/event_create');
            $this->template->render();
        } else {
            $data = array(
                'ename_th' => $this->input->post('ename_th'),
                'ename_en' => $this->input->post('ename_en'),
                'eapply_start' => $this->input->post('eapply_start'),
                'eapply_finnish' => $this->input->post('eapply_finnish'),
                'eapply_type' => $this->input->post('eapply_type'),
                'restrict_rules' => $this->input->post('rules'),
                'limit_joiner' => $this->input->post('limit_joiner'),
                'can_leave' => $this->input->post('can_leave'),
                'show_count_registered' => $this->input->post('show_count_registered'),
                'public' => $this->input->post('public'),
                'detail_th' => $this->input->post('detail_th', FALSE),
                'detail_en' => $this->input->post('detail_en', FALSE),
                'show_joiner_detail' => $this->input->post('show_joiner_detail'),
                'joiner_detail_th' => $this->input->post('joiner_detail_th', FALSE),
                'joiner_detail_en' => $this->input->post('joiner_detail_en', FALSE),
                'url_logo' => $this->input->post('url_logo'),
            );

            $this->db->insert('events', $data);
            redirect("admin/event");
        }
    }

    public function event_edit($eid) {
        if ($this->input->post('EDIT') != "true") {
            $query = $this->db->get_where('events', array('eid' => $eid));
            $data["event"] = $query->row();
            $this->template->write_view('content', 'admin/event_edit', $data);
            $this->template->render();
        } else {
            $data = array(
                'ename_th' => $this->input->post('ename_th'),
                'ename_en' => $this->input->post('ename_en'),
                'eapply_start' => $this->input->post('eapply_start'),
                'eapply_finnish' => $this->input->post('eapply_finnish'),
                'eapply_type' => $this->input->post('eapply_type'),
                'restrict_rules' => $this->input->post('rules'),
                'limit_joiner' => $this->input->post('limit_joiner'),
                'can_leave' => $this->input->post('can_leave'),
                'show_count_registered' => $this->input->post('show_count_registered'),
                'public' => $this->input->post('public'),
                'detail_th' => $this->input->post('detail_th', FALSE),
                'detail_en' => $this->input->post('detail_en', FALSE),
                'show_joiner_detail' => $this->input->post('show_joiner_detail'),
                'joiner_detail_th' => $this->input->post('joiner_detail_th', FALSE),
                'joiner_detail_en' => $this->input->post('joiner_detail_en', FALSE),
                'url_logo' => $this->input->post('url_logo'),
            );

            $this->db->where('eid', $eid);
            $this->db->update('events', $data);
            redirect("admin/event");
        }
    }

    public function event_delete($eid) {
        $this->db->delete('events', array('eid' => $eid));
        redirect("admin/event");
    }

    public function event_memberList($eid) {
        $query = $this->db->get_where('member_join_event', array('eid' => $eid));
        echo '<table class="table table-hover">';
        echo '<tr><th>Username</th><th>Join on</th><th>Know by</th><th>Reason</th></tr>';
        foreach ($query->result() as $r) {
            echo '<tr>';
            echo '<td><a href="' . site_url("member/editForm/admin/" . $r->mid) . '" target="_blank">' . $this->auth->get_member_info($r->mid)->username . '</a></td>';
            echo "<td>$r->join_when</td><td>$r->know</td><td>$r->reason</td>";
            echo '</tr>';
        }
        echo '</table>';
    }

}

?>