<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Penyewa extends CI_Controller {
 
    function __construct(){ // Construct merupakan fungsi yang dijalankan pertama kali ketika controller dijalankan
        parent::__construct();
        $this->load->model('m_penyewa'); 
    }
 
    public function index()
    {
        $dataRu= $this->m_penyewa->ambilData(); 
 
        $data['peminjam'] = $dataRu; // Mengoper variabel dataRuangan ke View V_ruangan
 
        $this->load->view('V_datapenyewa', $data);
    }
    
    public function tambahData()
    {
        $this->load->view('V_tambahpenyewa');
    }
    public function tambah_aksi()
    {
        
        $id_peminjam       = $this->input->post('id_peminjam');
        $nama_peminjam      = $this->input->post('nama_peminjam'); // Menangkap hasil dari Input nama ruangan
        $alamat        = $this->input->post('alamat'); 
        $notelp       = $this->input->post('notelp');
        $jk    = $this->input->post('jk'); 
        $jabatan    = $this->input->post('jabatan'); 
 
        $data = ["id_peminjam"       => $id_peminjam,
                 "nama_peminjam"     => $nama_peminjam,
                 "alamat"        => $alamat,
                 "notelp"        => $notelp,
                 "jk"   => $jk,
                 "jabatan"   => $jabatan
                ]; // Menyimpan hasil 
        $this->m_penyewa->tambahData($data);
        redirect(base_url('Penyewa'));
 
    }
 

 
}