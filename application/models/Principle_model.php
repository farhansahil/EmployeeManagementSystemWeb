<?php
class Principle_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_hods_for_verification(){
        $condition = array(
            'is_verified' => 0,
            'principle_id' => $this->session->userdata('user_id'),
            'role_id' => 2 //role id for employee
        );

        return $this->db->where($condition)->get('employees')->result_array();
    }

    public function accept_hod_request($hod_id){
        $condition = array('is_verified' => "1");
        $this->db->where("sevarth_id", $hod_id)->update('employees', $condition);
    }
    
    public function decline_hod_request($hod_id){
        $condition = array('is_verified' => "-1");
        $this->db->where("sevarth_id", $hod_id)->update('employees', $condition);
    }
    
}