<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HodController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('Hod_model');

    }
    public function index()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('dashboard/hod_dashboard.php');
        $this->load->view('templates/footer.php');
    }

    public function show_verifications(){
        $employee_for_verification_from_hod = $this->Hod_model->get_employees_for_verification();
        
       

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view("dashboard/hod/show_verifications.php", array('employee_for_verification_from_hod' => $employee_for_verification_from_hod));

        echo "correct function called";

    }
}