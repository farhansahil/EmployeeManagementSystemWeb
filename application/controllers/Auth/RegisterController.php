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


    public function details()
    {

      

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('dob', 'D.O.B', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php');
            $this->load->view('auth/details.php');
        } else {

            $formArray = array();

            $formArray['first_name'] = $this->input->post('first_name');
            $formArray['middle_name'] = $this->input->post('middle_name');
            $formArray['last_name'] = $this->input->post('last_name');
            $formArray['dob'] = $this->input->post('dob');

            $sevarth_id = $this->input->post('sevarth_id');
            $formArray['sevarth_id'] = $sevarth_id;
            $formArray['qualification'] = $this->input->post('qualification');
            $formArray['cast'] = $this->input->post('cast');
            $formArray['subcast'] = $this->input->post('subcast');

            $designation_id= $this->input->post('designation');
            $formArray['designation'] = $designation_id;
            $formArray['retirement_date'] = $this->input->post('retirement_date');
            $formArray['experience'] = $this->input->post('experience');
            $formArray['aadhar_no'] = $this->input->post('aadhar_no');
            $formArray['pan_no'] = $this->input->post('pan_no');
            $formArray['blood_grp'] = $this->input->post('blood_grp');
            $formArray['identification_mark'] = $this->input->post('identification_mark');
            $formArray['photo'] = $this->input->post('photo');

            $formArray['contact_no'] = $this->input->post('contact_no');
            $formArray['alternative_contact_no'] = $this->input->post('alternative_contact_no');
            $formArray['address'] = $this->input->post('address');
            $formArray['city'] = $this->input->post('city');
            $formArray['pin_code'] = $this->input->post('pin_code');
            $formArray['state'] = $this->input->post('state');
            $formArray['country'] = $this->input->post('country');
            $formArray['gender'] = $this->input->post('gender');


             $this->Auth_model->addDetails($formArray);
             $this->session->set_flashdata('msg', 'You registered successfully');

            // if($insert_id > 0){
            //     $this->session->set_flashdata('msg', 'You registered successfully');
            //     // $this->session->set_userdata('sevarth_id', $designation_id);
            //     $this->session->set_userdata('user_id', $insert_id);

    
                //        }else{
                //     echo "User cannot be created";
                // // }
           

            
        }

    }
   

   
    public function register()
    {

      

        $this->form_validation->set_rules('sevarth_id', 'Sevarth ID','required|regex_match[/^[0-9]{12}$/]');
        $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[employees.email]');
        $this->form_validation->set_rules('password', 'Password','required');
        $this->form_validation->set_rules('hint_question', 'Hint Question','required');
        $this->form_validation->set_rules('hint_answer', 'Hint Answer','required');

  
        if ($this->form_validation->run() == false) {

            $events = $this->Auth_model->getOrganization();
            $dept = $this->Auth_model->getDepartment();
            $role = $this->Auth_model->getRole();
            

            $this->load->view('templates/header.php');
            $this->load->view("auth/register.php", array('events' => $events, 'dept' => $dept, 'role' => $role));
        } else {

            //from here
            $loginArray = array();



            $role_id=$this->input->post('role_id');
            $loginArray['role_id'] = $role_id;
            $loginArray['org_id'] = $this->input->post('org_id');
            $loginArray['dept_id'] = $this->input->post('dept_id');

            $email =$this->input->post('email');
            $loginArray['email'] = $email;
            $loginArray['password'] = $this->input->post('password');
            $loginArray['sevarth_id'] = $this->input->post('sevarth_id');

            $loginArray['hint_question'] = $this->input->post('hint_question');
            $loginArray['hint_answer'] = $this->input->post('hint_answer');



             $this->Auth_model->create($loginArray,$email);
             $this->session->set_flashdata('msg', 'You registered successfully');


             //end

                $this->session->set_flashdata('msg', 'You registered successfully');
                // $this->session->set_userdata('user_id', $sevarth_id);

                if($role_id == 1){
                    redirect('home/HomeController/employee');
                }
                else if($role_id == 2){
    
                    redirect('home/HomeController/hod');
    
                }
                else if($role_id == 3){
    
                    redirect('home/HomeController/principal');
                }
    

            
        }

    }

    public function forgot(){
        $email = $this->input->post('email');

        if($email == ""){
            $this->load->view('auth/forgot.php');
        }       

        else{
            
     
         
            $this->Auth_model->check_email($email);

        }

    }

    public function changePassword(){
        $password = $this->input->post('password');
        $new_password = $this->input->post('new_password');

        if($password == "" && $new_password == ""){
            $this->load->view('auth/changePassword.php');
        }       

        else{
            if($password == $new_password){
                
                $this->Auth_model->change_password($password);

            }

        }

    }

    public function login()
    {

        $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[employees.email]');
        $this->form_validation->set_rules('password', 'Password','required|valid_email|is_unique[employees.password]');

  
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php');
            $this->load->view('auth/login.php');
        }else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $sevarth_id = $this->input->post('sevarth_id');
            $this->Auth_model->can_login($email, $password, $sevarth_id);
        }
        

        

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