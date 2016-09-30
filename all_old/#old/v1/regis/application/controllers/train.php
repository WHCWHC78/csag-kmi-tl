<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Train extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->write_view('content', 'p_train', '', TRUE);
        $this->template->render();
    }

}