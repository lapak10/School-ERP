<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
* Model class that handles all the functions related to the Attendence Module.
* @author Anand Kumar Chaudhary
*/


class Form_sell extends CI_Controller {
var $header;
	var $navigation;
	var $common;
	var $sidebar;

	function __construct(){
		parent::__construct(); //papa wala __construct();
		$this->load->helper('url');
		$link['base_url']=base_url();


		//$data['breadcrumb_text']='Dashbard';
		//$data['class_active']='class="current"';
		$this->navigation= $this->load->view('general/navigation',$link,TRUE);
		$this->header=$this->load->view('general/header',$link,TRUE);
		$this->sidebar=$this->load->view('general/sidebar',array('navigation'=>$this->navigation,'base_url'=>$link['base_url'],'logged_in_as'=>'Teacher'),TRUE);
		$this->common=$this->load->view('general/common',array('header'=>$this->header,'sidebar'=>$this->sidebar,'base_url'=>$link['base_url']),TRUE);

	}

function index ()
{
$this->load->helper('form');
$common['common']=$this->common;
		$common['date_heading']=date('D').' ,'.date('d-m-Y');

$this->load->model('form_sell_m','',TRUE);


		$common['table_data']=$this->form_sell_m->get_student_detail();





		$this->load->view('table',$common);
		$this->load->view('general/footer');
 }
public function see_pending()
 {
 $this->load->view('table',$common);
			$this->load->view('general/footer');
 
 
 
 }
 
public function db_transfer()
{


$this->output->enable_profiler(TRUE);

		


}
/*
 * Pass this function a mixed array like $_POST['student'],array('ananad'=>'present','anujay'=>'absent');
 * 
 * @return array('present'=>$present_array,'absent'=>$absent_arrray)
 */
function db_array($a=array(array('anand'=>'absent'),array('anujay'=>'present'))){
	//For each possible state define a new array.
	$present=array();
	$absent=array();
	
	foreach($a as $packet){
		foreach( $packet as $key => $value){
		if($value=='present'){
			array_push($present, $key);
			
		}elseif($value=='absent'){
			array_push($absent, $key);
		}
		}
	}
	//echo print_r(array('present'=>$present,'absent'=>$absent));
	return array('present'=>$present,'absent'=>$absent);
}
}