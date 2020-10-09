<?php 
class Ebook_Model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function getSubject(){
		return $this->db->get('subject')->result_array();
	}
}
?>