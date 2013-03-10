<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Model class that handles all the functions related to the Attendence Module.
 * @author Anand Kumar Chaudhary
 */


class Form_sell_m extends CI_Model{
	
	function __construct(){
		parent::__construct();
		
	}
	
	function get_student_detail()
	{
		$this->load->helper('form');
		
		$this->load->database();
$query = $this->db->query("SELECT * FROM  temp_record;");

   foreach ($query->result() as $row)
{
	//echo $row->temp_id ;
//echo	$row->name . "      " .$row->sex. "    ".$row->class."      ".$row->batch."       ".$row->email."		".$row-> phone;
$this->load->library('table');
		$tmpl = array ( 'table_open'  => '<table id="table-example" class="table">');
		$this->table->set_template($tmpl);
		$this->table->set_heading('SNo.','REF. No.', 'Form ID', 'NAME','SEX','CLASS','Phone','EMAIL','Batch','Date','DO');
  // echo $row->name; // call attributes
  // echo $row->reverse_name(); // or methods defined on the 'User' class
  
  $var=1;
		foreach ($query->result_array() as $row)
		{
			$this->table->add_row($var,$row['temp_id'],$row['id_number'],ucwords($row['name']),$row['sex'],$row['class'],$row['phone'],$row['email'],$row['batch'],$row['date'],'
					<label ><input type="radio" value="accept" name="student['.$row['temp_id'].']" style="opacity: 0;"><font color="#00CC00">Accept</font> </label>
					<label><input type="radio" value="reject" name="student['.$row['temp_id'].']" style="opacity: 0;"><font color="#FF0000">Reject</font> </label>
					<label><input style="opacity: 0;"><font color="#FF0000"></font> </label>
					');$var++;
		}
		return form_open('form_sell/db_transfer',array('id'=>'test')).$this->table->generate();
		 
   } 

		
	}
	
	
	function sent_to_pending($studentid)
	{
	
	{
		$data=array();
		$i=0;
	//	$attendence_record_id=$this->insert_attendence_record($date,$created_by);
		//if($attendence_record_id)
		foreach($studentid as $row )
		{
			//attendence_id 	s_id 	status 	date 	updated_on 	attendence_record_id
			$data[$i]['name']=$row['name'];
			
			//$data[$i]['s_id']=$row;
			$data[$i]['status']='P';
			$i++;
		}
		echo $data;
		//$this->db->insert_batch('attendece_all', $data);
		
		return $this->db->affected_rows();
		$this->output->enable_profiler(TRUE);
		// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date'), ('Another title', 'Another name', 'Another date')
	}
	
	
 }
	
	
	
	

	
	
	
	
	}