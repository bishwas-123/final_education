<?php
if ( ! defined('BASEPATH')) exit("No direct script access allowed");
class Home extends CI_Controller {
	
	public function __construct()
	{
        //or autoload it from /application/config/autoload.php
		parent::__construct();
		session_start();
		$this->load->library('form_validation');
		$this->load->library('facebook_login');
		$this->load->model('registration');
		// $this->load->helper('url');
		// $this->load->helper('date');    
		// $this->token=RAND(100000000,999999999);
		// //$this->enc_token=$this->encrypt_str($this->token);
		$this->data['base_url']=$this->config->item('base_url');
		// $this->data['upload_errors']="";
		// //set null fb_code by default, do not change it.
		$this->fb_code="";
		// //set logged in to zero by default
		$this->data['logged_in']=false;
		$this->data['login_link']="https://www.facebook.com/dialog/oauth?client_id=165261643653331&redirect_uri=http://localhost/final_education/profile";
		//set the facebook code to the variable $this->code for later use.
		if(isset($_GET['code']) && !empty($_GET['code'])) {
		$_SESSION['logout_code']=$_GET['code'];
		$this->fb_code=$_GET['code'];
		}
		//if the user is logged in ,set the  different login link to let the user logout	
	}
	public function index(){

	//retrieve data to  count the records of service provider

	$this->data['count_service_provider']=$this->registration->count_service_provider();
	$this->data['count_college_type']=$this->registration->count_college_type();
	$this->load->view('templates/header',$this->data);
	$this->load->view('clients/home',$this->data);
	$this->load->view('templates/footer',$this->data);
	
	}
	public function search_section(){
		echo 'this is just a test';
		die();
	}
	//retrieve data to  count the records of service provider
	$this->load->view('templates/header',$this->data);
	$this->main_page();
	}
	public function main_page(){
		$this->data['count_service_provider']=$this->registration->count_service_provider();
		$this->data['count_college_type']=$this->registration->count_college_type();
		$this->load->view('clients/home1',$this->data);
		$this->load->view('templates/footer',$this->data);

	}
	public function try1(){
		echo 'table and the data';
	}


}//end of the Home controller