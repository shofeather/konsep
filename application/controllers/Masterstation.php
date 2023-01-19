<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterstation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masterstation_model');
    }

    public function index()
    {
        $data['Masterstation'] = $this->Masterstation_model->getAllMasterstation_instr();
        $count = 0;
        foreach ($data['Masterstation'] as $key) {
            $latest[$count] = $this->Masterstation_model->getMasterstation_instrLatest($key['TableData']);
            $data['vnotch_wl'][$count] = $latest[$count]['vnotch_wl'];
            $data['vcc'][$count] = $latest[$count]['vcc'];
            $data['logger_temp'][$count] = $latest[$count]['logger_temp'];
            $data['datetime'][$count] = $latest[$count]['DATETIME'];
            $count++;
        }
        $this->load->view('masterstation', $data);
    }

    public function details($tbl_detail = '')
    {
        $data['Masterstation_detail'] = $this->Masterstation_model->getMasterstation_instrdetail($tbl_detail);
        $this->load->view('masterstation_detail', $data);
    }

    public function get_detail($tbl_detail)
    {
        $data['Masterstation_detail'] = $this->Masterstation_model->getMasterstation_instrdetail($tbl_detail);
        echo json_encode($data);
    }
}
