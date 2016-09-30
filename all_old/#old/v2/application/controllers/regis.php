<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Regis extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');
        $data["modal"] = FALSE;
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data["modal"] = TRUE;
        }
        $this->template->write_view('content', 'regis', $data);
        $this->template->render();
    }

    public function listMembers() {
        
    }

}

?>