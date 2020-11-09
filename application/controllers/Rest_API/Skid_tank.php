<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Skid_tank extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_skid_tank');
        $this->load->model('M_permintaan');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === NULL) {
            $data = $this->M_skid_tank->all_skid_tank();
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        } else {
            $data = $this->M_skid_tank->one_truk($id);
            if ($data) {
                $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }
    }

    public function index_post()
    {
        // $respone = 'ada';
        $this->form_validation->set_rules('nopol', 'nopol', 'is_unique[t_skid_tank.nopol]');
        if ($this->form_validation->run() === FALSE) {
            $response['status'] = 'false';
            $this->response($response, REST_Controller::HTTP_CREATED);
        } else {
            $data1 = array(
                'nopol' => $this->post('nopol'),
                'kapasitas' => $this->post('kapasitas'),
                'odometer' => $this->post('odometer'),
                'status' => $this->post('status'),
            );
            $data2 = array(
                'nopol' => $this->post('nopol'),
                'nama_supir' => $this->post('nama_supir1'),
                'tgl_lahir' => $this->post('tgl_lahir1'),
                'no_hp' => $this->post('no_hp1'),
                'no_sim' => $this->post('no_sim1'),
                'tahun_berlaku' => $this->post('tahun_berlaku1'),
            );
            $data3 = array(
                'nopol' => $this->post('nopol'),
                'nama_supir' => $this->post('nama_supir2'),
                'tgl_lahir' => $this->post('tgl_lahir2'),
                'no_hp' => $this->post('no_hp2'),
                'no_sim' => $this->post('no_sim2'),
                'tahun_berlaku' => $this->post('tahun_berlaku2'),
            );
            $respone = $this->M_skid_tank->add_skid_tank($data1, $data2, $data3);
            $this->response($respone, REST_Controller::HTTP_CREATED);
        }
    }

    public function edit_post()
    {
        $data1 = array(
            'kode_skid_tank' => $this->post('kode_skid_tank'),
            'nopol' => $this->post('nopol'),
            'kapasitas' => $this->post('kapasitas'),
            'odometer' => $this->post('odometer'),
            'status' => $this->post('status'),
        );
        $data2 = array(
            'kode_supir' => $this->post('kode_supir1'),
            'nopol' => $this->post('nopol'),
            'nama_supir' => $this->post('nama_supir1'),
            'tgl_lahir' => $this->post('tgl_lahir1'),
            'no_hp' => $this->post('no_hp1'),
            'no_sim' => $this->post('no_sim1'),
            'tahun_berlaku' => $this->post('tahun_berlaku1'),
        );
        $data3 = array(
            'kode_supir' => $this->post('kode_supir2'),
            'nama_supir' => $this->post('nama_supir2'),
            'tgl_lahir' => $this->post('tgl_lahir2'),
            'no_hp' => $this->post('no_hp2'),
            'no_sim' => $this->post('no_sim2'),
            'tahun_berlaku' => $this->post('tahun_berlaku2'),
        );
        $respone = $this->M_skid_tank->update_skid_tank($data1, $data2, $data3);
        $this->response($respone, REST_Controller::HTTP_CREATED);
    }

    public function delete_post()
    {
        $id = $this->post('kode_skid_tank');
        $respone = $this->M_skid_tank->delete_skid_tank($id);
        if ($respone) {
            $this->response($respone, REST_Controller::HTTP_OK);
        } else {
            $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
        }
        $this->response($respone, REST_Controller::HTTP_OK);
    }

    public function Histori_get($id)
    {
        $data = $this->M_permintaan->permintaan_truk($id);
        if ($data) {
            $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }
}
