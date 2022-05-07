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
        $employee_response = $this->Hod_model->get_employee_details($employee);

        if($employee_response['result'] == true){
            $this->load->view('templates/header.php');
            $this->load->view('templates/navbar.php');
            $this->load->view('templates/sidebar.php');
            $this->load->view("dashboard/hod/employee_details.php", array('employee' => $employee_response['data']));
        }
        else{
            // set flash data
            $this->session->set_flashdata('msg', $employee_response['error']);
            redirect('/Hod/HodController/show_employees');
        }

        
       
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
        redirect('Hod/HodController/show_employees');
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

    public function show_applied_trainings(){
        $sevarth_id = $this->session->userdata('user_id');
        
        $status = $this->input->post('status');

        if($status == null){
            $status = -1;
        }

        $applied_trainings = $this->Hod_model->get_applied_trainings($sevarth_id, $status);
        $training_status = $this->Hod_model->get_training_status();

        // print_r($applied_trainings);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view("dashboard/hod/show_applied_trainings.php", array('trainings' => $applied_trainings, 'trainingstatus' => $training_status));

    }

    public function accept_training_application($training_id){
        $training = $this->Hod_model->get_training_by_id($training_id); 

        //check all conditions
        if($training['training_status_id'] == 1){
            $this->session->set_flashdata('msg', 'Application Accepted Successfully');
            $this->Hod_model->accept_training_application($training_id);
        }else if($training['training_status_id'] == 2){
            $this->session->set_flashdata('msg', 'Training is Already Applied To Principal');
        }else if($training['training_status_id'] == 3){
            $this->session->set_flashdata('msg', 'Training is Already Approved By HOD');
        }else if($training['training_status_id'] == 4){
            $this->session->set_flashdata('msg', 'Training is Already Declined BY HOD');
        }else if($training['training_status_id'] == 5){
            $this->session->set_flashdata('msg', 'Training is Already Approved By Principal');
        }else if($training['training_status_id'] == 6){
            $this->session->set_flashdata('msg', 'Training is Already Declined By Principal');
        }else{
            $this->session->set_flashdata('msg', 'Training is Already Completed');
        }

        redirect("/Hod/HodController/show_applied_trainings");
    }
    public function decline_training_application($training_id){
        $training = $this->Hod_model->get_training_by_id($training_id); 

        //check all conditions
        if($training['training_status_id'] == 1){
            $this->session->set_flashdata('msg', 'Application Decline Successfully');
            $this->Hod_model->decline_training_application($training_id);
        }else if($training['training_status_id'] == 2){
            $this->session->set_flashdata('msg', 'Training is Already Applied To Principal');
        }else if($training['training_status_id'] == 3){
            $this->session->set_flashdata('msg', 'Training is Already Approved By HOD');
        }else if($training['training_status_id'] == 4){
            $this->session->set_flashdata('msg', 'Training is Already Declined BY HOD');
        }else if($training['training_status_id'] == 5){
            $this->session->set_flashdata('msg', 'Training is Already Approved By Principal');
        }else if($training['training_status_id'] == 6){
            $this->session->set_flashdata('msg', 'Training is Already Declined By Principal');
        }else{
            $this->session->set_flashdata('msg', 'Training is Already Completed');
        }

        redirect("/Hod/HodController/show_applied_trainings");
    }
    
}

	

// 1
// APPLIED TO HOD
	

// 2
// APPLIED TO PRINCIPLE
	

// 3
// APPROVED BY HOD
	

// 4
// DECLINE BY HOD
	

// 5
// APPROVED BY PRINCIPAL
	

// 6
// DECLINED BY PRINCIPLE
	

// 7
// COMPLETED