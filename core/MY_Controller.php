<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Dashbard's controller which will be handling all the methods for dashbard page.
*/

class MY_controller extends CI_Controller {

	var $header;
	var $navigation;
	var $common;
	var $sidebar;
	protected $data;

	function __construct(){
		//First thing first, lets assign some default values here.

		parent::__construct(); //papa wala __construct();
		$this->load->helper('url');
		$link['base_url']=base_url();


		//$data['breadcrumb_text']='Dashbard';
		//$data['class_active']='class="current"';
		$this->navigation= $this->load->view('general/navigation',$link,TRUE);
		$this->header=$this->load->view('general/header',$link,TRUE);
		$this->sidebar=$this->load->view('general/sidebar',array('navigation'=>$this->navigation,'base_url'=>$link['base_url']),TRUE);
		$this->common=$this->load->view('general/common',array('header'=>$this->header,'sidebar'=>$this->sidebar,'base_url'=>$link['base_url']),TRUE);
		$this->footer=$this->load->view('general/footer',$link,TRUE);
		$this->data= array('common'=>$this->common,'footer'=>$this->footer);

	}

}
