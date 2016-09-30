<?php

class Attendances extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function create() {
    if ($this->session->userdata('email')) {
      $events =  $this->input->post('events');
      foreach ($events as $event) {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['event_id'] = $event;
        $this->db->insert('v3_event_attendances', $data);
      }
    }
    redirect('registrations/finish');
  }
}


