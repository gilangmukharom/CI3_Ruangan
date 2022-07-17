<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_penyewa extends CI_Model
{

    public function ambilDataByNoindukpenyewa()
    {
        return $this->db->get('peminjam')->result_array();
    }

    public function tambahDatapenyewa($data)
    {
        $this->db->insert('peminjam', $data);
    }

    public function ambilDataByNoindukpenyewa($id_penyewa)
    {
        $this->db->where('id_peminjam', $id_ruangan);
        return $this->db->get('peminjam')->result_array();
    }

    public function updateDatapenyewa($data, $id_ruangan)
    {
        $this->db->where('id_peminjam', $id_ruangan);
        $this->db->update('peminjam', $data);
    }

    public function deleteDatapenyewa($id_ruangan)
    {
        $this->db->where('id_peminjam', $id_ruangan);
        $this->db->delete('peminjam');  //Menghapus baris pada tabel ruangan
    }
}