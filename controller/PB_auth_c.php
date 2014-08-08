<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PB_auth_c extends CI_Controller {
	public function __construct() { 
		parent::__construct();
		$this->load->database();
		$this->load->model('PB_proto_m');	
		$this->load->helper('url');	
	}
	
	function login() {
		
	}
}