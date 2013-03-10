<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Dashbard's controller which will be handling all the methods for dashbard page.
*/

class Dashboard_c extends CI_Controller {

	var $header;
	var $navigation;
	var $common;
	var $sidebar;

	function __construct(){
		//First thing first, lets assign some default values here.

		parent::__construct(); //papa wala __construct();
		$this->load->helper('url');
		$link['base_url']=base_url();


		//$data['breadcrumb_text']='Dashbard';
		//$data['class_active']='class="current"';
		$this->navigation= $this->load->view('general/navigation',$link,TRUE);
		$this->header=$this->load->view('general/header',$link,TRUE);
		$this->sidebar=$this->load->view('general/sidebar',array('navigation'=>$this->navigation,'base_url'=>$link['base_url'],'logged_in_as'=>'P.K.Sharma'),TRUE);
		$this->common=$this->load->view('general/common',array('header'=>$this->header,'sidebar'=>$this->sidebar,'base_url'=>$link['base_url']),TRUE);


	}

	function index(){
		$common['common']=$this->common;
		$common['var']='This is SPARTAA';
		$this->load->view('dashboard',$common);
		$this->load->view('general/footer');

	}
	function new_method(){
		
		echo "hello";
	}



}

/* End of file dashboard_c.php */
/* Location: ./application/controllers/dashboard_c.php */