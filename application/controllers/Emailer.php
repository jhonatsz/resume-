<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailer extends CI_Controller {
  public function __construct(){
    parent::__construct();

    $this->load->library('email');
  }

  public function index(){

    $config['protocol'] = 'sendmail';
    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;

    $this->email->initialize($config);
      $this->email->from('your@example.com', 'Your Name');
      $this->email->to('lcaii.sann@gmail.com');
      //$this->email->cc('another@another-example.com');
      //$this->email->bcc('them@their-example.com');

      $this->email->subject('Email Test');
      $this->email->message('Testing the email class.');

      $this->email->send();

      echo $this->email->print_debugger();

  }
}
