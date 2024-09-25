<?php
if ( ! defined('BASEPATH')) exit('Stop Its demostrate how to set cookie');
class JC_cookies extends CI_Controller {
   function __construct()
   {
       parent::__construct();
       $this->load->helper('cookie');
   }
   function set()
   {
       $cookie= array(
           'name'   => 'Cloudways Cookie',
           'value'  => 'This is Demonstration of how to set cookie in CI',
           'expire' => '3600',
       );
       $this->input->set_cookie($cookie);
       echo "Congragulatio Cookie Set";
   }
   function get()
   {
       echo $this->input->cookie('Cloudways Cookie',true);
   }
}