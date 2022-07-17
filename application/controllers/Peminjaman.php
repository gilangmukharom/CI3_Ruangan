<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Peminjaman extends CI_Controller {
 
    function __construct(){ // Construct merupakan fungsi yang dijalankan pertama kali ketika controller dijalankan
        parent::__construct();
        $this->load->model('m_peminjaman'); 
    }
 
    public function index()
    {
        $dataRuangan = $this->m_peminjaman->ambilData(); 
 
        $data['peminjaman'] = $dataRuangan; // Mengoper variabel dataRuangan ke View V_ruangan
 
        $this->load->view('V_peminjaman', $data);
    }
    
    public function tambahData()
    {
        $this->load->view('V_tambahpinjaman');
    }
    public function tambah_aksi()
    {
        
        $id_ruangan        = $this->input->post('id_ruangan');
        $nama_ruangan      = $this->input->post('nama_ruangan'); // Menangkap hasil dari Input nama ruangan
        $kapasitas         = $this->input->post('kapasitas'); 
        $deskripsi         = $this->input->post('deskripsi');
        $status_ruangan    = $this->input->post('status_ruangan'); 
 
        $data = ["id_ruangan"       => $id_ruangan,
                 "nama_ruangan"     => $nama_ruangan,
                 "kapasitas"        => $kapasitas,
                 "deskripsi"        => $deskripsi,
                 "status_ruangan"   => $status_ruangan
                ]; // Menyimpan hasil 
        $this->M_ruangan->tambahData($data);
        redirect();
 
    }
 
    public function editData($id_ruangan){
 
        $data['ruangan_edit'] = $this->M_ruangan->ambilDataByNoinduk($id_ruangan); 
        $this->load->view('V_editRuangan',$data);
    }
 
    public function updateData($id_ruangan){
        $nama_ruangan      = $this->input->post('nama_ruangan'); // Menangkap hasil dari Input nama ruangan
        $kapasitas         = $this->input->post('kapasitas'); 
        $deskripsi         = $this->input->post('deskripsi');
        $status_ruangan    = $this->input->post('status_ruangan'); 
        $data = ["id_ruangan"       => $id_ruangan,
                 "nama_ruangan"     => $nama_ruangan,
                 "kapasitas"        => $kapasitas,
                 "deskripsi"        => $deskripsi,
                 "status_ruangan"   => $status_ruangan
                ];
        // echo "<pre>";
        // print_r($data);
        // exit();      
        $this->M_ruangan->updateData($data,$id_ruangan); 
        redirect();         
    }
 
    public function deleteData($id_ruangan){
        $this->M_ruangan->deleteData($id_ruangan); 
        redirect();
    }
 
}