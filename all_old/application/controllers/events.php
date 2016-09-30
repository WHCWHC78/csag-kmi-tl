<?php

class Events extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    redirect('events/cmat');
  }

  public function cmat() {
    $this->load->helper('form');

    if ($this->session->userdata('email')) {
      $data['logged_in'] = TRUE;
    } else {
      $data['logged_in'] = FALSE;
    }
    $data['events_active'] = TRUE;

    $this->load->view('layouts/header', $data);
    $this->load->view('events/cmat');
    $this->load->view('layouts/footer');
  }
}

