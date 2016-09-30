<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Site URL
 * Used when creating internal anchors, translates a uri into the current language
 */
function site_url($uri, $lang = FALSE) {
    $CI = & get_instance();
    $CI->load->config('language');

    if (!is_array($uri)) {
        $uri = explode('?', $uri);
        $query = isset($uri[1]) ? '?' . $uri[1] : '';
        $uri = explode('/', ltrim($uri[0], '/'));
    }

    if (!$lang)
        $lang = $CI->config->item('language');
    $lang_code = array_search($lang, $CI->config->item('language_codes'));

    switch ($CI->config->item('url_style')) {
        case "SEO":
            $segment_translations = $CI->config->item('segment_translations');
            foreach ($uri as $id => $segment) {
                $uri[$id] = isset($segment_translations[$lang][$segment]) ? $segment_translations[$lang][$segment] : $segment;
            }
            break;
        case "Path":
            array_unshift($uri, $lang_code);
            break;
        case "Query":
            $query .= $query ? '&lang=' . $lang_code : '?lang=' . $lang_code;
            break;
    }

    return $CI->config->site_url($uri) . $query;
}

/**
 * Language Menu
 * Returns a unordered list of links to switch languages
 * @param	$class Class of the list 
 * @return	string $links The list of language links
 */
// Modify by Q
function language_menu($width = 32, $class = "", $show_only_another = false) {
    $CI = & get_instance();
    $CI->load->config('language');
    $CI->load->helper('html');

    $languages = $CI->config->item('languages');
    $page = $CI->uri->uri_string() ? $CI->uri->uri_string() : $CI->router->default_controller;

    $lang_select = "";

    foreach ($languages as $lang => $name) {
        if ($show_only_another == false || getLang() != array_search($lang, $CI->config->item('language_codes')))
            $lang_select .= '<a href="' . (site_url($page, $lang)) . '" class="' . $class . '">' . '<img src="' . base_url("resources/img/flags/" . array_search($lang, $CI->config->item('language_codes')) . ".png") . '" width="' . $width . '" /></a>';
    }

    return $lang_select;
}

// Add by Q
function getLang() {
    $CI = & get_instance();
    $CI->load->config('language');

    $lang = $CI->uri->segment(0);

    if (!$lang)
        $lang = $CI->config->item('language');
    $lang_code = array_search($lang, $CI->config->item('language_codes'));

    return $lang_code;
}

/* End of file MY_url_helper.php */
/* Location: ./application/helpers/MY_url_helper.php */