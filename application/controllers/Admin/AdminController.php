<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->model('Admin_model');

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
        $principle_for_verification_from_admin = $this->Admin_model->get_principle_for_verification();

        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/admin/admin_sidebar.php');
        $this->load->view("dashboard/admin/show_verifications.php", array('principle_for_verification_from_admin' => $principle_for_verification_from_admin));

    }

    public function accept_principle_request($employee_id)
    {
        $this->Principle_model->accept_principle_request($employee_id);

       redirect("/Admin/AdminController/show_verifications");

    }
    public function decline_princile_request($employee_id)
    {
        $this->Principle_model->decline_principle_request($employee_id);

       redirect("/Admin/AdminController/show_verifications");


    }
}