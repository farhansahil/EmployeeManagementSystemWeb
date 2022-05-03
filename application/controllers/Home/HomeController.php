<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    { 
        parent::__construct(); //important to call parent constructor
        $this->load->model('Auth_model');
    }
    public function employee()
    {
      
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

    public function registrar()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/registrar/registrar_sidebar.php');
        $this->load->view('dashboard/registrar/registrar_dashboard.php');
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
    public function joint_director()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/joint_director/joint_director_sidebar.php');
        $this->load->view('dashboard/joint_director/joint_director_dashboard.php');
        $this->load->view('templates/footer.php');
    }
    public function director()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/director/director_sidebar.php');
        $this->load->view('dashboard/director/director_dashboard.php');
        $this->load->view('templates/footer.php');
    }
    public function faculty()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/faculty/faculty_sidebar.php');
        $this->load->view('dashboard/faculty/faculty_dashboard.php');
        $this->load->view('templates/footer.php');
    }
    public function non_teaching_faculty()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/non_teaching_faculty/non_teaching_faculty_sidebar.php');
        $this->load->view('dashboard/non_teaching_faculty/non_teaching_faculty_dashboard.php');
        $this->load->view('templates/footer.php');
    }
    public function non_teaching_officials()
    {
        // echo "Hello";
        $this->load->view('templates/header.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('dashboard/non_teaching_officials/non_teaching_officials_sidebar.php');
        $this->load->view('dashboard/non_teaching_officials/non_teaching_officails_dashboard.php');
        $this->load->view('templates/footer.php');
    }
    
    


 
}