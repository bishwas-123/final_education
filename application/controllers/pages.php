<?php
class Pages extends CI_Controller {
	
	public function __construct()
	{
        //or autoload it from /application/config/autoload.php
		parent::__construct();
		session_start();
		$this->load->library('form_validation');
		$this->load->library('facebook_login');
		$this->load->model('registration');
		$this->load->helper('url');
		$this->load->helper('date');    
		$this->token=RAND(100000000,999999999);
		$this->enc_token=$this->encrypt_str($this->token);
		$this->data['base_url']=$this->config->item('base_url');
		$this->data['upload_errors']="";
		//set null fb_code by default, do not change it.
		$this->fb_code="";
		//set logged in to zero by default
		$this->data['logged_in']=false;
		$this->data['login_link']="https://www.facebook.com/dialog/oauth?client_id=165261643653331&redirect_uri=http://localhost/final_education/profile";
		//set the facebook code to the variable $this->code for later use.
		if(isset($_GET['code']) && !empty($_GET['code'])) {
		$_SESSION['logout_code']=$_GET['code'];
		$this->fb_code=$_GET['code'];
		}
		//if the user is logged in ,set the  different login link to let the user logout
		if($this->is_logged_in()){
		$this->data['logged_in']=true;
		$this->data['login_link']="http://localhost/final_education/dashboard?code=".$_SESSION['logout_code'];
		$this->check_profilestate();	
		}
	}
	
	//encrypting password or cookie
	public function encrypt_str($str){
	
	return crypt($str,$this->config->item('encryption_key'));
	}
	
	public function index(){
			$this->data['count_service_provider']=$this->registration->count_service_provider();
		$this->data['count_college_type']=$this->registration->count_college_type();

	$this->load->view('templates/header',$this->data);
	//$this->load->view('pages/home',$this->data);
	$this->load->view('clients/home1',$this->data);
	$this->load->view('templates/footer',$this->data);		
	}

	public function search_section(){
		$tbl=$this->input->post('tbl');
		$search_key=$this->input->post('input_field');
		$out=$this->registration->search_everything($tbl,$search_key);
		if($out){
			$out=json_encode($out);
			echo $out;
		}else{
			echo 'no result found';
		}
		
	}
	
	public function dashboard(){
	if($this->data['logged_in']==true){
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/dashboard',$this->data);
	$this->load->view('templates/footer',$this->data);
	}
		else{
		redirect($this->login_url);	
		}
	}
		
	public function ad_posted(){
	if($this->data['logged_in']==true){
	$this->do_secureaction();
	$this->data['college_details']=$this->registration->college_data;
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/ad_posted',$this->data);
	$this->load->view('templates/footer',$this->data);
	}
	else{
	redirect($this->login_url);	
	}
		}
		
	public function check_profilestate(){
		
		
	}

	/*##### start of category_detail #########*/
public function category_detail(){
	if($this->input->get('college_details')){
		$table='college_details';
		$id=$this->input->get('college_details');
	}
	
	else if($this->input->get('admission')){
		$table='admission';
		$id=$this->input->get('admission');
	}
	else if($this->input->get('scholarship')){
		$table='scholarship';
		$id=$this->input->get('scholarship');
	}
	else if($this->input->get('vacancy')){
		$table='vacancy';
		$id=$this->input->get('vacancy');
	}
	else if($this->input->get('first_course')){
		$table='first_course';
		$id=$this->input->get('first_course');
	}
	else {
		redirect();
	}
$this->data['detail_info']=$this->registration->full_detail($table,$id);
	$this->load->view('templates/header',$this->data);
	$this->load->view('clients/category_detail',$this->data);
	$this->load->view('templates/footer',$this->data);

}
/*##### end of category_detail #########*/
		
	public function add_role(){
		
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
		
	$this->form_validation->set_rules('user_id', 'user ID', 'trim|required|xss_clean|'); 
	$this->form_validation->set_rules('user_role', 'user Role', 'trim|required|xss_clean|');
	
	// if the form validation is proved wrong then load the same form
	if($this->form_validation->run() == FALSE){
	$this->dashboard();
	return 0;
	}
	
	//else entry the data into the database
	if($this->registration->add_role($this->input->post('user_id'))){
	//redirect the user to second step registration on success	
	redirect($this->base_url.'finalreg');	
	}
		
	}
	
	public function finalreg(){
		
	if($this->data['logged_in']==true){
	if(!$this->registration->get_user_role($this->data['user_id'])){
		
	redirect('dashboard');
	}
	if($this->registration->get_college_basic_detail($this->data['user_id'])){
	$this->data['college_details']=$this->registration->college_data;
	}
	$this->data['user_type']=$this->registration->user_role;
	$this->get_countries();
	$this->get_states(153);
	$this->get_cities(2566);
	$this->data['countries']=$this->countries;
	$this->data['states']=$this->states;
	$this->data['cities']=$this->cities;
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/finalreg',$this->data);
	$this->load->view('templates/footer',$this->data);
	}
	else{
	redirect($this->login_url);	
	}	
		
	}
	
	public function final_reg(){
	
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
		
	$this->form_validation->set_rules('college_name', 'College', 'trim|required|xss_clean|'); 
	$this->form_validation->set_rules('street', 'Street', 'trim|required|xss_clean|');
	
	// if the form validation is proved wrong then load the same form
	if($this->form_validation->run() == FALSE){
	$this->finalreg();
	return 0;
	}
	
	//else entry the data into the database
	if($this->registration->add_college($this->data['user_id'])){
	//redirect the user to second step registration on success	
	redirect($this->base_url.'profile');	
	}
}



// public function home(){
// 	if(!$this->data['logged_in']==true){
// 	//If the user is not logged in
// 	redirect($this->login_url);	
// 	}
// 	//retrieve data to  count the records of service provider
// 	$this->data['count_results']=$this->registration->count_objects();

// 	$this->load->view('templates/header',$this->data);
// 	$this->load->view('clients/home',$this->data);
// 	$this->load->view('templates/footer',$this->data);
// }

// categories controller 
// public function categories(){
// 	$this->do_secureaction();
// 	$this->load->view('templates/header',$this->data);
// 	//$this->load->view('pages/profile',$this->data);
// 	$this->load->view('templates/footer',$this->data);
// }
public function profile(){
	//The page is secure

	$this->do_secureaction();
	$this->data['college_details']=$this->registration->college_data;
	// custom code to retrieve data from the ad_premium
	$this->data['ad_premium']=$this->registration->ad_premium();
	if($this->input->get("admission_id")){
			$id=$this->input->get("admission_id");

				//custom for edit admission page
			$this->data['admission_edit']=$this->registration->edit_admission($id);

			//print_r($this->data['admission_edit']);
		}
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/profile',$this->data);
	$this->load->view('templates/footer',$this->data);

	
	}

public function scholarship(){
	//The page is secure
	$this->do_secureaction();
	$this->data['college_details']=$this->registration->college_data;
	// custom code to retrieve data from the ad_premium
	$this->data['ad_premium']=$this->registration->ad_premium();
	if($this->input->get("scholarship_id")){
			$id=$this->input->get("scholarship_id");

				//custom for edit admission page
			$this->data['scholarship_edit']=$this->registration->edit_scholarship($id);
		}
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/scholarship',$this->data);
	$this->load->view('templates/footer',$this->data);	
	}

	public function course(){
	$this->do_secureaction();
	$this->data['check_course_data']=$this->registration->check_course();
	$this->data['ad_premium']=$this->registration->ad_premium();
	if($this->input->get("course_id")){
			$id=$this->input->get("course_id");

				//custom for edit admission page
			$this->data['course_edit']=$this->registration->edit_course($id);
			
		}


	$this->data['college_details']=$this->registration->college_data;
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/course',$this->data);
	$this->load->view('templates/footer',$this->data);
	//}
	

	}
public function mycourses(){
	$this->data['my_course']=array();
	//The page is secure
	$this->do_secureaction();
	//college details
	$this->data['college_details']=$this->registration->college_data;
	//get my admissions

	if($this->registration->get_my_courses($this->data['user_id'])){
	//create my admissions
	$this->data['my_course']=$this->registration->course_data;
	}
	//load page
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/mycourse',$this->data);
	$this->load->view('templates/footer',$this->data);
}
	
	public function myadmissions(){
	$this->data['my_admissions']=array();
	//The page is secure
	$this->do_secureaction();
	//college details
	$this->data['college_details']=$this->registration->college_data;
	//get my admissions
	if($this->registration->get_my_admissions($this->data['user_id'])){
	//create my admissions
	$this->data['my_admissions']=$this->registration->admission_data;
	}
	//load page
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/myadmissions',$this->data);
	$this->load->view('templates/footer',$this->data);
	}

public function myscholarships(){	
	$this->data['my_scholarship']=array();
	//The page is secure
	$this->do_secureaction();
	//college details
	$this->data['college_details']=$this->registration->college_data;
	//get my admissions
	if($this->registration->get_my_scholarships($this->data['user_id'])){
	//create my admissions
	$this->data['my_scholarship']=$this->registration->scholarship_data;
	}
	//load page
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/myscholarship',$this->data);
	$this->load->view('templates/footer',$this->data);
	
	}
	// provider menu vacancies options ***************************>
public function myvacancies(){
	$this->data['my_vacancy']=array();
	//The page is secure
	$this->do_secureaction();
	//college details
	$this->data['college_details']=$this->registration->college_data;
	//die("controller line 268");
	if($this->registration->get_my_vacancies($this->data['user_id'])){
	//create my admissions
	$this->data['my_vacancy']=$this->registration->vacancy_data;
	}
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/myvacancy',$this->data);
	$this->load->view('templates/footer',$this->data);

	//retrieve data from vacancies
	// 
//print_r($this->data['my_vacancy']);
	
}
	// end of provider menu vacancies options*************** >

public function vacancy(){
	//The page is secure
	$this->do_secureaction();
	$this->data['college_details']=$this->registration->college_data;
	// custom code to retrieve data from the ad_premium
	$this->data['ad_premium']=$this->registration->ad_premium();
	if($this->input->get("vacancy_id")){
			$id=$this->input->get("vacancy_id");

				//custom for edit admission page
			$this->data['vacancy_edit']=$this->registration->edit_vacancy($id);
		}
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/vacancy',$this->data);
	$this->load->view('templates/footer',$this->data);	
	}


	
	public function do_secureaction(){
		
	if(!$this->data['logged_in']==true){
	//If the user is not logged in
	redirect($this->login_url);	
	}
	//If user role is not defined, redirect them to user role define section	
	if(!$this->registration->get_user_role($this->data['user_id'])){
	redirect('dashboard');
	}
	
	//if it is impossible to get college details
	if(!$this->registration->get_college_basic_detail($this->data['user_id'])){	
	redirect('finalreg');
	}		
	}
	
	public function add_admission(){
	//When they are not logged in , redirect them to the login url
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
		
	//set the validation rules	
	echo $this->input->post('sms_email');//die();
	$this->form_validation->set_rules('fee', 'Total Fee', 'trim|required|xss_clean|numeric');
	$this->form_validation->set_rules('admission_title', 'Admission Title', 'trim|required|xss_clean');
	$this->form_validation->set_rules('description', 'Descriptions', 'trim|required|xss_clean');

	
	// if the form validation is proved wrong then load the same form
	if($this->form_validation->run() == FALSE){
	$this->profile();
	return 0;
	}
	
	$file_name=""; 
	if(strlen($_FILES["userfile"]['name'])>0){
	$this->data['userfile'] = $this->do_upload();
	if($this->file_upload==0){
	$this->profile();
	return 0;	
	}
	$file_name=$this->data['file_name'];
	}

	// multiple files
	  $data = array();
	  $file_doc1=$this->upload_multiple_files();

	  if($file_doc1){
	  	$file_doc=$file_doc1;
	  }

	//else entry the data into the database
	if($this->registration->add_admission($this->data['user_id'],$file_name,$file_doc)){
	//redirect the user to success page	
	$this->ad_posted();	
	}	
	}

// custom code for scholarship form
	public function add_scholarship(){
	//When they are not logged in , redirect them to the login url
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
		
	//set the validation rules	
	//$this->form_validation->set_rules('fee', 'Total Fee', 'trim|required|xss_clean|numeric');
	$this->form_validation->set_rules('scholarship_title', 'Scholarship Title', 'trim|required|xss_clean');
	$this->form_validation->set_rules('scholarship_detail', 'Scholarship details', 'trim|required|xss_clean');
	$this->form_validation->set_rules('requirement', 'Scholarship requirements', 'trim|required|xss_clean');
	

	
	// if the form validation is proved wrong then load the same form
	if($this->form_validation->run() == FALSE){
	$this->scholarship();
	return 0;
	}


	$file_name="";
	if(strlen($_FILES["userfile"]['name'])>0){
	$this->data['userfile'] = $this->do_upload();
	if($this->file_upload==0){
	$this->profile();
	return 0;	
	}
	$file_name=$this->data['file_name'];
	}
	//else entry the data into the database


	if($this->registration->add_scholarship($this->data['user_id'],$file_name)){
	//redirect the user to success page	
	$this->ad_posted();	
	}	
	}

	// vacancy
	public function add_vacancy(){
	//When they are not logged in , redirect them to the login url
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
	//set the validation rules	
	$this->form_validation->set_rules('job_title', 'Job title', 'trim|required|xss_clean');
	$this->form_validation->set_rules('job_requirement', 'Job requirement', 'trim|required|xss_clean');
	// if the form validation is proved wrong then load the same form
	if($this->form_validation->run() == FALSE){
	$this->profile();
	return 0;
	}
	$file_name="";
	if(strlen($_FILES["userfile"]['name'])>0){
	$this->data['userfile'] = $this->do_upload();
	if($this->file_upload==0){
	$this->profile();
	return 0;	
	}
	$file_name=$this->data['file_name'];
	}


	// multiple files
	  $data = array();
	  $file_doc1=$this->upload_multiple_files();

	  if($file_doc1){
	  	$file_doc=$file_doc1;
	  }
	  die(print_r($file_doc));

	//else entry the data into the database
	if($this->registration->add_vacancy($this->data['user_id'],$file_name,$file_doc)){
	//redirect the user to success page	
	$this->ad_posted();	
	}
		
	}

public function add_course_next($id_ref){
	if(empty($id_ref)){
		redirect(base_url('course'));
	}
	if($this->data['logged_in']==true){
	$this->do_secureaction();
	$this->data['college_details']=$this->registration->college_data;
	$arr_ref=array('ref_id'=>$id_ref);
	$this->data['ref_id']=$arr_ref;
$this->data['ad_premium']=$this->registration->ad_premium();
	$this->data['course_edit']=$this->registration->edit_course_next($id_ref);
	

	$this->data['course_title']=$this->registration->course_title();
	$this->load->view('templates/header',$this->data);
	$this->load->view('pages/course_next',$this->data);
	$this->load->view('templates/footer',$this->data);

	}	
	
}

public function add_course_second(){
	//When they are not logged in , redirect them to the login url
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
	//$this->form_validation->set_rules('fee', 'Total Fee', 'trim|required|xss_clean|numeric');
	$this->form_validation->set_rules('subtitle', 'Course subtitle', 'trim|required|xss_clean');

	// if the form validation is proved wrong then load the same form
	if($this->form_validation->run() == FALSE){
	$this->course();
	return 0;
	}

	$file_name="";
	
	if(strlen($_FILES["userfile"]['name'])>0){
	$this->data['userfile'] = $this->do_upload();
	if($this->file_upload==0){
	$this->profile();
	return 0;	
	}
	$file_name=$this->data['file_name'];
	}

	// multiple files
	  $data = array();
	  $file_doc1=$this->upload_multiple_files();

	  if($file_doc1){
	  	$file_doc=$file_doc1;
	  }

        if($this->registration->add_course_second($this->data['user_id'],$file_name,$file_doc)){
	//redirect the user to success page	
	$this->ad_posted();	
	}else{
		echo 'sorry';die();
	}

	


}

public function add_course(){
	//When they are not logged in , redirect them to the login url
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
	//set the validation rules	
	//$this->form_validation->set_rules('fee', 'Total Fee', 'trim|required|xss_clean|numeric');
	$this->form_validation->set_rules('course_name', 'Course name', 'trim|required|xss_clean');
	$this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
	
	// if the form validation is proved wrong then load the same form
	if($this->form_validation->run() == FALSE){
	$this->scholarship();
	return 0;
	}

	$file_name="";
	
	if(strlen($_FILES["userfile"]['name'])>0){
	$this->data['userfile'] = $this->do_upload();
	if($this->file_upload==0){
	$this->profile();
	return 0;	
	}
	$file_name=$this->data['file_name'];
	}
		$id12=$this->registration->add_course($this->data['user_id'],$file_name);
				if($id12){
				$this->add_course_next($id12);
				}
	
}

	
	
public function delete($table,$id){
	
//When they are not logged in , redirect them to the login url
	if($this->data['logged_in']!=true){
	redirect($this->login_url);
	}
//define table
if($table=='adm'){
$table='admission';	
}
else if($table=='course'){
	$table='first_course';

}
elseif($table=='pr_image'){
$table='product_images';
}
// custom code of mine
else if($table=='sch'){
	$table='scholarship';	
}
else if($table=='vacancy'){
	$table='vacancy';
}

else{
return 0;	
}
if($this->registration->delete($table,$id,$this->data['user_id'])){
if($this->input->is_ajax_request()){
echo json_encode(array('text'=>'deleted'));	
}
return 1;
}
if($this->input->is_ajax_request()){
echo json_encode(array('text'=>'Wrong Method'));	
}
return 0;
}

				
	private function is_logged_in(){	
	if($this->facebook_login->check_facebook_login($this->fb_code)){
		$this->data['profile_picture']=$this->facebook_login->profile_picture;
		$this->data['first_name']=$this->facebook_login->first_name;
		$this->data['last_name']=$this->facebook_login->last_name;
		$this->data['user_id']=$this->facebook_login->user_id;
		$this->data['gender']=$this->facebook_login->gender;
		return 1 ;	
		}
		
		else{
		
		return 0;
			
		}	
		
	}
		
		public function get_countries(){
			
	if($this->registration->get_countries()){
		
	if($this->input->is_ajax_request()){
	echo json_encode($this->registration->countries);
		}
		
		$this->countries=$this->registration->countries;	
		return 1;
		
	}	
	
}

public function get_states($country_id){
	
if($this->registration->get_states($country_id)){
		
	if($this->input->is_ajax_request()){
	echo json_encode($this->registration->states);
		}
		
		$this->states=$this->registration->states;	
		return 1;
		
	}	
	
}


public function get_cities($state_id){
	
if($this->registration->get_cities($state_id)){
		
	if($this->input->is_ajax_request()){
	echo json_encode($this->registration->cities);
		}
		
		$this->cities=$this->registration->cities;	
		return 1;
		
	}	
	
}


private function do_upload()
{
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '500';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	$new_name = time().'sajilo_education';
	$config['file_name'] = $new_name;
    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}

// client site controller ***********************************************************
public function get_categories(){
	//$ip1=gethostbyname(trim(`hostname`));
 // $ip = $_SERVER['REMOTE_ADDR'];
 
 //    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
 //        $ip = $_SERVER['HTTP_CLIENT_IP'];
 //    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 //        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 //    }
   // $t=time();
/*	$d=date("Y-M-D");
	echo $d;die();
 $data1=$this->registration->check_visit($ip1,$t);
*/
//echo $ip;
//echo $t=time();
//echo(date("Y-m-d",$t));
//die();

/*$var=$this->registration->check_visit();
die();
if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
   echo $msg = "You have visited this page ".  $_SESSION['counter'];
   echo $msg .= "in this session.";
   
*/


// $this->session->set_userdata('some_name', 'some_value');

	if($this->input->get('type')){
		$table='college_details';
		$row_field=$this->input->get('type');
	}else if($this->input->get('service')){
		$table=$this->input->get('service');
		$row_field='';
	}
	else{
		redirect();
	}
	$this->data['category']=$this->registration->get_category($table,$row_field);
	$this->load->view('templates/header',$this->data);
	$this->load->view('clients/categories',$this->data);
	$this->load->view('templates/footer',$this->data);
}
// ***********************************************************************************



// this is for the pdf and word file upload
public function upload_multiple_files(){
	if($_FILES['upload_doc']['name']){
		$filesCount = count($_FILES['upload_doc']['name']);
           for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['upload_doc']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['upload_doc']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['upload_doc']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['upload_doc']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['upload_doc']['size'][$i];

                $uploadPath = 'uploads/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'pdf|docx|txt|doc|pptx|ppt';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['upload_file'] = $fileData['file_name'];
                    // $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    // $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            if(!empty($uploadData)){
                return $uploadData;
            }

}else{
	return 0;
	
}
       
         
    }

    public function send_user_message_control(){
    	$this->registration->post_client_message();
    	$this->_status['message'] = 'Your message has been sent successfully.'; 
        $this->_status['status'] = "success"; 
        echo json_encode($this->_status); 

    }
    public function count_unique_visit(){
    	$id = $this->input->post('id');
    	$data['count'] = $this->registration->post_count_unique_visit($id);  
    	echo $data['count'];
    	//print_r($data['count']);


    	

	
    }

		
		}

