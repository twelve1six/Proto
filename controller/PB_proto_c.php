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
		$this -> load -> view('PB_footer_v');
	}

	public function login() {
		$this -> load -> view('PB_head_v');
		$this -> load -> helper('form');
		$this -> load -> library('form_validation');

		//check form validation by form_validation lib in CI
		$this -> form_validation -> set_rules('userid', 'ID', 'required');
		$this -> form_validation -> set_rules('userpw', 'Password', 'required');

		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('PB_login_v');
		} else {
			//$this->load->view('formsuccess');
			redirect('/PB_proto_c/login'); 
			$this -> PB_proto_m -> ckuser($this -> input -> post('userid'), $this -> input -> post('userpw'));
			echo "Success";

		}

		$this -> load -> view('PB_footer_v');

		echo $this -> input -> post('userid');
		echo ",";
		echo $this -> input -> post('userpw');
	}

	public function authentication() {
		$authentication = $this-> config -> item('authentication');
		//check id, pw is right or wrong
		if($this->input->post('userid') == $authentication['userid'] && 
		$this->input->post('userpw') == $authentication['userpw']) {
			$this->session->set_userdata('is_login',true);
			redirect('/PB_proto_c/login');
		}
		else {
			echo "error";
		}
	}

	public function rsearch() {

		if (true) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_footer_v');
	}

	public function preport() {
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_footer_v');
	}

	public function isearch() {
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_footer_v');
	}

	public function prvlibrary() {
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_footer_v');
	}

	public function Pbllibrary() {
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_footer_v');
	}

	public function messenger() {
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_footer_v');
	}

	public function sreport() {
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_footer_v');
	}

}
