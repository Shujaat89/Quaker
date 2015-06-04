<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	
	public function index(){
		$this->load->view("main");
		
	}



	public function login(){
		

		$pass = $this->input->post('password');
		$email = $this->input->post('email');
		
		$this->load->model('check_login');
		$response = $this->check_login->chkLogin($email,$pass);
		
		$status = array('status' => 1);
		if($response === 0) {
			$status = array('status' => 0);
			die(json_encode($status));
		}

		$this->session->set_userdata($response);
		
		die(json_encode($response));
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->load->view("main");
	}
	


	public function singup_page(){

		$this->load->view("signup");
	}


	public function loadProfile(){

		
		

		$data["username"] = $this->session->userdata('username');
		$data["id"] = $this->session->userdata('user_id');
		$data["email"]= $this->session->userdata('email');


		$this->load->view("profile_header",$data);
		
		$this->load->view("user_profile",$data);

		//$this->load->view("footer");
	}


	public function get_db(){
		$this->load->model('model_test');
		$data['records']= $this->model_test->getAll();
		$this->load->view("db_test",$data);
	}

	public function myWall(){
		$this->load->view("my_wall");
	}
}