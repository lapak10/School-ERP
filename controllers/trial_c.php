<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trial_c extends CI_Controller {
	protected $user_status;
	function __construct(){
		parent::__construct();
		$this->user_status='tacher';//Abhi k lie,baad mein check_status() value dega
		$this->check_status();
	}
	function index(){
		
		echo "I am Teacher";
	}
	
	function check_status(){
		if($this->user_status!='teacher')die('UnAuthorized Access');
	}
}
