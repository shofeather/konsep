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
        $this->load->view('masterstation', $data);
        // foreach ($data as $row){
        //     echo $row[0]['TableData'];
        //     echo $row[1]['TableData'];
        // }
        
    }

    public function details($tabeldata){
        $data['Masterstation_detail'] = $this->Masterstation_model->getMasterstation_instrdetail($tabeldata);
        $this->load->view('masterstation_detail', $data);
        // echo '<pre>';
        // var_dump($data);
        // echo '</pre>';
        // echo json_encode($data); 
        
    }
}