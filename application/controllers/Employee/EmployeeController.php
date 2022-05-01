<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('Hod_model');
    }
    public function index($page= 'employee')
    {
        
        // $this->load->view('templates/header.php');
        // $this->load->view('templates/navbar.php');
        // $this->load->view('templates/sidebar.php');
        // $this->load->view('dashboard/employee_dashboard.php');
        // $this->load->view('templates/footer.php');
    }

    public function show_verifications(){

        
        $employee_for_verification_from_hod = $this->Hod_model->get_employees_for_verification();
        echo json_encode($employee_for_verification_from_hod);

        redirect("auth/wait_until_verify");
        echo "correct function called";
                
    }


}