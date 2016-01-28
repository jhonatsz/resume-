<?php
class Profile_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function user_profile($uid){
      $data = $this->db->query("SELECT * FROM users LEFT JOIN users_profile ON users.id=users_profile.id WHERE users.id=$uid");
      return $data;
    }
	
   function updateProfile($uid=NULL,$fullname=NULL,$lastname=NULL,$birthday=NULL,$gender=NULL,$address=NULL,$contact_no=NULL,$qualification=NULL,$skills=NULL,$achievements=NULL){
		$result = $this->db->query("UPDATE users_profile SET fullname='$fullname',lastname='$lastname',birthday='$birthday',gender='$gender',
		address='$address',contact_no='$contact_no',qualification='$qualification',
		skills='$skills',achievements='$achievements' WHERE id='$uid'");
		
		return $result;
	}

}
