<?php
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($formArray){

        $this->db->insert('employees_details', $formArray);
        //if a user created account successfully
        if($this->db->insert_id() > 0){
            return true;
        }return false;
    }

    function can_login($email, $password)
    {

        $query = $this->db->query("select * from employees where email= '$email'
        and password= '$password'");
        if ($query->num_rows() > 0)
{
   $row = $query->row();   
   $role_id= $row->role_id;
         if($role_id == 1){
                redirect('home/HomeController/employee');
            }
            if($role_id == 2){
                redirect('home/HomeController/hod');

            }
            if($role_id == 3){
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
}