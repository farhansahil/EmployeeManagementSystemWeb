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

    public function employee_details($employee){
        $employee = $this->Hod_model->get_employee_details($employee);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('dashboard/hod/employee_details.php', ['employee' => $employee]);
    }

    public function show_verifications(){
        $employee_for_verification_from_hod = $this->Hod_model->get_employees_for_verification();
        
       

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view("dashboard/hod/show_verifications.php", array('employee_for_verification_from_hod' => $employee_for_verification_from_hod));

       
    }

    public function delete_employee($employee_id){
        $this->Hod_model->delete($employee_id);
        redirect('Hod/HodController/show_verifications');
    }
     
    public function show_employees(){
        $sevarth_id = $this->session->userdata('user_id');
        $employees = $this->Hod_model->get_employees($sevarth_id);

       
        
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view("dashboard/hod/show_employees.php", array('employees' => $employees));
    }

    public function accept_employee_request($employee_id){
        $this->Hod_model->accept_employee_request($employee_id);
        // set flash data   
        $this->session->set_flashdata('msg', 'Employee Request Accepted');
        redirect("/Hod/HodController/show_verifications");
        
    }
    
    public function decline_employee_request($employee_id){
        $this->Hod_model->decline_employee_request($employee_id);
        $this->session->set_flashdata('msg', 'Employee Request Declined');

        redirect("/Hod/HodController/show_verifications");
        
    }
}