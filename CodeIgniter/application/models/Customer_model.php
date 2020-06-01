<?php
class Customer_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_customer($id = NULL){
       if($id != NULL){
            $filter = array("AccountNumber" => $id);
       }
        else 
            $filter = array();

        $this->db->select(',,');
        $query = $this->db->get_where("customer_info",$filter);
        $customers = $query->result_array();
        return $customers;
    }
}