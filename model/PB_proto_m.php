<?php
class PB_proto_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function userpw($userid) {
		$pw_column = 2;
		$dbpw = $this->db->get_where('Userinfo',array('id'=>$userid))->row($pw_column);
		return $dbpw->pw;		
	}	
}
