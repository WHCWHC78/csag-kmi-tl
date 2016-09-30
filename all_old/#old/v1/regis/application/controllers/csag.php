<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Csag extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->write_view('content', 'p_csag', '', TRUE);
        $this->template->render();
    }

}