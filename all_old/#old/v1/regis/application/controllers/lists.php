<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lists extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->write_view('content', 'p_lists', '', TRUE);
        $this->template->render();
    }

}

?>
