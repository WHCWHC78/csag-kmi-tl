<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email extends CI_Controller {

    public function index() {
        
        /*

        $this->db->distinct();
        $this->db->select('email');
        $query = $this->db->get_where('subscribe', array('type' => 'Normal'));

        foreach ($query->result() as $row) {
            $this->template->write('content', $row->email);
            $this->template->write('content', '-> ' . $this->semail($row->email));
            $this->template->write('content', '<br/>');
        }

        $this->template->write('content', '#####<br/>');

        $this->db->distinct();
        $this->db->select('email');
        $query = $this->db->get_where('register');

        foreach ($query->result() as $row) {
            $this->template->write('content', $row->email);
            $this->template->write('content', '-> ' . $this->semail($row->email));
            $this->template->write('content', '<br/>');
        }

        $this->template->render();
        
         */
        
        $this->template->write('content', '-> ' . $this->semail('aikkew@kmi.tl'));
        $this->template->render();
        
    }

    private function semail($email_in) {
        // send activation email to user
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://pod51012.outlook.com',
            'smtp_port' => 587,
            'smtp_user' => 'aikkew@kmi.tl',
            'smtp_pass' => "vb88b;:y'1992",
        );

        $this->load->library('email', $config);
        $this->email->from('aikkew@kmi.tl', 'อิคคิว');
        $this->email->to($email_in);
        $this->email->subject('Subject ทดสอบ');
        $this->email->message("Test message เนื้อหา");
        
        if (!$this->email->send()) {
            return "false";
        } else {
            return "true";
        }
    }

}