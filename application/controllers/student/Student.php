<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Student_Model');
	}

	public function index(){
		
		$this->load->view("student/index");
	}
	function contact(){
		// $this->load->view("student/contactview");
	}
	function about(){
		$this->load->view('student/about');
	}
	function courses(){
		
	}
	function gallery(){
		$this->load->view('student/gallery');
	}

	function login(){
		$data['city'] = $this->Student_Model->getCity();
		$data['state'] = $this->Student_Model->getState();
		$this->load->view("student/login",$data);
	}

	public function studentSignUp(){
		$email = $this->input->post("student-email");
		$state = $this->input->post("student-state");
		$city = $this->input->post("student-city");
		$class = $this->input->post("student-class");
		$college = strtoupper($this->input->post("college"));
		$medium = ($this->input->post("student-medium") == 1)?"eng":"hin";
		$address = $this->input->post("student-address");
		

		$data = array(
			"student_name"=>ucwords(strtolower(preg_replace("/ {2,}/", " ", trim($this->input->post("student-name"))))),
			"mobile"=>$this->input->post("student-mobile"),
			"password"=>$this->input->post("password"),
			"email" => $this->input->post("student-email"),
		);
		
		if (!strlen($data["student_name"]) || (strlen($data["mobile"]) != 10) || (strlen($data["password"]) < 6) || ($data["password"] != $this->input->post('re-password')) ) {
			
			$this->session->set_flashdata('new_signup', "f");
			redirect(base_url()."student/Student/login");
		}
		else if ($this->Student_Model->findStudent($data["email"])) {
			$this->session->set_flashdata('new_signup', "a");
			$this->session->set_flashdata("student-name", $this->input->post("student-name"));
			$this->session->set_flashdata("student-mobile", $this->input->post("student-mobile"));
			$this->session->set_flashdata("password", $this->input->post("password"));
			$this->session->set_flashdata("re-password", $this->input->post("re-password"));
			$this->session->set_flashdata("student-state", $this->input->post("student-state"));
			$this->session->set_flashdata("student-city", $this->input->post("student-city"));
			$this->session->set_flashdata("student-address", $this->input->post("student-address"));
			$this->session->set_flashdata("student-school", $this->input->post("college"));
			$this->session->set_flashdata("student-class", $this->input->post("student-class"));
			$this->session->set_flashdata("student-medium", $this->input->post("student-medium"));
			$this->session->set_flashdata("student-stream", $this->input->post("student-stream"));
			redirect(base_url()."student/Student/login");
		}

		$data["address"] = $address;
		$data["class"] = $class;
		$data["city"] = $city;
		$data["state"] = $state;
		$data["medium"] = $medium;
		$data["college"] = $college;
		$data['doj'] = date("d-m-Y");

		$this->generateAndSendOTP($data["student_name"], $data["email"]);
		$this->session->set_userdata('student_signup_details', $data);
	}


	public function generateAndSendOTP($name, $email) {
		$one_time_password = mt_rand(10000, 99999);
		
		
		 $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $email;
        $subject = "Email Verification from Dronacharya Academy";
        $message = " OTP ". $one_time_password;

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            // echo 'Your Email has successfully been sent.';
            $this->session->set_userdata('otp', $one_time_password);
			$this->session->set_userdata('otp_send_time', time());
			$this->session->set_flashdata("email",$email);

		// $this->header = 'include/student/otp/header';
		// $this->footer = 'include/student/login/footer';

		$this->load->view("include/student/header");
		$this->load->view("student/studentOtpPage");
        } else {
            show_error($this->email->print_debugger());
        }

		

	}

	public function checkOTP() {
		$otp = $this->input->post("one_time_password");
		// exit;
		$otp_receive_time = time();
		if (($otp_receive_time - $this->session->otp_send_time) > 300) {
			$this->session->set_flashdata("error_otp", "Request Timed Out! Click on Resend OTP");
			$this->load->view("include/student/header");
			$this->load->view("student/studentOtpPage");
		}
		else if ($otp != $this->session->otp) {
			$this->load->view("include/student/header");
			// $this->footer = 'include/student/login/footer';
			$this->session->set_flashdata("error_otp", "Wrong OTP Entered!");
			$this->load->view("include/student/header");
			$this->load->view("student/studentOtpPage");
		}
		else {
			$this->Student_Model->registerStudent($this->session->student_signup_details);
			$this->session->unset_userdata('otp');
			$this->session->unset_userdata('otp_send_time');
			$this->session->unset_userdata('student_signup_details');
			$this->session->set_flashdata('new_signup', "s");
			redirect(base_url()."student/Student/login");
		}
	}

	public function studentLogin(){
		$data = array("email"=>$this->input->post('login-email'), "password"=>$this->input->post('login-password'));
		$result = $this->Student_Model->authenticateStudent($data);
		if ($result["id"]) {
			$this->session->set_userdata('student_login', TRUE);
			$this->session->set_userdata('student_id', $result["id"]);
			$this->session->set_userdata('student_name', $result["name"]);
			// $this->session->set_userdata('batch', $result["batch"]);
			// redirect(base_url()."student/StudentFunctionality/studentDashboard");
			echo " Login successfully ";
		}
		else {
			$this->session->set_flashdata('authenticate', 'f');
			$this->session->set_flashdata('email', $data["email"]);
			redirect(base_url()."student/Student/login");
		}
	}























}
?>
