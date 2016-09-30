<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ERROR_404 extends CI_Controller {

    public function index() {

        // Write to $content
        $this->template->write_view('content', 'content/404');

        // Render the template
        $this->template->render();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */