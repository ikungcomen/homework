<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
   		   parent::__construct();
        
   		  $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        //$this->load->database();
        $this->load->library('form_validation');
		    $this->load->model('DBHelper');
        
        

 	}
	
	public function index()
	{
		$this->load->view('form_login');
		
	}
  public function back()
  {
    $this->load->view('welcome_message');
    
  }

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		

		//set validations
        $this->form_validation->set_rules("username", "Username", "trim|required");
        $this->form_validation->set_rules("password", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE){
               $this->load->view('form_login');
			
        }else{
        		if ($this->input->post('btn_login') == "Login"){
                    $usr_result = $this->DBHelper->login($username, $password);
                    
                    $role = "";
                    $name = "";
                    $lastname = "";
                    foreach ($usr_result->result() as $row){
                        $name =  $row->user_name;
                        $lastname =  $row->user_lastname;
                        $role = $row->user_role;
                    }

                    if ($usr_result->num_rows() > 0) {
                    
                         
                         $sessiondata = array(
                              'username'  => $username,
                              'name'      => $name,
                              'lastname'  => $lastname,
                              'role'      => $role,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         $this->load->view('welcome_message');
						 
                    }
                    else{
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('Welcome/index');
                         
                    }
               }else{
                    redirect('Welcome/index');
               		
               }
          }


	}
	public function logout()
	{
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('loginuser');
    $this->session->sess_destroy();
    redirect('Welcome','refresh');
	}
}

