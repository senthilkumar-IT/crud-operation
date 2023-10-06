<?php
class Email extends CI_Controller{
    public function send_mail() {
        $this->load->view('email.php');
        
    }
}

