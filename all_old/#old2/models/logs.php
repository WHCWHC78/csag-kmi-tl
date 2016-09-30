<?php

class Logs extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function save($whom, $action, $result, $remask = null) {
        $data = array(
            'when' => date("y-m-d H:i:s", strtotime("now")),
            'ip' => $this->input->ip_address(),
            'whom' => $whom,
            'action' => $action,
            'result' => $result,
            'remask' => $remask,
            'agent' => $this->input->user_agent()
        );

        $this->db->insert('logs', $data);
    }

}