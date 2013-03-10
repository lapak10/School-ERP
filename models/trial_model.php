<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Model class that handles all the functions related to the Attendence Module.
 * @author Anand Kumar Chaudhary
 */


class Trial_model extends CI_Model{
	
	function __construct(){
		$this->load->database();
		
	}

function get_students(){
	
	$Q='select * from new_student_detail';
	$query = $this->db->query($Q);
	
	return $query->result();
	
	
	
}



}