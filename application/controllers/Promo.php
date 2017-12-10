<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Promo extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('m_Promo');
        chek_session();
    }
    
    function index(){
        //$data['record'] = $this->m_barang->tampil_data();
        
        $this->template->load('template','input_promo','');
    }
    function inputPromo(){
        if(isset($_POST['submit'])){
            // proses barang
            $namaPromo  =   $this->input->post('nama_promo');
            $tglPromo   =   $this->input->post('date_promo');
            $bsrDiskon  =   $this->input->post('diskon_promo');
            $data       = array('nama_promo'=>$namaPromo,
                                'date_promo'=>$tglPromo,
                                'besar_diskon'=>($bsrDiskon)*0.01);
            $this->m_Promo->post($data);
            redirect('barang');
        }
    }
}

