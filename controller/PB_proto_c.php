<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class PB_proto_c extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this -> load -> database();
		$this -> load -> model('PB_proto_m');
		$this -> load -> helper('url');
	}

	public function index() {
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function login() {
		$this -> load -> helper('form');
		$this -> load -> library('form_validation');

		//check form validation by form_validation lib in CI
		$this -> form_validation -> set_rules('userid', 'ID', 'required');
		$this -> form_validation -> set_rules('userpw', 'Password', 'required');

		if ($this -> form_validation -> run() == FALSE) {
			
			$this -> load -> view('PB_head_v');
			$this -> load -> view('PB_login_v');
			$this -> load -> view('PB_footer_v');
		} else {
			redirect('/PB_proto_c/authentication'); 
		}

		// $this -> load -> view('PB_footer_v');
	}
	
	public function logout() {
		//destory session for logout
		$this->session->sess_destroy();
		redirect('/PB_proto_c/login');		
	}

	public function authentication() {
		$postid = $this -> input -> post('userid');
		$postpw = $this -> input -> post('userpw');
		$dbpw = $this -> PB_proto_m -> userpw($this -> input -> post('userid'));
		//var_dump($chkuser); ckuser
		echo $postid;
		echo $postpw;
		echo $dbpw;
				if(strcmp($dbpw,$postpw) == 0) {
					echo "1Log in Success";
					$this->session->set_userdata('is_login',true);
					echo strcmp($dbpw,$postpw);
					redirect('/PB_proto_c/');
				}
				else {
					$this->session->set_flashdata('message','Login Failed');
					echo "Log in Failed";
					echo strcmp($dbpw,$postpw);
					redirect('/PB_proto_c/login');
				}
		}
	public function rsearch() {

		//if someone's not logged in yet, move to login page
		if ($this->session->userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_reportsearch_v');
		$this -> load -> view('PB_footer_v');
	}

	public function preport() {
		
		//if someone's not logged in yet, move to login page
		if ($this->session->userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_pathologyreport_v');
		$this -> load -> view('PB_footer_v');
	}

	public function isearch() {
		
		//if someone's not logged in yet, move to login page
		if ($this->session->userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function prvlibrary() {
		
		//if someone's not logged in yet, move to login page
		if ($this->session->userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function Pbllibrary() {
		
		//if someone's not logged in yet, move to login page
		if ($this->session->userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function messenger() {
		
		//if someone's not logged in yet, move to login page
		if ($this->session->userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function sreport() {
		
		//if someone's not logged in yet, move to login page
		if ($this->session->userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function sampleD() {
		$this -> load -> view('PB_sampleD_v');
	}

}
