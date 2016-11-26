<?php

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 26/11/2559
 * Time: 13:22
 */
class Home extends CI_Controller
{
    Public function index(){
        $this->load->view('layout/header_view');
        $this->load->view('home_view');

   }
    Public function test(){
        $this->load->view('layout/header_view');
        $this->load->view('test_view');

    }
}