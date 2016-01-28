<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Job_model');
	}
	public function index(){
		$data['jobs_list'] = $this->Job_model->list_of_jobs('active')->result_array();
		$data['type'] = $this->session->userdata('type');

		$this->load->view('jobs/jobs_view',$data);
	}

  public function create(){
		$action = $this->uri->segment(3);
		if($action == 'new'){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$qualifications =$_POST['qualifications'];
			$skills =$_POST['skills'];
			
			$result = $this->Job_model->newJob($name,$description,$qualifications,$skills);
			
			header("Location:".base_url()."index.php/jobs");
			
		}
		else{
			$this->load->view('jobs/jobs_create_view');
		}
		
	}
	
	public function delete(){
		$jobId = $this->uri->segment(3);
		
		$result = $this->Job_model->deleteJob($jobId);
		header("Location:".base_url()."index.php/jobs");
	}
	public function update(){
		
		$jobId = $this->uri->segment(3);
		//print_r($_POST);
		$name = $_POST['name'];
		$description = $_POST['description'];
		$qualifications =$_POST['qualifications'];
		$skills =$_POST['skills'];
		
		$result = $this->Job_model->updateJob($jobId,$name,$description,$qualifications,$skills);
		
		header("Location:".base_url()."index.php/jobs/info/{$jobId}");
		
	}

   public function info(){
		$jobId = $this->uri->segment(3);
		$action = $this->uri->segment(4);
		
		if($action == 'edit'){
			
			$data['jobId'] = $jobId;
			$data['appId'] = $this->session->userdata('id');
			$data['type'] = $this->session->userdata('type');
			$data['job_info'] = $this->Job_model->get_job_info($jobId)->result_array();
			
			$this->load->view('jobs/jobs_info_edit_view',$data);
		}
		else{
			$data['jobId'] = $jobId;
			$data['appId'] = $this->session->userdata('id');
			$data['type'] = $this->session->userdata('type');
			$data['applicants'] =	$this->Job_model->get_job_applicants($jobId)->result_array();
			$data['job_info'] = $this->Job_model->get_job_info($jobId)->result_array();
			
			$this->load->view('jobs/jobs_info_view',$data);
		}
		
	}

  public function jobs_list(){

		$this->load->view('jobs/jobs_list_view');
  }

	public function applicant_list(){
		$this->load->view('jobs/applicant_list_view');
	}

	public function apply_job(){
		$jobId = $this->uri->segment(3);
		$appId = $this->uri->segment(4);

		$add_applicant = $this->Job_model->add_applicant($jobId,$appId);

		header("Location:".base_url()."index.php/jobs/info/{$jobId}");
	}

	function search(){
		$category = $this->input->post('category');

		$data['jobs_list'] = $this->Job_model->search_jobs($category)->result_array();
		$data['type'] = $this->session->userdata('type');

		$this->load->view('jobs/jobs_search_view',$data);
	}
}
