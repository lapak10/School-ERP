<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trial_student extends CI_Controller {
protected $user_status;
function __construct(){
parent::__construct();
$this->user_status='teacher';//Abhi k lie,baad mein check_status() value dega
}
function say_hello(){
if($this->user_status!='teacher')die('UnAuthorized Access');
echo "I am Teacher";
}
}