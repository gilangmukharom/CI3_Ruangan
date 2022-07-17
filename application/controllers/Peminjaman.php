<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Peminjaman extends CI_Controller {
 
    function __construct(){ // Construct merupakan fungsi yang dijalankan pertama kali ketika controller dijalankan
        parent::__construct();
        $this->load->model('m_peminjaman'); 
    }
 
    public function index()
    {
        $dataRu= $this->m_peminjaman->ambilData(); 
 
        $data['sewa'] = $dataRu; // Mengoper variabel dataRuangan ke View V_ruangan
 
        $this->load->view('V_peminjaman', $data);
    }
    
    public function tambahData()
    {
        $this->load->view('V_tambahpinjaman');
    }
    public function tambah_aksi()
    {
        
        $id_peminjaman        = $this->input->post('id_peminjaman');
        $nama_peminjam      = $this->input->post('nama_peminjam'); // Menangkap hasil dari Input nama ruangan
        $tgl_pengajuan         = $this->input->post('tgl_pengajuan'); 
        $nama_ruangan         = $this->input->post('nama_ruangan');
        $tgl_keperluan    = $this->input->post('tgl_keperluan'); 
        $tgl_pengembalian    = $this->input->post('tgl_keperluan'); 
 
        $data = ["id_peminjaman"       => $id_peminjaman,
                 "nama_peminjam"     => $nama_peminjam,
                 "tgl_pengajuan"        => $tgl_pengajuan,
                 "nama_ruangan"        => $nama_ruangan,
                 "tgl_keperluan"   => $tgl_keperluan,
                 "tgl_pengembalian"   => $tgl_pengembalian
                ]; // Menyimpan hasil 
        $this->m_peminjaman->tambahData($data);
        redirect();
 
    }
 
    public function editData($id_peminjaman){
 
        $data['peminjaman_edit'] = $this->m_peminjaman->ambilDataByNoinduk($id_peminjaman); 
        $this->load->view('V_editPeminjaman',$data);
    }
 
    public function updateData($id_peminjaman){
        $nama_peminjam      = $this->input->post('$nama_peminjam'); // Menangkap hasil dari Input nama ruangan
        $tgl_pengajuan         = $this->input->post('$tgl_pengajuan'); 
        $nama_ruangan         = $this->input->post('$nama_ruangan');
        $tgl_keperluan    = $this->input->post('$tgl_keperluan');  
        $tgl_pengembalian         = $this->input->post('$tgl_pengembalian');
        $data = ["id_peminjaman"       => $id_peminjaman,
                 "nama_peminjam"     => $nama_peminjam,
                 "tgl_pengajuan"        => $tgl_pengajuan,
                 "nama_ruangan"        => $nama_ruangan,
                 "tgl_keperluan"   => $tgl_keperluan,
                 "tgl_pengembalian"   => $tgl_pengembalian
                ];
        // echo "<pre>";
        // print_r($data);
        // exit();      
        $this->m_peminjaman->updateData($data,$id_peminjaman); 
        redirect();         
    }
 
    public function deleteData($id_peminjaman){
        $this->m_peminjaman->deleteData($id_peminjaman); 
        redirect();
    }
 
}