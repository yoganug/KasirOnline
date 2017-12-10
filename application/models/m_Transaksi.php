<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_loppo[Transaksi
 *
 * @author yoga_
 */
class m_Transaksi extends CI_model {
    //put your code here
    
     function simpan_barang(){
        $nama_barang    =  $this->input->post('barang');
        $qty            =  $this->input->post('qty');
        $promo          =  $this->input->post('promo');
        $idbarang       = $this->db->get_where('barang',array('nama_barang'=>$nama_barang))->row_array();
        $data           = array('barang_id'=>$idbarang['barang_id'],
                                'qty'=>$qty,
                                'harga'=>$idbarang['harga'],
                                'promo'=>$promo,
                                'status'=>'0');
        $this->db->insert('transaksi_detail',$data);
    }
    
    function tampilkan_detail_transaksi(){
        $sql  ="SELECT td.t_detail_id, b.nama_barang,p.promo_id, p.besar_diskon, td.qty, b.harga
                FROM transaksi_detail td join barang b join promo p on p.promo_id=td.promo and td.barang_id=b.barang_id
                WHERE b.barang_id=td.barang_id and td.status='0'";
//        $sql = "SELECT td.t_detail_id, b.nama_barang,p.promo_id, td.qty, b.harga FROM transaksi_detail td join barang b join promo p on p.promo_id=td.promo and td.barang_id=b.barang_id WHERE b.barang_id=td.barang_id and td.status='0' "
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function hapusitem($id){
        $this->db->where('t_detail_id',$id);
        $this->db->delete('transaksi_detail');
    }
}
