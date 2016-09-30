<?php

class Registrations extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function next() {
    if (!$this->session->userdata('email')) {
      redirect('home');
    } else {
      $this->load->helper('form');

      $data['logged_in'] = TRUE;

      $this->load->view('layouts/header', $data);
      $this->load->view('registrations/next');
      $this->load->view('layouts/footer');
    }
  }

  public function finish() {
    if (!$this->session->userdata('email')) {
      redirect('home');
    } else {
      $data['logged_in'] = TRUE;

      $this->load->view('layouts/header', $data);
      $this->load->view('registrations/finish');
      $this->load->view('layouts/footer');
    }
  }

  public function create() {
    $this->load->database();
    $this->load->helper(array('form', 'security'));
    $this->load->library('form_validation');

    $_POST['email'] .= '@kmitl.ac.th';

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[v3_users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required|matches[password_confirmation]');
    $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'required');
    $this->form_validation->set_rules('fullname', 'Fullname', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('form_errors', validation_errors());
      echo 'something went wrong, sorry for that :(<br>';
      echo validation_errors() . '<br>';
      echo 'back to <a href="' . site_url() . '">Home</a> and try again?';
    } else {
      $email = $this->input->post('email');
      $data = array(
        'email' => $email,
        'encrypted_password' => do_hash($this->input->post('password')),
        'fullname' => $this->input->post('fullname'),
        'phone' => $this->input->post('phone')
      );

      if ($this->db->insert('v3_users', $data)) {
        $query_data = array('email' => $email);
        $query      = $this->db->get_where('v3_users', $query_data);

        if ($query->num_rows() == 1) {
          $this->session->set_userdata('email', $email);
          $row = $query->row();
          $this->session->set_userdata('user_id', $row->id);
          $this->session->set_userdata('fullname', $row->fullname);
        }
        redirect('registrations/next');
      } else {
        echo 'something went wrong, sorry for that :(<br>';
        echo 'back to <a href="' . site_url() . '">Home</a> and try again?';
      }
    }
  }
}
