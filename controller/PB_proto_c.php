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
		$this -> session -> sess_destroy();
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
		if (strcmp($dbpw, $postpw) == 0) {
			echo "1Log in Success";
			$this -> session -> set_userdata('is_login', true);
			echo strcmp($dbpw, $postpw);
			redirect('/PB_proto_c/');
		} else {
			$this -> session -> set_flashdata('message', 'Login Failed');
			echo "Log in Failed";
			echo strcmp($dbpw, $postpw);
			redirect('/PB_proto_c/login');
		}
	}

	public function rsearch() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_reportsearch_v');
		$this -> load -> view('PB_footer_v');
	}

	public function preport() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_pathologyreport_v');

		//bring image(now, modify thumnail in view file *recommended save modified image later)
		$id = 14;
		$fcode = $this -> PB_proto_m -> getImage($id);
		$this -> load -> view('PB_Pimage_v', $fcode);

		$this -> load -> view('PB_footer_v');
	}

	public function isearch() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_imagesearch_v');

		//bring image(now, modify thumnail in view file *recommended save modified image later)
		$id = 14;
		$fcode = $this -> PB_proto_m -> getImage($id);
		$this -> load -> view('PB_Iimage_v', $fcode);

		$this -> load -> view('PB_footer_v');
	}

	public function prvlibrary() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
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
		if ($this -> session -> userdata('is_login') == FALSE) {
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
		if ($this -> session -> userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function sreport_mlclr() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_sendreportMlclr_v');
		
		//update and get comment
		if ($_POST != null) {
			$comment = $this -> input -> post('comment', TRUE);
			$this -> PB_proto_m -> updateComment($comment);

			redirect('/PB_proto_c/sreport_mlclr');
			exit ;
		}
		$id = 14;
		$comment = $this -> PB_proto_m -> getComment($id);
		$this -> load -> view('comment', $comment);

		$this -> load -> view('PB_footer_v');
	}

	public function sreport_if() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_sendreportIf_v');
		
		//update and get comment
		if ($_POST != null) {
			$comment = $this -> input -> post('comment', TRUE);
			$this -> PB_proto_m -> updateComment($comment);

			redirect('/PB_proto_c/sreport_if');
			exit ;
		}
		$id = 14;
		$comment = $this -> PB_proto_m -> getComment($id);
		$this -> load -> view('comment', $comment);

		$this -> load -> view('PB_footer_v');
	}

	public function sreport_em() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_sendreportEm1_v');
		//bring image(now, modify thumnail in view file *recommended save modified image later)
		$id = 14;
		$fcode = $this -> PB_proto_m -> getImage($id);
		$this -> load -> view('send',$fcode);
		$this -> load -> view('PB_sendreportEm2_v');

		//update and get comment
		if ($_POST != null) {
			$comment = $this -> input -> post('comment', TRUE);
			$this -> PB_proto_m -> updateComment($comment);

			redirect('/PB_proto_c/sreport_em');
			exit ;
		}
		$id = 14;
		$comment = $this -> PB_proto_m -> getComment($id);
		$this -> load -> view('comment', $comment);

		$this -> load -> view('PB_footer_v');
	}

	public function sampleD() {
		$this -> load -> view('PB_sampleD_v');
	}
	
	
	//send data between web servers
	public function post_request($url, $data) {
	// Convert the data array into URL Parameters like a=b&foo=bar etc.
	$data = http_build_query($data);

	// parse the given URL
	$url = parse_url($url);

	if ($url['scheme'] != 'http') {
		return "Error:Only HTTP request are supported!";
	}


	// extract host and path:
	$host = $url['host'];
	$path = $url['path'];
	$res = '';

	// open a socket connection on port 80 - timeout: 300 sec
	if ($fp = fsockopen($host, 80, $errno, $errstr, 300)) {
		$reqBody = $data;
		$reqHeader = "POST $path HTTP/1.1\r\n" . "Host: $host\r\n";
		$reqHeader .= "Content-type: application/x-www-form-urlencoded\r\n"
		. "Content-length: " . strlen($reqBody) . "\r\n"
		. "Connection: close\r\n\r\n";

		/* send request */
		fwrite($fp, $reqHeader);
		fwrite($fp, $reqBody);

		while(!feof($fp)) {
			$res .= fgets($fp, 1024);
		}

		fclose($fp);
	} else {
		return "Error:Cannot Connect!";
	}

	// split the result header from the content
	$result = explode("\r\n\r\n", $res, 2);

	$header = isset($result[0]) ? $result[0] : '';
	$content = isset($result[1]) ? $result[1] : '';

	return $content;
}

}
