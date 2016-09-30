<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    var $mid = "";

    function __construct() {
        parent::__construct();
        if (!$this->auth->is_member()) {
            redirect("");
        }
        $this->mid = $this->auth->get_member_id();
        if ($this->mid == null || $this->mid == "")
            exit("Error Unexpect: CMC001");
    }

    public function index() {
        $data["row"] = $this->auth->get_member_info($this->mid);
        $this->template->write_view('content', 'member/index', $data);
        $this->template->render();
    }

    public function editForm($admin = null, $inputid = null) {
        $this->load->language('signup');
        $this->load->library('form_validation');
        if ($admin != null && $inputid != null && $this->auth->is_admin()) {
            $data["admin"] = true;
            $sid = $inputid;
        } else {
            $data["admin"] = false;
            $sid = $this->mid;
        }
        $result = $this->auth->get_member_info($sid);
        if ($result == false)
            exit("Error Unexpect: CMEFAR1");
        $data["row"] = $result;
        $this->template->write_view('content', 'member/edit_form', $data);
        $this->template->render();
    }

    public function editData($admin = null) {
        $data["admin"] = $admin;
        if ($admin != null) {
            $this->template->write('content', '<div class="alert alert-error">You are enter with admin mode. Admin mode can\'t edit user data</div>');
            $this->template->render();
        } else {
            $this->load->language('signup');
            $row = $this->auth->get_member_info($this->mid);

            $data_update = array();

            $this->load->library('form_validation');
            $this->form_validation->set_rules('firstname', 'lang:signup.firstname', 'required|trim|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('lastname', 'lang:signup.lastname', 'required|trim|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('nickname', 'lang:signup.nickname', 'required|trim|min_length[2]|max_length[20]');
            $this->form_validation->set_rules('telephone', 'lang:signup.telephone', 'required|trim|min_length[9]|max_length[12]|numeric');
            $this->form_validation->set_rules('email', 'lang:signup.email', 'required|trim|valid_email');
            $this->form_validation->set_rules('facebook', 'lang:signup.facebook', 'trim|max_length[255]');

            switch ($this->input->post('reg_type')) {
                case "Inside":
                    $data_update = array_merge($data_update, array('division' => $this->input->post('division')));
                    $data_update = array_merge($data_update, array('subdivision' => $this->input->post('subdivision')));
                    $this->form_validation->set_rules('division', 'lang:signup.division', 'required|trim|max_length[100]');
                    $this->form_validation->set_rules('subdivision', 'lang:signup.subdivision', 'required|trim|max_length[100]');
                case "Student":
                    $this->form_validation->set_rules('occupation', 'lang:signup.occupation', 'trim|max_length[50]');
                    $this->form_validation->set_rules('company', 'lang:signup.company', 'trim|max_length[100]');
                    break;
                case "Outside":
                    $this->form_validation->set_rules('occupation', 'lang:signup.occupation', 'required|trim|max_length[50]');
                    $this->form_validation->set_rules('company', 'lang:signup.company', 'required|trim|max_length[100]');
                    break;
                default:
                //exit("Error Unexpect: CRS0RT1");
            }

            if ($row->pin == null || empty($row->pin)) {
                $data_update = array_merge($data_update, array("pin" => $this->input->post('pin')));
                $this->form_validation->set_rules('pin', 'lang:signup.pin', 'trim|exact_length[13]|callback_pin_check');
            }

            if (trim($this->input->post('newpassword')) != "") {
                $data_update = array_merge($data_update, array('password' => sha1($this->input->post('newpassword'))));
                $this->form_validation->set_rules('newpassword', 'lang:signup.newpassword', 'required|trim|max_length[32]');
                $this->form_validation->set_rules('confirmnewpassword', 'lang:signup.confirmnewpassword', 'required|trim|matches[newpassword]');
            }

            $this->form_validation->set_rules('currentpassword', 'lang:signup.currentpassword', 'required|trim|callback_password_check');

            if ($this->form_validation->run() == FALSE) {
                $data["row"] = $row;
                $this->template->write_view('content', 'member/edit_form', $data);
                $this->template->render();
            } else {
                $data_req = array(
                    'first_name' => $this->input->post('firstname'),
                    'last_name' => $this->input->post('lastname'),
                    'nick_name' => $this->input->post('nickname'),
                    'telephone' => $this->input->post('telephone'),
                    'email' => $this->input->post('email'),
                    'facebook' => $this->input->post('facebook'),
                    'occupation' => $this->input->post('occupation'),
                    'company' => $this->input->post('company'),
                );

                $data_update = array_merge($data_update, $data_req);

                $this->db->where('mid', $this->mid);
                $this->db->update('members', $data_update);
                redirect("member/editForm");
            }
        }
    }

    public function password_check($pwd) {
        $row = $this->auth->get_member_info($this->mid);
        if (sha1($pwd) == $row->password)
            return TRUE;
        else
            $this->form_validation->set_message('password_check', lang("signup.currentpassword.incorrect"));
        return FALSE;
    }

    public function pin_check($id) {
        if (strlen($id) == 0)
            return TRUE;
        else {
            for ($i = 0, $sum = 0; $i < 12; $i++)
                $sum += (int) ($id{$i}) * (13 - $i);
            if ((11 - ($sum % 11)) % 10 == (int) ($id{12}))
                return true;
            $this->form_validation->set_message('pin_check', lang("signup.pin.incorrect"));
            return false;
        }
    }

    public function inbox($method = "index", $msgid = null) {
        switch ($method) {
            case "create":
                $this->template->write_view('content', 'member/inbox/create');
                $this->template->render();
                break;
            case "send":
                $query = $this->db->get_where('members', array('username' => strtolower($this->input->post('sendTo'))));
                if ($query->num_rows() != 1) {
                    $this->template->write('content', lang("member.inbox.cannotFindUsername"));
                    $this->template->render();
                } else {
                    $row = $query->row();

                    $data = array(
                        'send_to' => $row->mid,
                        'send_by' => $this->auth->get_member_id(),
                        'subject' => $this->input->post('subject'),
                        'body' => $this->input->post('bodyMSG'),
                        'delete' => 'N',
                        'when' => date("y-m-d H:i:s", strtotime("now")),
                    );
                    $this->db->insert('inbox', $data);
                    $this->template->write('content', lang("member.inbox.sendComplete"));
                    $this->template->render();
                }
                break;
            case "read":
                $query = $this->db->get_where('inbox', array('iid' => $msgid));
                if ($query->num_rows() != 1) {
                    $this->template->write('content', lang("member.inbox.cannotFindMessage"));
                    $this->template->render();
                } else {
                    $data["message"] = $query->row();
                    if ($data["message"]->send_by != $this->mid && $data["message"]->send_to != $this->mid) {
                        $this->template->write('content', lang("member.inbox.cannotFindMessage"));
                        $this->template->render();
                    } else {
                        if ($data["message"]->delete == 'Y') {
                            $this->template->write('content', lang("member.inbox.cannotFindMessage"));
                            $this->template->render();
                        } else {
                            $dataUpdate = array(
                                'lastseen' => date("y-m-d H:i:s", strtotime("now")),
                            );
                            $this->db->where('iid', $msgid);
                            $this->db->update('inbox', $dataUpdate);

                            $query = $this->db->get_where('members', array('mid' => $data["message"]->send_by));
                            $data["from"] = $query->row()->username;

                            $this->template->write_view('content', 'member/inbox/detail', $data);
                            $this->template->render();
                        }
                    }
                }
                break;
            case "delete":
                $data = array(
                    'delete' => 'Y',
                );
                $this->db->where('iid', $msgid);
                $this->db->update('inbox', $data);

                redirect("member/inbox");
                break;
            default:
                $query = $this->db->get_where('inbox', array('send_to' => $this->mid, 'delete' => 'N'));
                $data["message"] = $query->result();
                $this->template->write_view('content', 'member/inbox/list', $data);
                $this->template->render();
        }
    }

    public function joinEventList() {
        $query = $this->db->get_where('member_join_event', array('mid' => $this->mid));

        $data["join_list"] = $query->result();

        $this->template->write_view('content', 'member/joinEventList', $data);
        $this->template->render();
    }

}

?>