<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_penyewa extends CI_Model
{

    public function ambilData()
    {
        return $this->db->get('peminjam')->result_array();
    }

    public function tambahData($data)
    {
        $this->db->insert('peminjam', $data);
    }

    public function ambilDataByNoinduk($id_peminjam)
    {
        $this->db->where('id_peminjam', $id_peminjam);
        return $this->db->get('peminjam')->result_array();
    }

    public function updateData($data, $id_peminjam)
    {
        $this->db->where('id_peminjam', $id_peminjam);
        $this->db->update('peminjam', $data);
    }

    public function deleteData($id_peminjam)
    {
        $this->db->where('id_peminjam', $id_peminjam);
        $this->db->delete('peminjam');  //Menghapus baris pada tabel ruangan
    }
}