<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content extends CI_Controller {

    public function index() {
        $this->template->write_view('content', 'content/about');
        $this->template->render();
    }

    public function calendar() {
        $this->template->write_view('content', 'content/calendar');
        $this->template->render();
    }

    public function about() {
        $this->template->write_view('content', 'content/about');
        $this->template->render();
    }
    
    public function contact() {
        $this->template->write_view('content', 'content/contact');
        $this->template->render();
    }

}

?>