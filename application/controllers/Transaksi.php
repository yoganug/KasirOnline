<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaksi
 *
 * @author yoga_
 */
class Transaksi extends CI_Controller {
    //put your code here
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('m_barang','m_transaksi','m_Promo'));
        chek_session();
    }
   
    function index(){
        if(isset($_POST['submit'])){
            $this->m_transaksi->simpan_barang();
            redirect('transaksi');
        }
        else{
            $data['barang'] = $this->m_barang->tampil_data();
            $data['detail'] = $this->m_transaksi->tampilkan_detail_transaksi();
            $data['promo']=  $this->m_Promo->tampilkan_data()->result();
            $this->template->load('template','transaksi/form_transaksi',$data);
//            $data['detail'] = $this->m_transaksi->
        }
    }
    
    function hapusitem(){
        $id=  $this->uri->segment(3);
        $this->m_transaksi->hapusitem($id);
        redirect('transaksi');
    }
    
    function selesai_belanja(){
        $tanggal=date('Y-m-d');
        $user=  $this->session->userdata('username');
        $id_op=  $this->db->get_where('pegawai',array('username'=>$user))->row_array();
        $data=array('pegawai_id'=>$id_op['pegawai_id'],'tanggal_transaksi'=>$tanggal);
        //$this->model_transaksi->selesai_belanja($data);
        $this->m_transaksi->simpan_barang($data);
        redirect('transaksi');
    }
    
    function laporan(){
        //$data['barang'] = $this->m_barang->tampil_data();
            $data['detail'] = $this->m_transaksi->tampilkan_laporan();
            //$data['promo']=  $this->m_Promo->tampilkan_data()->result();
            $this->template->load('template','v_laporandefault',$data);
//            $data['detail'] = $this->m_transaksi->
    }
}
