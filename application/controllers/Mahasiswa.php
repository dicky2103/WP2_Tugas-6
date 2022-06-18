<?php
class Mahasiswa extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data['judul1'] = "Form Input Mahasiswa";
        $this->load->view('header',$data);
        $this->load->view('form-input');
        $this->load->view('footer',$data);
    }

    public function cetak()
    {   
        $data = [
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'tanggal' => $this->input->post('tanggal'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama')
        ];
        $data['judul2'] = "Form Output Mahasiswa";
        $this->load->view('header', $data);
        $this->load->view('form-output', $data);
        $this->load->view('footer', $data);
    }
}