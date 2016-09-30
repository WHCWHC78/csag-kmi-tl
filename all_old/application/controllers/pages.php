<?php

class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    redirect('home');
  }

  public function home() {
    $this->load->helper('form');

    if ($this->session->userdata('email')) {
      $data['logged_in'] = TRUE;
    } else {
      $data['logged_in'] = FALSE;
    }

    $data['home_active'] = TRUE;

    $this->load->view('layouts/header', $data);
    $this->load->view('pages/home');
    $this->load->view('layouts/footer');
  }

  public function under_construction() {
    $this->load->helper('form');

    if ($this->session->userdata('email')) {
      $data['logged_in'] = TRUE;
    } else {
      $data['logged_in'] = FALSE;
    }

    $this->load->view('layouts/header', $data);
    $this->load->view('pages/under_construction');
    $this->load->view('layouts/footer');
  }

  public function products() {
     $this->load->helper('form');

    if ($this->session->userdata('email')) {
      $data['logged_in'] = TRUE;
    } else {
      $data['logged_in'] = FALSE;
    }
    $data['about_active'] = TRUE;

    $this->load->view('layouts/header', $data);
    $this->load->view('pages/product');
    $this->load->view('layouts/footer');
  }

  public function experiences() {
     $this->load->helper('form');

    if ($this->session->userdata('email')) {
      $data['logged_in'] = TRUE;
    } else {
      $data['logged_in'] = FALSE;
    }
    $data['about_active'] = TRUE;

    $this->load->view('layouts/header', $data);
    $this->load->view('pages/experiences');
    $this->load->view('layouts/footer');
  }

  public function about() {
     $this->load->helper('form');
    
    if ($this->session->userdata('email')) {
      $data['logged_in'] = TRUE;
    } else {
      $data['logged_in'] = FALSE;
    }
    $data['about_active'] = TRUE;

    $this->load->view('layouts/header', $data);
    $this->load->view('pages/about');
    $this->load->view('layouts/footer');
  }
}
