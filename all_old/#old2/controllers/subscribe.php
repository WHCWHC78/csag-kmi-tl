<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subscribe extends CI_Controller {

    public function index() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->info->show('error', lang("menu.top.subscribe.emailInvalid"), '#REF', 5);
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'when' => date("y-m-d H:i:s", strtotime("now")),
                'ip' => $this->input->ip_address()
            );

            $this->db->insert('subscribe', $data);

            // complete
            $this->info->show('success', lang("menu.top.subscribe.complete"), '#REF', 5);
        }
    }

}

?>