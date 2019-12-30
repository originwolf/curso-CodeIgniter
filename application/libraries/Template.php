<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed')
    class template {
            function show($view, $data=array()){
                $CI = & get_instance();
                //load header
                $CI->load->view('template/header', $data);
                //load content
                $CI->load->view($view, $data);
                //load footer
                $CI->load->view('template/footer', $data);
                //scripts
                $CI->load->view('template/scripts', $data);
            }
    }