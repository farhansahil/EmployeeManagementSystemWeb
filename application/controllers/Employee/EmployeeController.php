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

        
       
                
    }


}