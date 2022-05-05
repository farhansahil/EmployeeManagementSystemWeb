<?php
class Director_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Director can only verify employees and hod and Principle under his department
    public function get_employees_for_verification(){
        $role_id = array('1', '2', '3');
        $condition = array(
            'is_verified' => 0,
            'principle_id' => $this->session->userdata('user_id'),
        );

        $this->db->where($condition);
        $this->db->where_in('role_id', $role_id);
        return $this->db->get('employees')->result_array();
    }

    public function get_employees($hod_id){
        $condition = array(
            'hod_id' => $hod_id,
            'role_id' => 1 //role id for employee
        );

        return $this->db->where($condition)->get('employees')->result_array();
    }


    public function accept_employee_request($employee_id){
        $condition = array('is_verified' => "1");
        $this->db->where("sevarth_id", $employee_id)->update('employees', $condition);
    }
    
    public function decline_employee_request($employee_id){
        $condition = array('is_verified' => "-1");
        $this->db->where("sevarth_id", $employee_id)->update('employees', $condition);
    }
    
}