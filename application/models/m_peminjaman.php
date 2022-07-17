<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_peminjaman extends CI_Model {
 
    public function ambilData(){
        return $this->db->get('peminjaman')->result_array(); 
    }
 
    public function tambahData($data){
        $this->db->insert('ruangan',$data);
    }
 
    public function ambilDataByNoinduk($id_ruangan){
        $this->db->where('id_ruangan',$id_ruangan);
        return $this->db->get('ruangan')->result_array(); 
    }
 
    public function updateData($data,$id_ruangan){
        $this->db->where('id_ruangan',$id_ruangan);
        $this->db->update('ruangan',$data); 
    }
 
    public function deleteData($id_ruangan){
        $this->db->where('id_ruangan',$id_ruangan); 
        $this->db->delete('ruangan');  //Menghapus baris pada tabel ruangan
    }
}