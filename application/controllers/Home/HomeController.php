<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    { 
        parent::__construct(); //important to call parent constructor

    }
    public function employee()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('dashboard/employee_dashboard.php');
        $this->load->view('templates/footer.php');
    }

    public function hod()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/hod/hod_sidebar.php');
        $this->load->view('dashboard/hod/hod_dashboard.php');
        $this->load->view('templates/footer.php');
    }
    public function principal()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/principle/principle_sidebar.php');
        $this->load->view('dashboard/principle/principal_dashboard.php');
        $this->load->view('templates/footer.php');
    }

    public function admin()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/admin/admin_sidebar.php');
        $this->load->view('dashboard/admin/admin_dashboard.php');
        $this->load->view('templates/footer.php');
    }
    
    


 
}