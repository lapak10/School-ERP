<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assignment extends CI_Controller {

	var $header;
	var $navigation;
	var $common;
	var $sidebar;

	function __construct(){
		parent::__construct(); //papa wala __construct();
		$this->load->helper(array('url','form'));
		$link['base_url']=base_url();


		//$data['breadcrumb_text']='Dashbard';
		//$data['class_active']='class="current"';
		$this->navigation= $this->load->view('general/navigation',$link,TRUE);
		$this->header=$this->load->view('general/header',$link,TRUE);
		$this->sidebar=$this->load->view('general/sidebar',array('navigation'=>$this->navigation,'base_url'=>$link['base_url']),TRUE);
		$this->common=$this->load->view('general/common',array('header'=>$this->header,'sidebar'=>$this->sidebar,'base_url'=>$link['base_url']),TRUE);
		
	}

	public function index()	{

		$common['common']=$this->common;

		
		
		
		$this->load->view('upload_homework', $common);
		$this->load->view('general/footer');


	}
	
	public function upload_assignment(){
		$this->load->helper('form');
		$common['common']=$this->common;
	
		$config['upload_path'] = './assets';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name']= TRUE;
	
	
		$this->load->library('upload', $config);
	
		$assignment=array(
				'description'=>$this->input->post('description'),
				'subject'=>$this->input->post('subject'),
				
				'from'=>'Ru9910','to_class_id'=>'2'
		);
	
	
		//Lets also save this information into out database.
		$this->load->model('teacher_model','',TRUE);
		
			
	    
		if ( ! $this->upload->do_upload('userfile'))
		{
			$common['error'] =  $this->upload->display_errors();
	
			$this->load->view('upload_homework', $common);
			$this->load->view('general/footer');
		}
		else
		{
			$common['upload_data'] = $this->upload->data();
			$assignment['file_name']=$common['upload_data']['file_name'];
			$this->load->view('upload_homework', $common);
			$this->load->view('general/footer');
				
		
			
		}
	    
	    $this->teacher_model->save_uploaded_file_details($assignment);
	}
	
	public function view_uploaded_assignment(){
		$common['common']=$this->common;
		
		
		
		
		$this->load->view('view_uploaded_assignment', $common);
		$this->load->view('general/footer');
		
	}



}