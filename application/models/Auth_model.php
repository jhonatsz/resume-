<?php
class Auth_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function authenticate_user($email=NULL,$password=NULL){
      $user = $this->db->query("SELECT * FROM users where EMAIL='{$email}' AND PASSWORD='{$password}'");
      return $user;
    }

    function getType($id=NULL){
      $type = $this->db->query("SELECT type FROM users_profile where id='{$id}'")->result_array();
      return $type[0]['type'];
    }
}
