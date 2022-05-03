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

        return $this->db->where($condition)->get('employees')->result_array();
    }

    public function get_employees($hod_id){
        $condition = array(
            'hod_id' => $hod_id,
            'role_id' => 1 //role id for employee
        );

        return $this->db->where($condition)->get('employees')->result_array();
    }

    public function delete_employee($emp_id){
        $this->db->where('sevarth_id', $emp_id)->delete('employees');
    }

    public function get_employee_details($employee_id){
        $condition = array(
            'sevarth_id' => $employee_id
        );

        return $this->db->where($condition)->get('employees')->row_array();
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