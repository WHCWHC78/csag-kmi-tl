<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data extends CI_Controller {

    public function index() {

        $this->load->helper('file');

        $fileList = get_filenames('resources/data/');

        foreach ($fileList as $fl) {
            echo $fl . "<br/>";
            $string = read_file('resources/data/' . $fl);

            $find = strpos($string, "hostname");
            $end = strpos($string, "\n", $find);

            $want = substr($string, $find, $end - $find);

            $want_host = substr($want, 9, strlen($want) - 9);

            $want_host = trim($want_host);

            rename('resources/data/' . $fl, 'resources/data/' . $want_host . '.txt');

            echo $fl . "-" . $want_host . " = Success<br/>";

            //exit("x$find x$end<br/>$want");
            //exit($want_host);
        }
    }

}