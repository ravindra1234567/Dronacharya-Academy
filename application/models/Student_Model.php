<?php
class Student_Model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function registerStudent($data) {
		$data['student_name'] = ucwords($data['student_name']);
		$this->db->insert('student', $data);
	}

	public function getCity(){
		return $this->db->get('city')->result_array(); 
	}
	public function getState(){
		return $this->db->get('state')->result_array(); 
	}
	public function findStudent($email) {
		$this->db->where('email', $email);
		return $this->db->get('student')->num_rows();
	}
	public function authenticateStudent($data) {
		if ($data == null){
			return array("id"=>0);
		}
		else {
			$result = $this->db->get_where('student', $data); 
			if ($result->num_rows()) {
				return array("id"=>$result->result_array()[0]["id"], "name"=>$result->result_array()[0]["student_name"]);
			}
			return array("id"=>0);
		}
	}

}
?>