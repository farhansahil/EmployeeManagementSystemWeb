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

       redirect("/Principle/PrincipleController/show_verifications");


    }
}