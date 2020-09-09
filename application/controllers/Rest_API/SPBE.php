<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class SPBE extends REST_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_SPBE');
  }

  public function index_get()
  {
    $id = $this->get('id');
    if ($id === NULL) {
      $data = $this->M_SPBE->all_SPBE();
      if ($data) {
        $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response kode
      } else {
        $this->response([
          'status' => FALSE,
          'message' => 'No users were found'
        ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response kode
      }
    } else {
      $data = $this->M_SPBE->one_SPBE($id);
      if ($data) {
        $this->response($data, REST_Controller::HTTP_OK); // OK (200) being the HTTP response kode
      } else {
        $this->response([
          'status' => FALSE,
          'message' => 'No users were found'
        ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response kode
      }
    }
  }

  public function index_post()
  {
    $data = array(
      'nama_spbe' => $this->post('nama_spbe'),
      'alamat_spbe' => $this->post('alamat_spbe'),
      'telepon_spbe' => $this->post('telepon_spbe'),
      'kapasitas_tt' => $this->post('kapasitas_tt'),
      'dot' => $this->post('dot'),
      'limit' => $this->post('limit'),
      'jarak' => $this->post('jarak'),
      'username' => $this->post('username'),
      'password' => md5($this->post('password')),
    );
    $respone = $this->M_SPBE->add_SPBE($data);
    $this->response($respone, REST_Controller::HTTP_CREATED);
  }

  public function edit_post()
  {
    $data = array(
      'kode_spbe' => $this->post('kode_spbe'),
      'nama_spbe' => $this->post('nama_spbe'),
      'alamat_spbe' => $this->post('alamat_spbe'),
      'telepon_spbe' => $this->post('telepon_spbe'),
      'kapasitas_tt' => $this->post('kapasitas_tt'),
      'dot' => $this->post('dot'),
      'limit' => $this->post('limit'),
      'jarak' => $this->post('jarak'),
    );
    if ($this->post('password') &&  $this->post('username')) {
      if ($this->post('password') == 'false') {
        $data['username'] = $this->post('username');
      } else {
        $data['username'] = $this->post('username');
        $data['password'] = md5($this->post('password'));
      }
    }
    $respone = $this->M_SPBE->update_SPBE($data);
    $this->response($data, REST_Controller::HTTP_CREATED);
  }

  public function delete_post()
  {
    $id = $this->post('kode_SPBE');
    $respone = $this->M_SPBE->delete_SPBE($id);
    if ($respone) {
      $this->response($respone, REST_Controller::HTTP_OK);
    } else {
      $this->response($respone, REST_Controller::HTTP_BAD_REQUEST);
    }
  }
}
