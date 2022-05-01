<?php
class Hod_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_employees_for_verification(){
        $condition = array(
            'is_verified' => 0,
            'hod_id' => $this->session->userdata('user_id'),
            'role_id' => 1 //role id for employee
        );

        echo $this->session->userdata('user_id');

        return $this->db->where($condition)->get('employees')->result_array();
    }

    
}