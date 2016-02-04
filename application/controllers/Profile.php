<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Profile_model');
	}

	public function index(){
		$uid = $this->session->userdata('id');
		$data['user_id'] = $uid;
		$data['user_info'] = $this->Profile_model->user_profile($uid)->result_array();

		$this->load->view('profile/profile_view',$data);
	}

	public function edit_img(){
		$data['user_id'] = $this->uri->segment(3);
		$data['error'] = '';
		$this->load->view('profile/profile_img_edit_view',$data);
	}

	public function update_img(){

		$id = $this->uri->segment(3);

		if(isset($_FILES['user_file'])){
		$target = "assets/img/profiles/".basename($_FILES['user_file']['name']) ;
		$file_name = $_FILES['user_file']['name'];
		print_r($_FILES);

			if(move_uploaded_file($_FILES['user_file']['tmp_name'],$target)){
				 $result = $this->Profile_model->update_img($id,$file_name);
				 echo "OK!";//$chmod o+rw galleries
			}
		}

		header("Location:".base_url()."index.php/profile");
	}
	public function edit(){
		$uid = $this->session->userdata('id');
		$data['user_id'] = $uid;
		$data['user_info'] = $this->Profile_model->user_profile($uid)->result_array();

		$this->load->view('profile/profile_edit_view',$data);
	}

	public function update(){
		 print_r($_POST);

		$uid = $this->uri->segment(3);
		//print_r($_POST);
		$fullname = $_POST['fullname'];
		$lastname = $_POST['lastname'];
		$birthday = $_POST['birthday'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$qualification =$_POST['qualification'];
		$skills =$_POST['skills'];
		$achievements =$_POST['achievements'];

		$result = $this->Profile_model->updateProfile($uid,$fullname,$lastname,$birthday,$gender,$address,$contact_no,$qualification,$skills,$achievements);

		header("Location:".base_url()."index.php/profile");
	}
}
