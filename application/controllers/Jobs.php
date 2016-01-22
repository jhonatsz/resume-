<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function index(){
		$this->load->view('jobs/jobs_view');
	}

  public function create(){

		$this->load->view('jobs/jobs_create_view');
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
