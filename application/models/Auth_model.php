<?php
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($formArray){
        $this->db->insert('employees_details', $formArray);
    }

    function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('employees');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $store_password = $this->encrypt->decode($row->password);
                if ($password == $store_password) {
                    return 'Login Successfull!!';
                } else {
                    return 'Wrong Password';
                }
            }
        } else {
            return 'Wrong Email Address';
        }
    }
}
