<?php
class Type_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_type($id = NULL){
       if($id != NULL){
            $filter = array("TId" => $id);
       }
        else 
            $filter = array();

        $this->db->select(',,');
        $query = $this->db->get_where("type",$filter);
        $type = $query->result_array();
        return $type;
    }
}