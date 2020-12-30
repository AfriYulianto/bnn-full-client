<?php

class Pecandu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pecandu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pecandu';
        $data['pecandu'] = $this->Pecandu_model->getAllPecandu();

        $this->load->view('templates/header', $data);
        $this->load->view('pecandu/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data sPecandu';

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('id_pekerjaan', 'Id_Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_kelurahan', 'Id_Kelurahan', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'Id_Kecamatan', 'required');
        $this->form_validation->set_rules('jenis_narkoba', 'Jenis_Narkoba', 'required');
        $this->form_validation->set_rules('id_tahapan', 'Id_Tahapan', 'required');
        $this->form_validation->set_rules('lembaga_rehab', 'Lembaga_Rehab', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pecandu/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pecandu_model->tambahDataPecandu();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pecandu');
        }
    }

    public function hapus($id_pecandu)
    {
        $this->Pecandu_model->hapusDataPecandu($id_pecandu);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pecandu');
    }

    public function detail($id_pecandu)
    {
        $data['judul'] = 'Detail Data Pecandu';
        $data['pecandu'] = $this->Pecandu_model->getPecanduById($id_pecandu);
        $this->load->view('templates/header', $data);
        $this->load->view('pecandu/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pecandu)
    {
        $data['judul'] = 'Form Ubah Data Pecandu';
        $data['pecandu'] = $this->Pecandu_model->getPecanduById($id_pecandu);

        $this->form_validation->set_rules('id_pecandu', 'Id_Pecandu', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('id_pekerjaan', 'Id_Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_kelurahan', 'Id_Kelurahan', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'Id_Kecamatan', 'required');
        $this->form_validation->set_rules('jenis_narkoba', 'Jenis_Narkoba', 'required');
        $this->form_validation->set_rules('id_tahapan', 'Id_Tahapan', 'required');
        $this->form_validation->set_rules('lembaga_rehab', 'Lembaga_Rehab', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pecandu/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pecandu_model->ubahDataPecandu();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pecandu');
        }
    }
}
