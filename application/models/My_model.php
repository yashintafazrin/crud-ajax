<?php
 
 class My_model extends CI_Model {
     
    public function get_masyarakat(){
        $data = $this->db->get('masyarakat');
        return $data->result();
    }
 }