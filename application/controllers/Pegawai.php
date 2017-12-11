<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author yoga_
 */
class Pegawai {
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model('Pegawai');
        $this->load->library(array('form_validation'));
        chek_session();
    }
    
    function index(){
        $data['record']=  $this->model_operator->tampildata();
        $this->template->load('template','pegawai/lihat_data',$data);
    }
    
    function post(){
        if(isset($_POST['submit'])){
            
            
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $jawaban    =  $this->input->post('jawaban',true);
            
            $this->m_pegawai->add($nama, $username, $password, $jawaban);
            redirect('Auth/login');
        }
    }
}
