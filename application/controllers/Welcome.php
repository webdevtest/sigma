<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sendMail(){
		
		$config = Array(
   				 'protocol' => 'smtp',
   				 'smtp_host' => 'ssl://smtp.googlemail.com',
   				 'smtp_port' => 465,
   				 'smtp_user' => 'ashole@gmail.com',
   				 'smtp_pass' => 'whstiaap,158',
   				 'mailtype'  => 'text', 
   				 'charset'   => 'iso-8859-1'
				);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		// Set to, from, message, etc.

		$result = $this->email->send();
	}
}
