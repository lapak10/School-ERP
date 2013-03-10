<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Dashbard's controller which will be handling all the methods for dashbard page.
 */

class Tabs_c extends My_Controller {	
	
	
	function index(){
		
		$this->data['main']=$this->load->view('tabs','',TRUE);
		$this->data['common']=$this->data['common'];
		$this->data['footer']=$this->data['footer'];
		$this->load->view('general/hybrid_common',$this->data);
		
		
	}
	
	
	
}