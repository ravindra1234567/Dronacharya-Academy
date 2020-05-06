<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->header = 'include/student/header';
		// $this->footer = 'include/student/footer';
		$this->load->view('include/student/header');
	}
	public function index()
	{
		$this->load->view('student/index');
	}
}
