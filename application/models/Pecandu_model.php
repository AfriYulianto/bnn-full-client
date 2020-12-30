<?php

use GuzzleHttp\Client;

class Pecandu_model extends CI_model
{

    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/bnn-rest-server/api/',

        ]);
    }

    public function getAllPecandu()
    {
        $response = $this->_client->request('GET', 'pecandu', [
            'query' => [
                'afri-key' => 'rahasia'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getPecanduById($id_pecandu)
    {
        $response = $this->_client->request('GET', 'pecandu', [
            'query' => [
                'afri-key' => 'rahasia',
                'id_pecandu' => $id_pecandu
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataPecandu()
    {
        $data = [

            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'usia' => $this->input->post('usia', true),
            'id_pekerjaan' => $this->input->post('id_pekerjaan', true),
            'alamat' => $this->input->post('alamat', true),
            'id_kelurahan' => $this->input->post('id_kelurahan', true),
            'id_kecamatan' => $this->input->post('id_kecamatan', true),
            'jenis_narkoba' => $this->input->post('jenis_narkoba', true),
            'id_tahapan' => $this->input->post('id_tahapan', true),
            'lembaga_rehab' => $this->input->post('lembaga_rehab', true),
            'tahun' => $this->input->post('tahun', true),

            'afri-key' => 'rahasia'
        ];
        $response = $this->_client->request('POST', 'pecandu', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }

    public function hapusDataPecandu($id_pecandu)
    {
        $response = $this->_client->request('DELETE', 'pecandu', [
            'form_params' => [
                'id_pecandu' => $id_pecandu,
                'afri-key' => 'rahasia'

            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }

    public function ubahDataPecandu()
    {
        $data = [
            'id_pecandu' => $this->input->post('id_pecandu', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'usia' => $this->input->post('usia', true),
            'id_pekerjaan' => $this->input->post('id_pekerjaan', true),
            'alamat' => $this->input->post('alamat', true),
            'id_kelurahan' => $this->input->post('alamat', true),
            'id_kecamatan' => $this->input->post('id_kecamatan', true),
            'jenis_narkoba' => $this->input->post('jenis_narkoba', true),
            'id_tahapan' => $this->input->post('id_tahapan', true),
            'lembaga_rehab' => $this->input->post('lembaga_rehab', true),
            'tahun' => $this->input->post('tahun', true),

            'afri-key' => 'rahasia'
        ];

        $response = $this->_client->request('PUT', 'pecandu', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }
}
