<?php
class M_guru extends CI_Model {

    function __construct() {
        
    }

    function simpanGuru(){
        
        
    }
    function cekAkun($username,$password){
        $this->db->select('id_guru,nama');
        $this->db->from('guru');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        return $this->db->get();
        
    }
    
}
