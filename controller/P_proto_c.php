<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class p_proto_c extends CI_Controller {
	// public function __construct() { 
		// parent::__construct();
		// $this->load->database();
		// $this->load->model('proto_model');	
		// $this->load->helper('url');	
	// }
	
	public function index() {
		// $this->load->view('test');
		$this->load->view('P_head_v');		
		$this->load->view('P_sample_v');
		$this->load->view('P_footer_v');
	}
	
	public function login() {
		$this->load->view('P_head_v');			
		$this->load->view('P_menu_v');
		$this->load->view('P_Blogin_v');
		$this->load->view('P_login_v');
		$this->load->view('P_footer_v');
	}
}