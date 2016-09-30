<?php

class Sessions extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('url', 'security'));
  }

  public function create() {
    if (!$this->session->userdata('email')) {
      $email        = $this->input->post('email');
      $enc_password = do_hash($this->input->post('password'));
      $query_data   = array('email' => $email, 'encrypted_password' => $enc_password);
      $query        = $this->db->get_where('v3_users', $query_data);

      if ($query->num_rows() == 1) {
        $this->session->set_userdata('email', $email);
        $row = $query->row();
        $this->session->set_userdata('user_id', $row->id);
        $this->session->set_userdata('fullname', $row->fullname);
        redirect('home');
      } else {
        echo 'Cannot login somehow : Please Check your <b>Email</b> and Password<br>';
	echo 'Email must be "sXXXXXXX@kmitl.ac.th" format';

      }
    } else {
      echo 'You are already logged in';
      redirect('home');
    }
  }

  public function destroy() {
    $this->session->sess_destroy();
    redirect('home');
  }
}

