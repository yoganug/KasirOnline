<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author yoga_
 */
class Register extends CI_controller {
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model('m_pegawai');
    }
    
    function index(){
        $this->load->view('Register');
    }
    
    function Signup(){
        $username = $this->post->input('');
    }
}
