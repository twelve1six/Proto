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
		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login');
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_reportsearch_v');
		$this -> load -> view('PB_footer_v');
	}

	public function signup() {
		$this -> load -> helper('form');
		$this -> load -> library('form_validation');

		//check form validation by form_validation lib in CI
		$this -> form_validation -> set_rules('email', 'email address', 'required|valid_email|is_unique[UserInfo.email]');
		$this -> form_validation -> set_rules('id', 'ID', 'required|min_length[5]|max_length[12]');
		$this -> form_validation -> set_rules('pw', 'password', 'required|min_length[6]|max_length[30]|matches[re_password]');
		$this -> form_validation -> set_rules('re_password', 'password check', 'required');

		if ($this -> form_validation -> run() === false) {

			$this -> load -> view('PB_head_v');
			$this -> load -> view('PB_signup_v');
			$this -> load -> view('PB_footer_v');
		} else {
			if(!function_exists('password_hash')){
            $this->load->helper('password');
        }
			$hash = password_hash($this -> input -> post('pw'), PASSWORD_BCRYPT);

			$this -> load -> model('PB_proto_m');
			$this -> PB_proto_m -> add(array('email' => $this -> input -> post('email'), 'pw' => $hash, 'id' => $this -> input -> post('id')));

			$this -> session -> set_flashdata('message', '회원가입에 성공했습니다.');
			$this -> load -> helper('url');
			redirect('/PB_proto_c/login');
		}
	}

	public function login() {
		$this -> load -> helper('form');
		$this -> load -> library('form_validation');

		//check form validation by form_validation lib in CI
		$this -> form_validation -> set_rules('userid', 'ID', 'required');
		$this -> form_validation -> set_rules('userpw', 'Password', 'required');

		if ($this -> form_validation -> run() == FALSE) {

			$this -> load -> view('PB_head_v');
			//give returnURL to PB_login_v
			$this -> load -> view('PB_login_v', array('returnURL'=>$this->input->get('returnURL')));
			$this -> load -> view('PB_footer_v');
		} else {
			redirect('/PB_proto_c/authentication');
		}
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
		
		//get helper(password)
		$this->load->helper('password');
		//check password based on hash
		if(password_verify($postpw, $dbpw)) {
			$this -> session -> set_userdata('is_login', true);
			$returnURL = $this->input->get('returnURL');
			if($returnURL === false) {
				$returnURL = '/PB_proto_c/';
			}
			redirect($returnURL ? $returnURL : '/');
		} else {
			$this -> session -> set_flashdata('message', 'Login Failed');
			redirect('/PB_proto_c/login');
			
		}
	}

	public function rsearch() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/rsearch')));
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_reportsearch_v');
		$this -> load -> view('PB_footer_v');
	}

	public function preport() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/preport')));
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
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/isearch')));
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
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/prvlibrary')));
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function Pbllibrary() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/Pbllibrary')));
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function messenger() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/messenger')));
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_menu_v');
		$this -> load -> view('PB_banner_v');
		$this -> load -> view('PB_footer_v');
	}

	public function sreport_mlclr() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/sreport_mlclr')));
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_sendreportMlclr1_v');

		//bring image(now, modify thumnail in view file *recommended save modified image later)
		$id = 14;
		$fcode = $this -> PB_proto_m -> getImage($id);
		//send image code
		$this -> load -> view('PB_send_v', $fcode);
		$this -> load -> view('PB_sendreportMlclr2_v');

		//update and get comment
		if ($_POST != null) {
			$comment = $this -> input -> post('comment', TRUE);
			$this -> PB_proto_m -> updateComment($comment);

			redirect('/PB_proto_c/sreport_mlclr');
			exit ;
		}
		$id = 14;
		$comment = $this -> PB_proto_m -> getComment($id);
		$this -> load -> view('PB_comment_v', $comment);

		$this -> load -> view('PB_footer_v');
	}

	public function sreport_if() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/sreport_if')));
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_sendreportIf1_v');
		//bring image(now, modify thumnail in view file *recommended save modified image later)
		$id = 14;
		$fcode = $this -> PB_proto_m -> getImage($id);
		//send image code
		$this -> load -> view('PB_send_v', $fcode);
		$this -> load -> view('PB_sendreportIf2_v');

		//update and get comment
		if ($_POST != null) {
			$comment = $this -> input -> post('comment', TRUE);
			$this -> PB_proto_m -> updateComment($comment);

			redirect('/PB_proto_c/sreport_if');
			exit ;
		}
		$id = 14;
		$comment = $this -> PB_proto_m -> getComment($id);
		$this -> load -> view('PB_comment_v', $comment);

		$this -> load -> view('PB_footer_v');
	}

	public function sreport_em() {

		//if someone's not logged in yet, move to login page
		if ($this -> session -> userdata('is_login') == FALSE) {
			redirect('/PB_proto_c/login?returnURL='.rawurlencode(site_url('/PB_proto_c/sreport_em')));
		}
		$this -> load -> view('PB_head_v');
		$this -> load -> view('PB_sendreportEm1_v');
		//bring image(now, modify thumnail in view file *recommended save modified image later)
		$id = 14;
		$fcode = $this -> PB_proto_m -> getImage($id);
		//send image code
		$this -> load -> view('PB_send_v', $fcode);
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
		$this -> load -> view('PB_comment_v', $comment);

		$this -> load -> view('PB_footer_v');
	}

	public function sampleD() {
		$this -> load -> view('PB_sampleD_v');
	}
}
