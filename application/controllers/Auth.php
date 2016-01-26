<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();

		// Load database model
		$this->load->model('Auth_model');

	}
	public function index()
	{
		$id = $this->session->userdata('id');

		if(isset($id)){
			header("Location:".base_url()."index.php/dashboard");
		}
		else{
			$this->load->view('login_view');
		}

	}

  // Login User
	public function login(){

			$email = $_POST['email'];
			$password = $_POST['password'];

			$user = $this->Auth_model->authenticate_user($email,$password)->result_array();
			print_r($user);
			if(count($user) > 0 && $user[0]['status'] == 'active'){
					$this->session->set_userdata('id', $user[0]['id']);
					$this->session->set_userdata('email', $user[0]['email']);
					$this->session->set_userdata('status', $user[0]['status']);
					$this->session->set_userdata('type',$this->Auth_model->getType($user[0]['id']));

					header("Location:".base_url()."index.php/dashboard");
			}
			else{
				header("Location:".base_url()."index.php?error=1");
			}

	}

  // Logout User
  public function logout(){
		$this->session->sess_destroy();
		header("Location:".base_url()."index.php");
	}
}
