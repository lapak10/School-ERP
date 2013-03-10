<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * --------------------TEACHER's MODEL---------------------
*  Holds all the basic methods which are common to all teachers,and any future methods related to model
*  should be implemented here only
*
* @author Anand Kumar Chaudhary
*/


class Teacher_model extends CI_Model{

	//Define the related table name's here.
	private $assignment_table='assignment_table';
	private $assignment_upload='assignment_upload';
	private $class_id='class_id';





	function __construct(){
		parent::__construct();

	}



	/* Inserts the assignment body(text) into to related assignment table.
	 * @params class,section,body (matter of the assignment)
	*/
	function post_assignment($class,$section,$body){
		if($this->get_class_id($class,$section)){
		$data = array(
				'body' => 'Hasta LaVista' ,
				'from' => 'vinayak' ,
				'to_class_id' => $this->get_class_id($class,$section),
				'created_on' => '2013-03-10'
		);

		return $this->db->insert($this->assignment_table, $data);
	}}

	/*
	 * Return the class_id and take $class and $section...pretty simple :P
	*/
	function get_class_id($class,$section){
		
		$query=$this->db->select('class_id')->from($this->class_id)->where(array('class_name'=>$class,'class_section'=>ucfirst($section)))->get();

		if ($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->class_id;
				
		}else {
			return FALSE;
		}
	}
	
	function save_uploaded_file_details($info){
		return $this->db->insert($this->assignment_upload, $info);
	
	}


}



	
	


