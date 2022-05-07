<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrincipleController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('Principle_model');

    }
    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('dashboard/principle_dashboard.php');
        $this->load->view('templates/footer.php');
    }

    public function show_verifications()
    {
        $hod_for_verification_from_principle = $this->Principle_model->get_hods_for_verification();

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/principle/principle_sidebar.php');
        $this->load->view("dashboard/principle/show_verifications.php", array('hod_for_verification_from_principle' => $hod_for_verification_from_principle));

    }

    public function accept_hod_request($employee_id)
    {
        $this->Principle_model->accept_hod_request($employee_id);
        $this->session->set_flashdata('msg', 'HOD Request Accepted');

       redirect("/Principle/PrincipleController/show_verifications");

    }
    public function decline_hod_request($employee_id)
    {
        $this->Principle_model->decline_hod_request($employee_id);
        $this->session->set_flashdata('msg', 'HOD Request Declined');

        redirect("Principle/PrincipleController/show_verifications");


    }

    public function delete_employee($employee_id){
        $this->Hod_model->delete($employee_id);
        redirect('Principle/PrincipleController/show_employees');
    }
     
    public function show_employees(){
        $sevarth_id = $this->session->userdata('user_id');
        $employees = $this->Principle_model->get_employees($sevarth_id);

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/principle/principle_sidebar.php');
        $this->load->view("dashboard/principle/show_employees.php", array('employees' => $employees));
    }

    public function show_applied_trainings(){
        $sevarth_id = $this->session->userdata('user_id');
        $status = $this->input->post('status');

       

        if($status == null){
            $status = -1;
        }

        $applied_trainings = $this->Principle_model->get_applied_trainings($sevarth_id, $status);
        $training_status = $this->Principle_model->get_training_status();

        // echo $status . "  " . $sevarth_id;
        // print_r($applied_trainings);


        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/principle/principle_sidebar.php');
        $this->load->view("dashboard/principle/show_applied_trainings.php", array('trainings' => $applied_trainings, 'trainingstatus' => $training_status));

    }

    public function accept_training_application($training_id){
        $training = $this->Principle_model->get_training_by_id($training_id); 

        if($training['training_status_id'] == 1){
            $this->session->set_flashdata('msg', 'Application is not yet approved by HOD');
        }else if($training['training_status_id'] == 2 || $training['training_status_id'] == 3){
            $this->session->set_flashdata('msg', 'Training Accepted Successfully');
            $this->Principle_model->accept_training_application($training_id);
        }else if($training['training_status_id'] == 4){
            $this->session->set_flashdata('msg', 'Training is Already Declined BY HOD');
        }else if($training['training_status_id'] == 5){
            $this->session->set_flashdata('msg', 'Training is Already Approved');
        }else if($training['training_status_id'] == 6){
            $this->session->set_flashdata('msg', 'Training is Already Declined');
        }else{
            $this->session->set_flashdata('msg', 'Training is Already Completed');
        }

        redirect("Principle/PrincipleController/show_applied_trainings");
    }
    public function decline_training_application($training_id){
        $training = $this->Principle_model->get_training_by_id($training_id); 

        if ($training['training_status_id'] == 1) {
            $this->session->set_flashdata('msg', 'Application is not yet approved by HOD');
        } else if ($training['training_status_id'] == 2 || $training['training_status_id'] == 3) {
            $this->session->set_flashdata('msg', 'Training Accepted Successfully');
            $this->Principle_model->decline_training_application($training_id);
        } else if ($training['training_status_id'] == 4) {
            $this->session->set_flashdata('msg', 'Training is Already Declined BY HOD');
        } else if ($training['training_status_id'] == 5) {
            $this->session->set_flashdata('msg', 'Training is Already Approved');
        } else if ($training['training_status_id'] == 6) {
            $this->session->set_flashdata('msg', 'Training is Already Declined');
        } else {
            $this->session->set_flashdata('msg', 'Training is Already Completed');
        }

        redirect("Principle/PrincipleController/show_applied_trainings");
    }
}