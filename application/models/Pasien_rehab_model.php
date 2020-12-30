<?php

use GuzzleHttp\Client;

class Pasien_rehab_model extends CI_model
{

    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/bnn-rest-server/api/',

        ]);
    }

    public function getAllPasien_rehab()
    {
        $response = $this->_client->request('GET', 'pasien_rehab', [
            'query' => [
                'afri-key' => 'rahasia'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getPasien_rehabById($id_pasien_rehab)
    {
        $response = $this->_client->request('GET', 'pasien_rehab', [
            'query' => [
                'afri-key' => 'rahasia',
                'id_pasien_rehab' => $id_pasien_rehab
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataPasien_rehab()
    {
        $data = [

            'id_kelurahan' => $this->input->post('id_kelurahan', true),
            'id_kecamatan' => $this->input->post('id_kecamatan', true),
            'id_pekerjaan' => $this->input->post('id_pekerjaan', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'tempat_rehab' => $this->input->post('tempat_rehab', true),
            'lama_rehab' => $this->input->post('lama_rehab', true),
            'surat_selesai' => $this->input->post('surat_selesai', true),
            'tahun' => $this->input->post('tahun', true),

            'afri-key' => 'rahasia'
        ];
        $response = $this->_client->request('POST', 'pasien_rehab', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }

    public function hapusDataPasien_rehab($id_pasien_rehab)
    {
        $response = $this->_client->request('DELETE', 'pasien_rehab', [
            'form_params' => [
                'id_pasien_rehab' => $id_pasien_rehab,
                'afri-key' => 'rahasia'

            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }

    public function ubahDataPasien_rehab()
    {
        $data = [
            'id_pasien_rehab' => $this->input->post('id_pasien_rehab', true),
            'id_kelurahan' => $this->input->post('id_kelurahan', true),
            'id_kecamatan' => $this->input->post('id_kecamatan', true),
            'id_pekerjaan' => $this->input->post('id_pekerjaan', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'tempat_rehab' => $this->input->post('tempat_rehab', true),
            'lama_rehab' => $this->input->post('lama_rehab', true),
            'surat_selesai' => $this->input->post('surat_selesai', true),
            'tahun' => $this->input->post('tahun', true),

            'afri-key' => 'rahasia'
        ];

        $response = $this->_client->request('PUT', 'pasien_rehab', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }
}
