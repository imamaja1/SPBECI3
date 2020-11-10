<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Csv;

class Terminal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_permintaan');
        if (isset($_SESSION['status'])) {
            if ($_SESSION['level'] == "2") {
                redirect('spbe');
            }
        } else {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['side'] = 'Dashboard';
        $this->load->view('Terminal/dashboard', $data);
    }
    public function profil()
    {
        $data['side'] = 'profil';
        $this->load->view('Terminal/profil', $data);
    }
    #activitas
    public function permintaan()
    {
        $data['side'] = 'permintaan';
        $this->load->view('Terminal/permintaan', $data);
    }


    #data
    public function spbe()
    {
        $data['side'] = 'spbe';
        $this->load->view('Terminal/spbe', $data);
    }
    public function patra_niaga()
    {
        $data['side'] = 'patra_niaga';
        $this->load->view('Terminal/patra_niaga', $data);
    }

    public function download($data1, $data2, $data3)
    {
        $obj = $this->M_permintaan->download_permintaan($data1, $data2, $data3);

        $file = new Spreadsheet();
        $active_sheet = $file->getActiveSheet();
        $active_sheet->setCellValue('A1', 'NO SPA');
        $active_sheet->setCellValue('B1', 'Tanggal SPA');
        $active_sheet->setCellValue('C1', 'Tanggal Permintaan');
        $active_sheet->setCellValue('D1', 'Nama SPBE');
        $active_sheet->setCellValue('E1', 'Alamat SPBE');
        $active_sheet->setCellValue('F1', 'NOPOL');
        $active_sheet->setCellValue('G1', 'TGL skid Tank Berangakt');
        $active_sheet->setCellValue('H1', 'TGL skid Tank Sampai');

        // var_dump(json_decode($obj['data']));
        $count = 2;
        foreach ($obj['data'] as $key => $value) {
            $active_sheet->setCellValue('A' . $count, $value->no_spa);
            $active_sheet->setCellValue('B' . $count, $value->tgl_spa);
            $active_sheet->setCellValue('C' . $count, $value->tgl);
            $active_sheet->setCellValue('D' . $count, $value->nama_spbe);
            $active_sheet->setCellValue('E' . $count, $value->alamat_spbe);
            $active_sheet->setCellValue('F' . $count, $value->nopol);
            $active_sheet->setCellValue('G' . $count, $value->tgl_berangkat_tujuan);
            $active_sheet->setCellValue('H' . $count, $value->tgl_sampai_tujuan);
            $count = $count + 1;
        }

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($file, 'Csv');
        $file_name =  'Permintaan.' . strtolower('csv');
        $writer->save($file_name);
        header('Content-Type: application/x-www-form-urlencoded');
        header('Content-Transfer-Encoding: Binary');
        header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
        readfile($file_name);
        unlink($file_name);
        exit;
    }
    // logout
    public function log_out()
    {
        session_destroy();
        redirect();
    }
}
