<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Regis extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->language('signup');
    }

    public function index() {
        redirect("event");
    }

    public function form() {
        $this->load->library('form_validation');
        $this->template->write_view('content', 'member/signup_form');
        $this->template->render();
    }

    public function signup() {

        // Prepare data
        $_POST['username'] = strtolower($this->input->post('username'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('recaptcha', 'lang:signup.recaptcha', 'callback_recaptcha_check');

        $this->form_validation->set_rules('firstname', 'lang:signup.firstname', 'required|trim|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('lastname', 'lang:signup.lastname', 'required|trim|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('nickname', 'lang:signup.nickname', 'required|trim|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('birth_year', 'lang:signup.birth_year', 'required|trim|numeric|exact_length[4]');
        $this->form_validation->set_rules('gender', 'lang:signup.gender', 'required|trim|max_length[1]');
        $this->form_validation->set_rules('telephone', 'lang:signup.telephone', 'required|trim|min_length[9]|max_length[12]|numeric');
        $this->form_validation->set_rules('email', 'lang:signup.email', 'required|trim|valid_email|is_unique[members.email]');
        $this->form_validation->set_rules('facebook', 'lang:signup.facebook', 'trim|max_length[255]');

        switch ($this->input->post('reg_type')) {
            case "Student":
                $this->form_validation->set_rules('faculty', 'lang:signup.faculty', 'required|trim|max_length[50]');
                $this->form_validation->set_rules('department', 'lang:signup.department', 'required|trim|max_length[100]');
                $this->form_validation->set_rules('studentid', 'lang:signup.studentid', 'required|trim|exact_length[8]|numeric|is_unique[members.student_id]');
                $this->form_validation->set_rules('ldap', 'lang:signup.ldap', 'required|trim|is_unique[members.ldap]');
                $_POST['occupation'] = lang("signup.default.occupation");
                $_POST['company'] = lang("signup.default.company");
                break;
            case "Inside":
                $this->form_validation->set_rules('division', 'lang:signup.division', 'required|trim|max_length[100]');
                $this->form_validation->set_rules('subdivision', 'lang:signup.subdivision', 'required|trim|max_length[100]');
                $this->form_validation->set_rules('ldap', 'lang:signup.ldap', 'required|trim|is_unique[members.ldap]');
                $_POST['company'] = lang("signup.default.company");
                break;
            case "Outside":
                $this->form_validation->set_rules('occupation', 'lang:signup.occupation', 'required|trim|max_length[50]');
                $this->form_validation->set_rules('company', 'lang:signup.company', 'required|trim|max_length[100]');
                $this->form_validation->set_rules('pin', 'lang:signup.pin', 'required|trim|exact_length[13]|callback_pin_check');
                break;
            default:
            //exit("Error Unexpect: CRS0RT1");
        }

        $this->form_validation->set_rules('username', 'lang:signup.username', 'required|trim|min_length[4]|max_length[15]|alpha|is_unique[members.username]');
        $this->form_validation->set_rules('password', 'lang:signup.password', 'required|trim|max_length[32]');
        $this->form_validation->set_rules('confirmpassword', 'lang:signup.confirmpassword', 'required|trim|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->template->write_view('content', 'member/signup_form');
            $this->template->render();
        } else {
            $data = array(
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'nick_name' => $this->input->post('nickname'),
                'birth_year' => $this->input->post('birth_year'),
                'gender' => $this->input->post('gender'),
                'telephone' => $this->input->post('telephone'),
                'email' => $this->input->post('email'),
                'facebook' => $this->input->post('facebook'),
                'reg_type' => $this->input->post('reg_type'),
                'pin' => $this->input->post('pin'),
                'ldap' => $this->input->post('ldap'),
                'student_id' => $this->input->post('studentid'),
                'faculty' => $this->input->post('faculty'),
                'department' => $this->input->post('department'),
                'division' => $this->input->post('division'),
                'subdivision' => $this->input->post('subdivision'),
                'occupation' => $this->input->post('occupation'),
                'company' => $this->input->post('company'),
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password')),
                'reg_when' => date("y-m-d H:i:s", strtotime("now")),
                'is_email_confirm' => 'N',
                'is_admin' => 'N'
            );

            $this->db->insert('members', $data);
            $mid = $this->db->insert_id();

            // want join event
            $queryEvent = $this->db->get_where('events', array('public' => 'Y'));
            if ($queryEvent->num_rows() <= 0) {
                lang("signup.no_event");
            } else {
                foreach ($queryEvent->result() as $rowEvent) {
                    if ($this->input->post('event' . $rowEvent->eid) == "JOIN") {
                        $data = array(
                            'mid' => $mid,
                            'eid' => $rowEvent->eid,
                            'join_when' => date("y-m-d H:i:s", strtotime("now")),
                            'know' => "",
                            'reason' => ""
                        );

                        $this->db->insert('member_join_event', $data);
                        $this->logs->save($mid, "member_join", $rowEvent->eid);
                    }
                }
            }

            $this->auth->set_member($mid);
            
            $last_event_id = $this->session->userdata('event');
            if (!($last_event_id == null || $last_event_id == "" || !is_numeric($last_event_id))) {
                $redirect = "event/detail/" . $last_event_id;
            }else{
                $redirect = "event";
            }

            $this->info->show('success', lang("event.alert.joinComplete"), $redirect, 10);
            $this->template->write_view('content', 'member/signup_complete');
            $this->template->render();

            
            
        }
    }

    public function recaptcha_check($str) {
        require_once('recaptchalib.php');
        $publickey = "6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk";
        $privatekey = "6Lc6K8cSAAAAADCzEAQle9UqjucaDgr-OhyR4vKc";
        $resp = null;
        $error = null;
        $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $this->input->post("recaptcha_challenge_field"), $this->input->post("recaptcha_response_field"));

        if (!$resp->is_valid) {
            $this->form_validation->set_message('recaptcha_check', lang("signup.recaptcha"));
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function pin_check($id) {
        for ($i = 0, $sum = 0; $i < 12; $i++)
            $sum += (int) ($id{$i}) * (13 - $i);
        if ((11 - ($sum % 11)) % 10 == (int) ($id{12}))
            return true;
        $this->form_validation->set_message('pin_check', lang("signup.pin.incorrect"));
        return false;
    }

    public function login() {
        if ($this->auth->is_member()) {
            redirect("member");
        } else {
            $usr = $this->input->post('username');
            $pwd = $this->input->post('password');

            $query = $this->db->get_where('members', array('username' => $usr));
            if ($query->num_rows() == 0) {
                $this->info->show('error', lang("member.alert.login.error"), '#REF', 5);
                $this->logs->save(0, "login", "fail_username");
            } else {
                $row = $query->row_array();
                if (sha1($pwd) != $row['password']) {
                    $this->info->show('error', lang("member.alert.login.error"), '#REF', 5);
                    $this->logs->save(0, "login", "fail_password");
                } else {
                    $this->auth->set_member($row["mid"]);
                    $this->logs->save($row["mid"], "login", "success");
                    if ($row["is_admin"] == "Y") {
                        $this->auth->set_admin();
                        $this->logs->save($row["mid"], "login_admin", "success");
                    }
                    $this->info->show('success', lang("member.alert.login.success"), '#REF', 0);
                    redirect("#REF");
                }
            }
        }
    }

    public function logout() {
        $mid = $this->auth->get_member_id();
        $this->session->sess_destroy();
        $this->logs->save($mid, "logout", "success");
        redirect("home");
    }

}

?>