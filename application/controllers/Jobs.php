<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Job_model');
	}
	public function index(){
		$data['jobs_list'] = $this->Job_model->list_of_jobs('active')->result_array();

		$this->load->view('jobs/jobs_view',$data);
	}

  public function create(){

		$this->load->view('jobs/jobs_create_view');
	}

	public function info(){
		$this->load->view('jobs/jobs_info_view');
	}

  public function jobs_list(){

		$this->load->view('jobs/jobs_list_view');
  }

	public function applicant_list(){
		$this->load->view('jobs/applicant_list_view');
	}

	public function sort_ranks(){

	}

}
