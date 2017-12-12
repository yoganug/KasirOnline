<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Laporan extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->Model(array('m_Transaksi', 'm_barang', 'm_Promo'));
    }
    
    function index(){ 
            //$data['barang'] = $this->m_barang->tampil_data();
            $data['detail'] = $this->m_Transaksi->tampilkan_detail_transaksi();
            $data['promo']=  $this->m_Promo->tampilkan_data()->result();
            $this->template->load('template','v_laporandefault',$data);
//            $data['detail'] = $this->m_transaksi->
        
    }
}
