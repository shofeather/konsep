<?php

class Masterstation_model extends CI_Model
{
    public function getAllMasterstation_instr()
    {
        $this->db->select('*');
        $this->db->from("tb_master_station_position");
        $this->db->where('stastion_type', 'INSTR_API');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getMasterstation_instrLatest($tabeldata)
    {
        // $this->db->select('*');
        $this->db->select('id, nama_station, vnotch_wl, vcc, logger_temp');
        $this->db->select("to_char(\"datetime\", 'YYYY-MM-DD HH24:MI:SS') as datetime",false);
        $this->db->from($tabeldata);
        $this->db->limit(1);
        $this->db->order_by('datetime','DESC');
        $query = $this->db->get();
        return $query->row_array();    
    }

    public function getMasterstation_instrdetail($tabeldata)
    {
        // $this->db->select('*');
        $this->db->select('id, nama_station, vnotch_wl, vcc, logger_temp');
        $this->db->select("to_char(\"datetime\", 'YYYY-MM-DD HH24:MI:SS') as datetime",false);
        $this->db->from($tabeldata);
        $this->db->limit(10);
        $this->db->order_by('datetime','DESC');
        $query = $this->db->get();
        return $query->result_array();    
    }

}
