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


    function get_job_applicants($jobId=NULL){
      $applicants = $this->db->query("SELECT * FROM jobs_info LEFT JOIN users on users.id=jobs_info.applicant_id LEFT JOIN users_profile on users.id=users_profile.id
        WHERE jobs_id='{$jobId}'");

      return $applicants;
    }

    function add_applicant($jobId=NULL,$appId=NULL){
      $add_applicant = $this->db->query("INSERT into jobs_info(jobs_id,applicant_id,date_created) VALUES($jobId,$appId,now())");
      return $add_applicant;
    }
}
