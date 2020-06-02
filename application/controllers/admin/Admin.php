<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('user');
		}

		public function index(){
			$this->load->view("admin/login");
		}
		function home(){
			$this->load->view("admin/home");
		}
		function gallery(){
			$data = array(); 
         
        $con = array( 
            'where'=> array( 
                'status' => 1 
            ) 
        ); 
        $data['gallery'] = $this->user->getRows($con); 
        $data['title'] = 'Images Gallery'; 
         
        // Load the list page view 
        $this->load->view('include/admin/header', $data); 
        $this->load->view('gallery/index', $data); 
		}
	}
	?>