<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class m_kategori extends CI_Model{
    
    function tampilkan_data(){
        return $this->db->get('kategori_barang');
    }
    
}
