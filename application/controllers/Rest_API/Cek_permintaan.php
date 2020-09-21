<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Cek_permintaan extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_permintaan');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index_get()
    {
        $tgl = date('Y-m-d');
        $id = $this->get('id');
        $responese['jumlah'] = $this->M_permintaan->cek($id, $tgl)->num_rows();
        $responese['sisa_stok'] = $this->M_permintaan->cek($id, $tgl)->last_row();
        $this->response($responese, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
}
