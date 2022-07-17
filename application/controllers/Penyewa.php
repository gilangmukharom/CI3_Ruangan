<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewa extends CI_Controller
{

    function __construct()
    { // Construct merupakan fungsi yang dijalankan pertama kali ketika controller dijalankan
        parent::__construct();
        $this->load->model('m_penyewa');
    }

    //halaman penampil data
    public function index()
    {
        $dataRu = $this->m_penyewa->ambilDatapenyewa();

        $data['sewa'] = $dataRu; // Mengoper variabel dataRuangan ke View V_ruangan

        $this->load->view('V_datapenyewa', $data);
    }

    public function tambahDatapenyewa()
    {
        $this->load->view('V_datapenyewa');
    }
    public function tambah_aksi()
    {

        $id_penyewa        = $this->input->post('id_penyewa');
        $nama_penyewa      = $this->input->post('nama_penyewa'); // Menangkap hasil dari Input nama ruangan
        $alamat         = $this->input->post('alamat');
        $telp         = $this->input->post('telp');
        $jk    = $this->input->post('jk');
        $jabatan    = $this->input->post('jabatan');

        $data = [
            "id_penyewa"       => $id_penyewa,
            "nama_penyewa"     => $nama_penyewa,
            "alamat"        => $alamat,
            "telp"        => $telp,
            "jk"   => $jk,
            "jabatan"   => $jabatan
        ]; // Menyimpan hasil 
        $this->m_peminjaman->tambahData($data);
        redirect(base_url('Penyewa'));
    }

    public function editDatapenyewa($id_penyewa)
    {

        $data['peminjaman_edit'] = $this->m_penyewa->ambilDataByNoindukpenyewa($id_penyewa);
        $this->load->view('V_editPeminjaman', $data);
    }

    public function updateDatapenyewa($id_peminjaman)
    {
        $nama_peminjam      = $this->input->post('$nama_peminjam'); // Menangkap hasil dari Input nama ruangan
        $tgl_pengajuan         = $this->input->post('$tgl_pengajuan');
        $nama_ruangan         = $this->input->post('$nama_ruangan');
        $tgl_keperluan    = $this->input->post('$tgl_keperluan');
        $tgl_pengembalian         = $this->input->post('$tgl_pengembalian');
        $data = [
            "id_peminjaman"       => $id_peminjaman,
            "nama_peminjam"     => $nama_peminjam,
            "tgl_pengajuan"        => $tgl_pengajuan,
            "nama_ruangan"        => $nama_ruangan,
            "tgl_keperluan"   => $tgl_keperluan,
            "tgl_pengembalian"   => $tgl_pengembalian
        ];
        // echo "<pre>";
        // print_r($data);
        // exit();      
        $this->m_penyewa->updateDatapenyewa($data, $id_penyewa);
        redirect(base_url('Penyewa'));
    }

    public function deleteDatapenyewa($id_peminjaman)
    {
        $this->m_peminjaman->deleteDatapenyewa($id_peminjaman);
        redirect(base_url('Penyewa'));
    }
}