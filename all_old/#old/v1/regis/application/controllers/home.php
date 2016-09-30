<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->write_view('content', 'p_home', '', TRUE);
        $this->template->render();
    }
	
	public function recommend(){
		$this->template->write_view('content', 'p_recommend', '', TRUE);
        $this->template->render();
	}
	
	public function location(){
		$this->template->write_view('content', 'p_map2', '', TRUE);
        $this->template->render();
	}
	
	public function assignment(){
		$this->template->write_view('content', 'p_assignment', '', TRUE);
        $this->template->render();
	}

}