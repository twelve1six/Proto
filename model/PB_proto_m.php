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

	function getImage($id) {
		//column number of fname on table 'TEST'
		$fcode = 4;
		
		//return fcode of a row
		return $this->db->get_where('TEST',array('id'=>$id))->row($fcode);	
	}
	
	function updateComment($comment) {
		// mb_convert_encoding($comment, 'EUC_KR', 'UTF-8');
		//column number of comment on table 'TEST'		
		$sql = "UPDATE PHP_test3.dbo.TEST SET comment = '".$comment."' WHERE id = 14";
		$this->db->query($sql);	
	}
	
	function getComment($id) {
		//column number of comment on table 'TEST'
		$comment = 7;
		
		//return fcode of a row
		return $this->db->get_where('TEST',array('id'=>$id))->row($comment);	
	}
}