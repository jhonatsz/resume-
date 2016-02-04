<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Job_model');
		$this->load->library('Pagination');
	}
	public function index(){
		$start=0;
		$data['jobs_list'] = $this->Job_model->list_of_jobs('active','LIMIT '.$start.',6')->result_array();
		$data['type'] = $this->session->userdata('type');

	  // Pagination
		$config['base_url'] = base_url().'index.php/jobs/page';
		$config['total_rows'] = count($this->Job_model->list_of_jobs('active','')->result_array());
		$config['per_page'] = 6;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 2;
		$config['full_tag_open'] = '<ul class="pagination pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['prev_link'] = '<span class="glyphicon glyphicon-chevron-left"></span>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';

		$config['next_link'] = '<span class="glyphicon glyphicon-chevron-right"></span>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$this->pagination->initialize($config);

	  $this->pagination->create_links();

		$this->load->view('jobs/jobs_view',$data);
	}

  // Pagination Function
	public function page(){

		if($this->uri->segment(3) > 0 ){
			$limit = $this->uri->segment(3) * 6;
			$start = ($this->uri->segment(3) - 1) * 6;
			$data['jobs_list'] = $this->Job_model->list_of_jobs('active','LIMIT '.$start.','.$limit.'')->result_array();
			$data['type'] = $this->session->userdata('type');

		  // Pagination
			$config['base_url'] = base_url().'index.php/jobs/page';
			$config['total_rows'] = count($this->Job_model->list_of_jobs('active','')->result_array());
			$config['per_page'] = 6;
			$config['use_page_numbers'] = TRUE;
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<ul class="pagination pull-right">';
			$config['full_tag_close'] = '</ul>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';

			$config['prev_link'] = '<span class="glyphicon glyphicon-chevron-left"></span>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['next_link'] = '<span class="glyphicon glyphicon-chevron-right"></span>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$this->pagination->initialize($config);

		  $this->pagination->create_links();

			$this->load->view('jobs/jobs_view',$data);
		}
		else{
			header("Location:".base_url()."index.php/jobs/page/1");
		}

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
		$units= $_POST['units'];

		$result = $this->Job_model->updateJob($jobId,$name,$description,$qualifications,$skills,$units);

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

			$data['check_if_exist'] = $this->Job_model->check_if_exist($jobId,$data['appId']);
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

	public function search(){
		$category = $this->input->post('category');

		$data['jobs_list'] = $this->Job_model->search_jobs($category)->result_array();
		$data['type'] = $this->session->userdata('type');

		$this->load->view('jobs/jobs_search_view',$data);
	}


	public function create_pdf(){
      define('FPDF_FONTPATH',APPPATH .'plugins/font/');
      require(APPPATH .'plugins/fpdf.php');

      $pdf = new FPDF('p','mm','A4');
      $pdf -> AddPage();

      $pdf -> setDisplayMode ('fullpage');

      $pdf -> setFont ('times','B',20);
      $pdf -> cell(200,30,"Title",0,1);

      $pdf -> setFont ('times','B','20');
      $pdf -> write (10,"Description");

      $pdf -> output ('your_file_pdf.pdf','D');
  }



	public function notification(){


	}

	public function verification(){

	}

}
