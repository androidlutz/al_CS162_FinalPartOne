<?php
class Status_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_status($id = NULL){
       if($id != NULL){
            $filter = array("SId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('   ');
        $query = $this->db->get_where("status",$filter);
        $status = $query->result_array();
        return $status;
    }
}