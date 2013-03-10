<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 *
	 */


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

	public function index()
	{

		$common['common']=$this->common;
		$common['date_heading']=date('D').' ,'.date('d-m-Y');

		$this->load->model('attendence','',TRUE);


		$common['table_data']=$this->attendence->get_students();





		$this->load->view('table',$common);
		$this->load->view('general/footer');


	}
	public function base()
	{
		echo $this->config->item('base_url').$this->config->item('assets');
	}

	public function student_list(){
		$this->load->model('attendence');



	}

	public function submit(){


		$this->output->enable_profiler(TRUE);

	}

	public function dashboard(){

		$this->load->model('attendence','',TRUE);
		if($this->attendence->insert_attendence($this->input->post('student',TRUE))){
			$common['attendence_done']=TRUE;
			$common['common']=$this->common;
			$common['date_heading']=date('D').' ,'.date('d-m-Y');
				
				
				
			$common['table_data']=$this->attendence->get_students();
				
				
				
			$this->load->view('table',$common);
			$this->load->view('general/footer');
		}else{
			echo "ERROR";
		}
	}

	public function view_attendence(){
		$common['common']=$this->common;
		$this->load->model('attendence','',TRUE);

		$common['date_list']=$this->attendence->get_attendence_record_date();
		



		$this->load->view('attendence_report',$common);
		$this->load->view('general/footer');


	}
	public function submit_attendence(){
		$common['common']=$this->common;
		$this->load->model('attendence','',TRUE);
	
		$common['date_list']=$this->attendence->get_attendence_record_date();
		$details=$this->attendence->get_attendence_class_wise($_POST['class'],$_POST['section'],$_POST['date']);
		$common['present']=$details['present'];
		$common['absent']=$details['absent'];
		$common['leave']=$details['leave'];
		$common['other']=$details['other'];
	
	
	
		$this->load->view('attendence_report',$common);
		$this->load->view('general/footer');
	
	
	}
	public function put_attendence(){
		$common['common']=$this->common;
		$this->load->view('submit',$common);
		$this->load->view('general/footer');
		
	}
	
	public function put_homework(){
		$common['common']=$this->common;
		$this->load->view('upload_homework',$common);
		$this->load->view('general/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
