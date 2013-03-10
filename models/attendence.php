<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Model class that handles all the functions related to the Attendence Module.
* @author Anand Kumar Chaudhary
*/


class Attendence extends CI_Model{

	function __construct(){
		parent::__construct();

	}

	function get_students(){
		$this->load->helper('form');

		$this->db->select('s_id,name');

		$query = $this->db->get('attendance_sheet_view');

		$this->load->library('table');
		$tmpl = array ( 'table_open'  => '<table id="table-example" class="table">');
		$this->table->set_template($tmpl);
		$this->table->set_heading('Roll No.', 'Student ID', 'Name','Present');


		$var=1;
		foreach ($query->result_array() as $row)
		{
			$this->table->add_row($var, $row['s_id'],ucwords($row['name']),'
					<label><input type="radio" value="present" name="student['.$row['s_id'].']" style="opacity: 0;">Present</label>
					<label><input type="radio" value="absent" name="student['.$row['s_id'].']" style="opacity: 0;">Absent </label>
					<label ><input type="radio" value="leave" name="student['.$row['s_id'].']" style="opacity: 0;"><label >Leave </label>
					<label ><input type="radio" value="other" name="student['.$row['s_id'].']" style="opacity: 0;"><label >Other </label>
					');$var++;
		}
		return form_open('welcome/dashboard',array('id'=>'test')).$this->table->generate();

	}
	function get_stunts(){

		$this->db->select('s_id,name');

		$query = $this->db->get('attendance_sheet_view');

		$this->load->library('table');
		$tmpl = array ( 'table_open'  => '<table id="table-example" class="table">' );
		$this->table->set_template($tmpl);
		$this->table->set_heading('Roll No.', 'Student ID', 'Name','Student');



		foreach ($query->result_array() as $row)
		{
			$this->table->add_row('Fred', $row['s_id'],$row['name'],'<input type="radio" value="absent" name="'.$row['s_id'].'" style="opacity: 0;"/><label >Yes </label>');
		}
		return "<form id='test' />".$this->table->generate();

	}
	/* Function which marks the attendence of the students in batch_mode
	 * @params $data--Array containg all the students and there attendence.
	*
	*/

	function insert_attendence($student){
		$date='2013-02-28';
		$created_by='Anujay Kumar';
		$data=array();
		$i=0;
		$attendence_record_id=$this->insert_attendence_record($date,$created_by);
		if($attendence_record_id)
			foreach($student as $row =>$key)
			{
				//attendence_id 	s_id 	status 	date 	updated_on 	attendence_record_id
				$data[$i]['attendence_record_id']=$attendence_record_id;
					
				$data[$i]['s_id']=$row;
				$data[$i]['status']=$key;
				$i++;
			}

			$this->db->insert_batch('attendece_all', $data);

			return $this->db->affected_rows();
			$this->output->enable_profiler(TRUE);
			// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date'), ('Another title', 'Another name', 'Another date')
	}

	function insert_attendence_record($date,$created_by){
		$data=array(
				'date_of_attendece'=>$date,
				'created_by'=>$created_by
		);
		$this->db->insert('attendence_record',$data);
		if($this->db->affected_rows()>0){
			$query=$this->db->select('attendence_record_id')->from('attendence_record')->where('date_of_attendece',$date)->get();
				
			if ($query->result())
			{
				$row = $query->row();

				return $row->attendence_record_id;
			}
		}
		else{
			return FALSE;
		}
			
	}

	function get_attendence_record_date(){
		$query=$this->db->select('date_of_attendece')->from('attendence_record')->get();
		$data='';

		foreach($query->result_array() as $key)
			foreach($key as $value)
			{
				$data=$data."<option value='".$value."'>".$value."</option>'";
			}

			return $data;
	}

	function get_attendence_class_wise($class,$section,$date){

		$sql="select count(status) as ? from attendence_class_wise where class=? and section=? and status=? and date_of_attendece=?";
		$present=$this->db->query($sql, array('present',$class, $section,'present',$date));
		$absent=$this->db->query($sql, array('absent',$class, $section,'absent',$date));
		$leave=$this->db->query($sql, array('leave',$class, $section,'leave',$date));
		$other=$this->db->query($sql, array('other',$class, $section,'other',$date));
		$present_row = $present->row();
		$absent_row = $absent->row();
		$leave_row = $leave->row();
		$other_row = $other->row();

		return array('present'=>$present_row->present,
				'absent'=>$absent_row->absent,
				'leave'=>$leave_row->leave,
				'other'=>$other_row->other);


	}

}