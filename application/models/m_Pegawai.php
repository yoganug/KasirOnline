<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author yoga_
 */
class m_Pegawai extends CI_model {
    //put your code here
    function login($username,$password)
    {
        $chek =  $this->db->get_where('pegawai',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    function tampildata()
    {
        return $this->db->get('pegawai');
    }
    
    function add($nama, $username, $password, $jawaban){
        $data = array(
                'nama' => $nama,
                'username' => $username,
                'password' => md5($password),
                'jawaban'  => $jawaban
                );

        $this->db->insert('pegawai',$data);
    }
}
