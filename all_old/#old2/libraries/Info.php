<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CI_Info {

    function CI_Info() {
        $this->CI = & get_instance();
        log_message('debug', "InfoLib Class Initialized");
        $this->CI->load->helper('language');
    }

    function show($type, $message, $redirect_page, $time = -1, $template = true) {
        switch ($type) {
            case "error":
                $type = " alert-error";
                break;
            case "success":
                $type = " alert-success";
                break;
            case "info":
                $type = " alert-info";
                break;
            default:
                $type = "";
                break;
        }
        if ($redirect_page == "#REF")
            $redirect_page = $_SERVER['HTTP_REFERER'];
        else
            $redirect_page = site_url($redirect_page);

        $data["type"] = $type;
        $data["message"] = $message;
        $data["redirect_page"] = $redirect_page;
        $data["time"] = $time;

        if ($template) {
            $this->CI->template->write_view('content', 'content/info', $data);
            $this->CI->template->render();
        } else {
            $this->CI->load->view('content/info', $data);
        }
    }

}

?>