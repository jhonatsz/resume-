<?php
class Job_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function list_of_jobs($status=NULL){
      $joblist = $this->db->query("SELECT * FROM jobs where STATUS='active' LIMIT 6");
      return $joblist;
    }
}
