<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {

        // Write to $content
        $this->template->write_view('content', 'home');

        // Render the template
        $this->template->render();
    }
    
    public function v2() {
        // Write to $content
        $this->template->write_view('content', 'home2');

        // Render the template
        $this->template->render();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */