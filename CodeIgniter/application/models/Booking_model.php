<?php
class Booking_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_booking($id = NULL){
       if($id != NULL){
            $filter = array("ID" => $id);
       }
        else 
            $filter = array();

        $this->db->select('  ');
        $query = $this->db->get_where("booking",$filter);
        $booking = $query->result_array();
        return $booking;
    }
}