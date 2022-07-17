<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_peminjaman extends CI_Model {
 
    public function ambilData(){
        return $this->db->get('sewa')->result_array(); 
    }
 
    public function tambahData($data){
        $this->db->insert('sewa',$data);
    }
 
    public function ambilDataByNoinduk($id_peminjaman){
        $this->db->where('id_peminjaman',$id_peminjaman);
        return $this->db->get('sewa')->result_array(); 
    }
 
    public function updateData($data,$id_peminjaman){
        $this->db->where('id_peminjaman',$id_peminjaman);
        $this->db->update('sewa',$data); 
    }
 
    public function deleteData($id_peminjaman){
        $this->db->where('$id_peminjaman',$id_peminjaman); 
        $this->db->delete('sewa');  //Menghapus baris pada tabel ruangan
    }
}