<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    public function index() {
        $id = $this->session->userdata('id');
        if ($id != "") {

            $this->db->select('facebook');
            $query = $this->db->get_where('register', array('student_id' => $id));
            if ($query->num_rows() == 0) {
                $this->template->write('content', 'ERROR! U001');
                $this->template->render();
            } else {
                $row = $query->row_array();
                if ($row["facebook"] == "") {
                    $this->template->write_view('content', 'update');
                    $this->template->render();
                } else {
                    $this->template->write_view('content', 'member');
                    $this->template->render();
                }
            }
        } else {
            $this->template->write_view('content', 'home');
            $this->template->render();
        }
    }

    public function regis() {

        require_once('recaptchalib.php');
        $publickey = "6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk";
        $privatekey = "6Lc6K8cSAAAAADCzEAQle9UqjucaDgr-OhyR4vKc";

        $resp = null;

        $error = null;

        $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $this->input->post("recaptcha_challenge_field"), $this->input->post("recaptcha_response_field"));

        $this->load->library('form_validation');

        /*
          $this->form_validation->set_rules('username', 'Username', 'callback_username_check');
          $this->form_validation->set_rules('password', 'Password', 'required');
          $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
          $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[users.email]');
         */
        $_POST['studentid'] = $this->input->post('studentid');
        $_POST['studentid'] = "55" . $_POST['studentid'];

        $this->form_validation->set_rules('firstname', 'ชื่อจริง', 'required|trim|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('lastname', 'นามสกุล', 'required|trim|min_length[2]|max_length[50]');
        $this->form_validation->set_rules('nickname', 'ชื่อเล่น', 'required|trim|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('age', 'อายุ', 'required|trim|greater_than[17]|less_than[22]');
        $this->form_validation->set_rules('gender', 'เพศ', 'required|trim|max_length[1]');
        $this->form_validation->set_rules('telephone', 'เบอร์โทรศัพท์', 'required|trim|min_length[9]|max_length[12]|numeric');
        $this->form_validation->set_rules('email', 'อีเมล์', 'required|trim|valid_email|is_unique[register.email]');
        $this->form_validation->set_rules('facebook', 'Facebook', 'required|trim|max_length[255]');
        $this->form_validation->set_rules('faculty', 'คณะ', 'required|trim|max_length[50]');
        $this->form_validation->set_rules('department', 'สาขาวิชา', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('studentid', 'รหัสนักศึกษา', 'required|trim|exact_length[8]|numeric|is_unique[register.student_id]');
        $this->form_validation->set_rules('password', 'รหัสผ่าน', 'required|trim|max_length[32]');
        $this->form_validation->set_rules('confirmpassword', 'ยืนยันรหัสผ่าน', 'required|trim|matches[password]|max_length[32]');
        $this->form_validation->set_rules('know', 'รู้จักกิจกรรมนี้ผ่านทาง', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('regis_type', 'ต้องการลงทะเบียน', 'required|trim|exact_length[1]|numeric|greater_than[0]|less_than[4]');

        if ($this->form_validation->run() == FALSE || !$resp->is_valid) {
            $data["modal"] = FALSE;
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                $data["modal"] = TRUE;
            }
            $this->template->write_view('content', 'regis', $data);
            $this->template->render();
        } else {
            $data = array(
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'nick_name' => $this->input->post('nickname'),
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'telephone' => $this->input->post('telephone'),
                'email' => $this->input->post('email'),
                'facebook' => $this->input->post('facebook'),
                'student_id' => $this->input->post('studentid'),
                'faculty' => $this->input->post('faculty'),
                'department' => $this->input->post('department'),
                'password' => sha1($this->input->post('password')),
                'know' => $this->input->post('know'),
                'last_login' => '',
                'reg_when' => date("y-m-d H:i:s", strtotime("now")),
                'reg_ip' => $this->input->ip_address(),
                'reg_type' => $this->input->post('regis_type'),
                'private_msg' => "-"
            );

            $this->db->insert('register', $data);
            $this->template->write_view('content', 'complete');
            $this->template->render();
        }
    }

    public function login() {
        $id = $this->input->post('studentid');
        $pwd = $this->input->post('password');

        // CSAG login
        $query = $this->db->get_where('register', array('student_id' => $id));
        if ($query->num_rows() == 0) {
            $emsg = 'รหัสนักศึกษา หรือรหัสผ่าน ไม่ถูกต้อง';
        } else {
            $row = $query->row_array();
            if (sha1($pwd) != $row['password']) {
                $emsg = 'รหัสนักศึกษา หรือรหัสผ่าน ไม่ถูกต้อง';
            } else {
                $update = array('last_login' => date("y-m-d H:i:s", strtotime("now")));
                $this->db->update('register', $update, array('id' => $row['id']));
                $this->session->set_userdata('id', $row['student_id']);
                redirect("member");
            }
        }
        if ($emsg != "") {
            $data["error"] = 1;
            $data["errormsg"] = $emsg;
            $this->template->write('content', '<div style="height: 100px; text-align: center;">' . $emsg . '</div>', $data);
            $this->template->render();
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect("home");
    }

    public function update() {
        $this->template->write_view('content', 'update');
        $this->template->render();
    }

    public function updatedata() {
        $fb = trim($this->input->post('facebook'));
        if ($fb == "" || $fb == null || empty($fb)) {
            $this->template->write_view('content', 'update');
            $this->template->render();
        } else {
            $id = $this->session->userdata('id');
            $data = array(
                'facebook' => $fb,
            );
            $this->db->where('student_id', $id);
            $this->db->update('register', $data);
            redirect("member");
        }
    }

    public function data($sort = "data") {
        if ($this->session->userdata('id') == "csag") {
            /* if ($sort == "update")
              $this->db->order_by("last_edit", "desc");
              if ($sort == "score"){
              $this->db->order_by("score1", "desc");
              $this->db->order_by("score2", "desc");
              $this->db->order_by("score3", "desc");
              }
              $query = $this->db->get('register');
             * */
            $query = $this->db->query('select * from register order by (score1+score2+score3) desc');
            $row = $query->result();
            $data = array(
                'row' => $row
            );
            $this->template->write_view('content', 'data', $data);
            $this->template->render();
        } else {
            redirect("home");
        }
    }

    public function tech() {
        $id = $this->session->userdata('id');
        if ($id != "") {
            $this->template->write_view('content', 'tech');
            $this->template->render();
        } else {
            $this->template->write('content', '<div style="min-height: 50px;">โปรดเข้าสู่ระบบก่อน (โดยการใส่รหัสนักศึกษาและรหัสผ่านด้านบน)</div>');
            $this->template->render();
        }
    }

    public function result() {
        $id = $this->session->userdata('id');
        if ($id == "" || $id == null || empty($id)) {
            redirect("");
        } else {

            $data = array(
                'seeit' => date("y-m-d H:i:s", strtotime("now"))
            );
            $this->db->where('student_id', $id);
            $this->db->update('register', $data);

            $query = $this->db->get_where('register', array('student_id' => $id));
            if ($query->num_rows() == 0) {
                $this->template->write('content', 'ERROR! R001');
                $this->template->render();
            } else {
                $row = $query->row_array();
                $data = array(
                    "row" => $row
                );
                $this->template->write_view('content', 'result', $data);
                $this->template->render();
            }
        }
    }

}

?>