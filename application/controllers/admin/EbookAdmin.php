<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class EbookAdmin extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Ebook_Model');
		}

		public function index(){
			$subjects['subjects'] = $this->Ebook_Model->getSubject();
			$this->load->view("admin/ebooks/uploadebook",$subjects);
		}
		
}
?>