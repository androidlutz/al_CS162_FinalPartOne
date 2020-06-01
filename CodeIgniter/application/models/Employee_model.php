<?php
class Employee_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_employee($id = NULL){
       if($id != NULL){
            $filter = array("EmId" => $id);
       }
        else 
            $filter = array();

        $this->db->select('FirstName,LastName,Title');
        $query = $this->db->get_where("employee_info",$filter);
        $employees = $query->result_array();
        return $employees;
    }
}