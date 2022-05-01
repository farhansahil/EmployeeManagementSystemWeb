<?php
class Principle_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_principle_for_verification(){
        $condition = array(
            'is_verified' => 0,
            'principle_id' => $this->session->userdata('user_id'),
            'role_id' => 3 //role id for employee
        );

        return $this->db->where($condition)->get('employees')->result_array();
    }

    public function accept_principle_request($principle_id){
        $condition = array('is_verified' => "1");
        $this->db->where("sevarth_id", $hod_id)->update('employees', $condition);
    }
    
    public function decline_principle_request($principle_id){
        $condition = array('is_verified' => "-1");
        $this->db->where("sevarth_id", $hod_id)->update('employees', $condition);
    }
    
}