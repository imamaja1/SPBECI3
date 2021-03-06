<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Aktifitas extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_skid_tank');
        $this->load->model('M_SPBE');
        $this->load->model('M_permintaan');
    }
    public function Skid_tank_get()
    {
        // if($this->get('id') == null){
        $tgl = 2;
        $data = $this->M_skid_tank->aktifitas_skid_tank();
        $a = 1;
        $respone['data'] = array();
        foreach ($data as $key => $value) {
            array_push($respone['data'], $this->M_skid_tank->jarak_skid_tank($value->kode_skid_tank, $tgl));
        }
        $respone['ststus'] = true;
        $this->response($respone, REST_Controller::HTTP_OK);
    }

    public function spbe_get()
    {
        // if($this->get('id') == null){
        $tgl = 2;
        $data = $this->M_spbe->aktifitas_spbe();
        $a = 1;
        $respone['data'] = array();
        foreach ($data as $key => $value) {
            array_push($respone['data'], $this->M_spbe->permintaan_spbe($value->kode_spbe, $value->nama_spbe, $value->pemilik_spbe));
        }
        $respone['ststus'] = true;
        $this->response($respone, REST_Controller::HTTP_OK);
    }

    public function Percepatan_post()
    {
        $permintaan = array(
            'kode_permintaan' => $this->post('kode_permintaan'),
            'status_permintaan' => '2',
        );
        $respone = $this->M_permintaan->percepatan($permintaan);
        $skid = $this->M_skid_tank->one_skid($this->post('kode_skid_tank'));
        $skid_tank = array(
            'kode_skid_tank' => $this->post('kode_skid_tank'),
            'odometer' => $skid->odometer + $this->post('jarak'),
            'status' => '1',
        );
        $this->M_skid_tank->update_skid($skid_tank);
        $respone['ststus'] = true;
        $this->response($respone, REST_Controller::HTTP_OK);
    }
}
