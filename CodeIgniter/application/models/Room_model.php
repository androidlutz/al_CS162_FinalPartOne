<?php
class Room_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_room($id = NULL){
       if($id != NULL){
            $filter = array("RoomNumber" => $id);
       }
        else 
            $filter = array();

        $this->db->select('   ');
        $query = $this->db->get_where("room",$filter);
        $room = $query->result_array();
        return $room;
    }
}