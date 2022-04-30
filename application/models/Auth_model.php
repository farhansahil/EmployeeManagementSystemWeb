<?php
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($formArray, $loginArray)
    {

        $this->db->insert('employees_details', $formArray);
        $this->db->insert('employees', $loginArray);
        // if a user created account successfully
        return $this->db->insert_id();
    }

    public function check_email($email)
    {
        $query = $this->db->query("select * from employees where email= '$email'");

        if ($email == "") {
            $this->load->view('auth/changePassword.php');
        } else {

            echo "<script>alert('Email not matched')</script>";
        }

    }

    public function can_login($email, $password, $sevarth_id)
    {
        $query = $this->db->query("select * from employees where email= '$email'
        and password= '$password'");

        $nameQuery = $this->db->query("select * from employees_details where
         sevarth_id= '$sevarth_id'");

        $row = $query->row();
        $namerow = $nameQuery->row();

        $role_id = $row->role_id;
        $name = $namerow->dob;
        $sev = $namerow->sevarth_id;

        if ($role_id == 1) {
            // echo $name;
            redirect('home/HomeController/employee');
        } else if ($role_id == 2) {
            // echo $name;

            redirect('home/HomeController/hod');

        } else if ($role_id == 3) {
            // echo $sev;
            // echo $name;

            redirect('home/HomeController/principal');

        }

    }

    // $this->db->where('email', $email);
    // $query = $this->db->get('employees');
    // if ($query->num_rows() > 0) {
    //     foreach ($query->result() as $row) {
    //         $store_password = $this->encrypt->decode($row->password);
    //         if ($password == $store_password) {
    //             return 'Login Successfull!!';
    //         } else {
    //             return 'Wrong Password';
    //         }
    //     }
    // } else {
    //     return 'Wrong Email Address';
    // }
}