<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Auth extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('m_Pegawai');
    }
    
    function login(){
       if(isset($_POST['submit'])){
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $hasil = $this->m_Pegawai->login($username, $password);
       //$this->m_barang->tampildata($username);
              if ($hasil==1){
                 $sessiondata = array(
                          'username' => $username,
                          'loginuser' => TRUE
                     );
                 $this->session->set_userdata($sessiondata);
                 redirect("dashboard");
              }
              else{
                 redirect('Auth/login');
              }                     
        }
        else{
           chek_login_session();
           $this->load->view('form_login');
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('Auth/login');
    }
}
   


