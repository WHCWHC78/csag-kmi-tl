<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    public function index() {
        $this->production();
    }
    
    public function production(){
        $this->template->write_view('content', 'portfolio/production');
        $this->template->render();
    }

    public function year($year) {
        if ($year == "2555") {
            $this->template->write_view('content', 'portfolio/2555');
        }
        $this->template->render();
    }

}