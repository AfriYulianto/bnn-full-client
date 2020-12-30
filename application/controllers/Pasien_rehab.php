<?php

class Pasien_rehab extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_rehab_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pasien Rehab';
        $data['pasien_rehab'] = $this->Pasien_rehab_model->getAllPasien_rehab();

        $this->load->view('templates/header', $data);
        $this->load->view('pasien_rehab/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pasien Rehabilitasi';

        $this->form_validation->set_rules('id_kelurahan', 'ID_Kelurahan', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'ID_Kecamatan', 'required');
        $this->form_validation->set_rules('id_pekerjaan', 'ID_Pekerjaan', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required');
        $this->form_validation->set_rules('tempat_rehab', 'Tempat_rehab', 'required');
        $this->form_validation->set_rules('lama_rehab', 'Lama_rehab', 'required');
        $this->form_validation->set_rules('surat_selesai', 'Surat_selesai', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien_rehab/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_rehab_model->tambahDataPasien_rehab();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pasien_rehab');
        }
    }

    public function hapus($id_pasien_rehab)
    {
        $this->Pasien_rehab_model->hapusDataPasien_rehab($id_pasien_rehab);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pasien_rehab');
    }

    public function detail($id_pasien_rehab)
    {
        $data['judul'] = 'Detail Data Pasien Rehabilitasi';
        $data['pasien_rehab'] = $this->Pasien_rehab_model->getPasien_rehabById($id_pasien_rehab);
        $this->load->view('templates/header', $data);
        $this->load->view('pasien_rehab/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pasien_rehab)
    {
        $data['judul'] = 'Form Ubah Data Pasien Rehabilitasi';
        $data['pasien_rehab'] = $this->Pasien_rehab_model->getPasien_rehabById($id_pasien_rehab);

        $this->form_validation->set_rules('id_pasien_rehab', 'ID_pasien_rehab', 'required');
        $this->form_validation->set_rules('id_kelurahan', 'ID_Kelurahan', 'required');
        $this->form_validation->set_rules('id_kecamatan', 'ID_Kecamatan', 'required');
        $this->form_validation->set_rules('id_pekerjaan', 'ID_Pekerjaan', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required');
        $this->form_validation->set_rules('tempat_rehab', 'Tempat_rehab', 'required');
        $this->form_validation->set_rules('lama_rehab', 'Lama_rehab', 'required');
        $this->form_validation->set_rules('surat_selesai', 'Surat_selesai', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pasien_rehab/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pasien_rehab_model->ubahDataPasien_rehab();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pasien_rehab');
        }
    }
}
