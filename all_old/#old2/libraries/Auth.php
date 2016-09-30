<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CI_Auth {

    function CI_Auth() {
        $this->CI = & get_instance();
        log_message('debug', "AuthLib Class Initialized");
        //$this->CI->load->library('database');
        $this->CI->load->library('encrypt');
        $this->CI->load->library('session');
    }

    function is_admin() {
        if ($this->CI->encrypt->decode($this->CI->session->userdata('is_admin'), "CSAG-7Vs1h") == $this->CI->input->ip_address()) {
            return 1;
        } else {
            return 0;
        }
    }

    function set_admin() {
        $this->CI->session->set_userdata('is_admin', $this->CI->encrypt->encode($this->CI->input->ip_address(), "CSAG-7Vs1h"));
    }

    function remove_admin() {
        $this->CI->session->unset_userdata('is_admin');
    }

    function is_member() {
        $mid = $this->CI->session->userdata('mid');
        if ($this->CI->encrypt->decode($this->CI->session->userdata('is_member'), "CSAG-Mb704") == sha1("key$mid")) {
            return 1;
        } else {
            return 0;
        }
    }

    function set_member($mid) {
        $this->CI->session->set_userdata('mid', $mid);
        $this->CI->session->set_userdata('is_member', $this->CI->encrypt->encode(sha1("key$mid"), "CSAG-Mb704"));
    }

    function get_member_id() {
        return $this->CI->session->userdata('mid');
    }

    function remove_member() { // same as logout
        $this->CI->session->unset_userdata('is_member');
    }

    function get_member_info($mid = null) {
        if ($mid == null)
            $mid = $this->get_member_id();
        $query = $this->CI->db->get_where('members', array('mid' => $mid));
        if ($query->num_rows() != 1)
            return false;
        return $query->row();
    }

}

?>