<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view("student/index");
	}
	function contact(){

	}
	function about(){
		$this->load->view('student/about');
	}
	function courses(){
		
	}
	function gallery(){
		$this->load->view('student/gallery');
	}
}



?>
