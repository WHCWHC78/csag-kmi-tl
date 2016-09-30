<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
		if($this->session->userdata('id')==""){
	        redirect("");
		}else{
			$this->template->write_view('content', 'p_detail', '', TRUE);
			$this->template->render();
		}
    }
	
	public function logout(){
		$this->session->sess_destroy();
		redirect("");
	}
	
	public function login(){
		$id = $_POST['id'];
		$pwd = $_POST['pwd'];
		$query = $this->db->get_where('members', array('student_id' => $id));
		if($query->num_rows()==0){
			$emsg='รหัสนักศึกษา หรือรหัสผ่าน ไม่ถูกต้อง';
		}else{
			$row = $query->row_array();
			if(md5(sha1($pwd))!=$row['password']){
				$emsg='รหัสนักศึกษา หรือรหัสผ่าน ไม่ถูกต้อง';
			}else{
				$up=array('last_login'=>date("y-m-d H:i:s", strtotime("now")));
				$this->db->update('members', $up, array('id' => $row['id']));
				$this->session->set_userdata('id', $row['student_id']);
				redirect("");
			}
		}
		if ($emsg != "") {
			$data["error"] = 1;
			$data["errormsg"] = $emsg;
			$this->template->write_view('content', 'p_home', $data, TRUE);
			$this->template->render();
		}
	}

        public function email(){
            $email = $_POST['email'];
            if(empty($email)){
                $data["error"] = 1;
		$data["errormsg"] = "Invaild E-Mail";
		$this->template->write_view('content', 'p_detail', $data, TRUE);
		$this->template->render();
            }else{
                $up=array('email_kmitl'=> htmlentities(addslashes($email)));
                $this->db->update('members', $up, array('student_id' => $this->session->userdata('id')));
                redirect("account");
            }
        }
}
?>
