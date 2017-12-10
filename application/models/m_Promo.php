<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m_Promo extends CI_Model{
    
    function post($data){
        $this->db->insert('Promo',$data);
//        $id_barang = $this->db->insert_id();
//        $username = $_SESSION["username"];
//        $query = "SELECT pegawai_id FROM pegawai WHERE username='$username'";
//        $query1 = $this->db->query($query);//QUERY EXECUTE
//        foreach ($query1->result() as $row) {
//			$id = $row->pegawai_id;
//		}
//        $data2 = array('id_barang' => $id_barang,
//                        'id_pegawai' => $id);
//        $this->db->insert('pegawai_barang',$data2);  
    }
    function tampilkan_data(){
        return $this->db->get('promo');
    }
}