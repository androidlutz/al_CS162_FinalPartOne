<?php
class Emergency_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_contact($id = NULL){
       if($id != NULL){
            $filter = array("EmId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('FirstName,LastName,PhoneNumber');
        $query = $this->db->get_where("emergency_contact",$filter);
        $emergency_contact = $query->result_array();
        return $emergency_contact;
    }
}