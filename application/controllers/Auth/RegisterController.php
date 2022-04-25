<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //important to call parent constructor
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $this->load->view('templates/header.php');
        $this->load->view('auth/login.php');
        // $this->load->view('templates/navbar.php');
        // $this->load->view('templates/sidebar.php');
    }

    public function register()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('dob', 'D.O.B', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header.php');
            $this->load->view('auth/register.php');
        }else{

            $formArray = array();
            $formArray['first_name'] = $this->input->post('first_name');
            $formArray['middle_name'] = $this->input->post('middle_name');
            $formArray['last_name'] = $this->input->post('last_name');
            $formArray['dob'] = $this->input->post('dob');
            $formArray['qualification'] = $this->input->post('qualification');
            $formArray['cast'] = $this->input->post('cast');
            $formArray['subcast'] = $this->input->post('subcast');
            $formArray['designation'] = $this->input->post('designation');
            $formArray['retirement_date'] = $this->input->post('retirement_date');
            $formArray['experience'] = $this->input->post('experience');
            $formArray['aadhar_no'] = $this->input->post('aadhar_no');
            $formArray['pan_no'] = $this->input->post('pan_no');
            $formArray['blood_grp'] = $this->input->post('blood_grp');
            $formArray['identification_mark'] = $this->input->post('identification_mark');
            $file_name = $_FILES['photo']['name'];
            $formArray['user_image'] = $file_name; 
            $formArray['contact_no'] = $this->input->post('contact_no');
            $formArray['alternative_contact_no'] = $this->input->post('alternative_contact_no');
            $formArray['address'] = $this->input->post('address');
            $formArray['city'] = $this->input->post('city');
            $formArray['pin_code'] = $this->input->post('pin_code');
            $formArray['state'] = $this->input->post('state');
            $formArray['country'] = $this->input->post('country');
            $formArray['gender'] = $this->input->post('gender');


            $this->Auth_model->create($formArray);

            $this->session->set_flashdata('msg', 'You registered successfully');
            redirect(uri: base_url().'index.php/Auth/RegisterController/register');

        }
       

    }
    

    public function login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('Auth_model');

        $this->Auth_model->can_login($email,$password);

        // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[5]');
        // $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|alpha_numeric');

        // if ($this->form_validation->run() == FALSE) {
        //     $this->index();
        // } else {
        //     $encrypted_password = $this->encrypt->encode($this->input->post('password'));
        //     echo $encrypted_password;
        //     $result = $this->Auth_model->can_login($this->input->post('email'), $this->input->post('password'));
        //     if ($result == '') {
        //         redirect('home');
        //     } else {
        //         $this->session->set_flashdata('message', $result);
        //         redirect('login');
        //     }
        // }
    }
}
