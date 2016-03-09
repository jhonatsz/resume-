<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailer extends CI_Controller {
  public function __construct(){
    parent::__construct();

    $this->load->library('email');
  }

  public function index(){
    $subject = 'This is a test';
    $message = '<p>This message has been sent for testing purposes.</p>';
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
              <html xmlns="http://www.w3.org/1999/xhtml">
              <head>
                  <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
                  <title>'.html_escape($subject).'</title>
                  <style type="text/css">
                      body {
                          font-family: Arial, Verdana, Helvetica, sans-serif;
                          font-size: 16px;
                      }
                  </style>
              </head>
              <body>
              '.$message.'
              </body>
              </html>';

          $result = $this->email->from('kaii@klaseko.com','Job Test')
          //->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
          ->to('marasiganeugeneee@gmail.com')
          ->subject($subject)
          ->message($body)
          ->send();

      var_dump($result);
      echo '<br />';
      echo $this->email->print_debugger();

      //exit;
  }
}
