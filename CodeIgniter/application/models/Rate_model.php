<?php
class Rate_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_rate($id = NULL){
       if($id != NULL){
            $filter = array("RId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('   ');
        $query = $this->db->get_where("rate",$filter);
        $rate = $query->result_array();
        return $rate;
    }
}