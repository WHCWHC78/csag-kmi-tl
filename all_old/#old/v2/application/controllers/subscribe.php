<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subscribe extends CI_Controller {

    public function index() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'อีเมล์', 'required|trim|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->template->write('content', '<div style="height: 100px; text-align: center;">E-Mail is not vaild. Please try again!</div>');
            $this->template->render();
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'when' => date("y-m-d H:i:s", strtotime("now")),
                'ip' => $this->input->ip_address()
            );

            $this->db->insert('subscribe', $data);

            // complete
            $this->template->write_view('content', 'subscribe');
            $this->template->render();
        }
    }

}

?>