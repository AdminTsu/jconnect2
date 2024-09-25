<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MailTrap extends CI_Controller {

     public function send()
     {
          $config['mailtype'] = 'html';
          $config['protocol'] = 'smtp';
          $config['smtp_host'] = 'smtp.mailtrap.io';
          $config['smtp_user'] = '1e6e579830673d';
          $config['smtp_pass'] = '4d7b8f851ec2bc';
          $config['smtp_port'] = 587;
          $config['newline'] = "\r\n";

          $this->load->library('email', $config);

          $this->email->from('no-reply@jconnect.com', 'Jconnect');
          $this->email->to('fauzidwi28@gmail.com');
          $this->email->subject('Contoh Kirim Email Dengan Codeigniter');
          $this->email->message('Contoh pesan yang dikirim dengan codeigniter');

          if($this->email->send()) {
               echo 'Email berhasil dikirim';
          }
          else {
               echo 'Email tidak berhasil dikirim';
               echo '<br />';
               echo $this->email->print_debugger();
          }

     }

}
?>