<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->view('include/student/header');
		$this->load->view('include/student/footer');
	}

	public function index(){
		$this->load->view("student/index");
		// echo "Ravindra";
		// $this->load->view('include/student/header'); 
	}
	function gallery(){
		$this->load->view('student/gallery');
	}
}



?>
