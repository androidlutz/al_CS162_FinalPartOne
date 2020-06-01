<?php
class Bed_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_employee($id = NULL){
       if($id != NULL){
            $filter = array("BId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('');
        $query = $this->db->get_where("bed",$filter);
        $bed = $query->result_array();
        return $bed;
    }
}