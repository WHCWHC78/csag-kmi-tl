<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Regis extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->write_view('content', 'p_regis', '', TRUE);
        $this->template->render();
    }

    public function submit() {
        // Recaptcha
        $valid = 0;
        if (1) {
            require_once('recaptchalib.php');
            $publickey = "6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk";
            $privatekey = "6Lc6K8cSAAAAADCzEAQle9UqjucaDgr-OhyR4vKc";

            $resp = null;

            $error = null;

            $resp = recaptcha_check_answer($privatekey,
                            $_SERVER["REMOTE_ADDR"],
                            $_POST["recaptcha_challenge_field"],
                            $_POST["recaptcha_response_field"]);

            if ($resp->is_valid)
                $valid = 1;
        }
		if(1){
            $data = array();
            $field = array("first_name", "last_name", "nick_name", "age", "gender", "telephone", "email", "student_id", "faculty", "department","know","pwd","pwd2","regis_type");

            $error = 0;
            foreach ($field as $i => $d) {
                if (empty($_POST[$d]))
                    $error = 1;
                else
                    $data[$d] = addslashes($_POST[$d]);
            }

            $emsg = "";
			if($this->session->userdata('id')!=""){
				$emsg = 'คุณกำลังอยู่ในระบบ ไม่สามารถลงทะเบียนได้';
			}else if ($error) {
                $emsg = 'ระบุข้อมูลไม่ครบถ้วน';
			} else if (!$valid) {
				$emsg = 'ระบุข้อความไม่ตรงกับภาพ (Recaptcha)';
            } else if (mb_strlen($data['first_name'], 'UTF-8') > 50) {
                $emsg = 'ชื่อจริง ยาวเกินไป';
            } else if (mb_strlen($data['last_name'], 'UTF-8') > 50) {
                $emsg = 'นามสกุล ยาวเกินไป';
            } else if (mb_strlen($data['nick_name'], 'UTF-8') > 20) {
                $emsg = 'ชื่อเล่น ยาวเกินไป';
            } else if (mb_strlen($data['gender'], 'UTF-8') != 1) {
                $emsg = 'ระบุเพศไม่ถูกต้อง';
            } else if (mb_strlen($data['telephone'], 'UTF-8') != 10 || !preg_match("/^[0-9]{10}$/", $data['telephone'])) {
                $emsg = 'หมายเลขโทรศัพท์ไม่ถูกต้อง';
            } else if (mb_strlen($data['email'], 'UTF-8') > 100 || !preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $data['email'])) {
                $emsg = 'E-Mail ไม่ถูกต้อง';
            } else if (mb_strlen($data['student_id'], 'UTF-8') != 6 || !preg_match("/^[0-9]{6}$/", $data['student_id'])) {
                $emsg = 'รหัสนักศึกษาไม่ถูกต้อง';
            } else if (mb_strlen($data['faculty'], 'UTF-8') > 40) {
                $emsg = 'ข้อมูลคณะไม่ถูกต้อง';
            } else if (mb_strlen($data['department'], 'UTF-8') > 100) {
                $emsg = 'ข้อมูลสาขาวิชาไม่ถูกต้อง';
            } else if (mb_strlen($data['know'], 'UTF-8') > 100) {
                $emsg = 'ข้อมูลที่คุณรู้จัก CSAG ไม่ถูกต้อง';
			} else if ($data['pwd']!=$data['pwd2']) {
                $emsg = 'คุณระบุรหัสผ่านไม่ตรงกัน';
			} else if ($data['regis_type']!=1&&$data['regis_type']!=2&&$data['regis_type']!=3) {
                $emsg = 'โปรดเลือกสิ่งที่คุณต้องการลงทะเบียนด้วย';
            } else {
				$data['student_id'] = '54' . $data['student_id'];
				$query = $this->db->get_where('members', array('student_id' => $data['student_id']));
				if($query->num_rows()!=0){
					$emsg = 'รหัสนักศึกษา '.$data['student_id'].' ได้ทำการลงทะเบียนไปแล้ว';
				}else{
					$data['password']=md5(sha1($data['pwd']));
					unset($data['pwd']);
					unset($data['pwd2']);
					$data['gender'] = ($data['gender'] == 'M') ? 'M' : 'F';
					$data['reg_when'] = date("y-m-d H:i:s", strtotime("now"));
					$data['reg_ip'] = $_SERVER['REMOTE_ADDR'];
					$data['private_msg'] = '-';
	
					$this->db->insert('members', $data);
					redirect("");
				}
            }
            if ($emsg != "") {
                $data["error"] = 1;
                $data["errormsg"] = $emsg;
                $this->template->write_view('content', 'p_regis', $data, TRUE);
                $this->template->render();
            }
        }
    }
}