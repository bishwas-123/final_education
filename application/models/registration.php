<?php

class Registration extends CI_Model {

	public function __construct()
	{
		//Load the database		
		$this->load->database();
	}
	
	//Add the role right after the registration or update the role later with this function name
	public function add_role($user){
	//define role data
	$role_data=array('user_id'=>$user,'user_type'=>$this->input->post('user_role')); 
	//check database for any result if exists
	if(!$this->user_exists($user))
		{
	//Insert data into database if there is no data
		if($this->db->insert('user_type', $role_data)){
			
		return TRUE;
		}	
		}
		//end if
	else{
		//Update the database if the data is already there with same user
	$where = array('user_id'=>$user);
		 
	if($this->db->update('user_type', $role_data, $where)){
			
		return TRUE;
	}
	//end if
	}
	//end else if
	}
	//end function
	
	//check if user exists
	private function user_exists($user){
	

	$sql = "SELECT id FROM user_type WHERE user_id=?"; 
	
	$query=$this->db->query($sql, array($user));
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	return true;
		
	}
	
	//get user role to know where to redirect
	public function get_user_role($user){
	
	$sql = "SELECT user_type FROM user_type WHERE user_id=?"; 
	
	$query=$this->db->query($sql, array($user));
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	$this->user_role=$query->row();
	return true;
	}
	
	//get user role to know where to redirect
	public function get_student_profile($user){
	
	$sql = "SELECT user_type FROM user_type WHERE user_id=?"; 
	
	$query=$this->db->query($sql, array($user));
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	$this->user_role=$query->row();
	return true;
	}
	
	public function add_college($user_id){
		
		//define role data
	$college_data=array('user_id'=>$user_id,'college_name'=>$this->input->post('college_name'),'college_country'=>$this->input->post('country'),'college_city'=>$this->input->post('city'),'college_zone'=>$this->input->post('state'),'college_street'=>$this->input->post('street'),'college_type'=>$this->input->post('college_type')); 
	//check database for any result if exists
	if(!$this->get_college_basic_detail($user_id))
		{
	//Insert data into database if there is no data
		if($this->db->insert('college_details', $college_data)){
			
		return TRUE;
		}	
		}
		//end if
	else{
		//Update the database if the data is already there with same user
	$where = array('user_id'=>$user);
		 
	if($this->db->update('college_details', $college_data, $where)){
			
		return TRUE;
	}
	//end if
	}
	//end else if		
	}


public function check_course(){
	$id1=$this->data["user_id"];
	$query = $this->db->query("SELECT * FROM first_course WHERE user_id=$id1");
	return $query->result_array();

}


public function add_course($user_id,$pic){


	$first_course=array('course_name'=>$this->input->post('course_name'),
	'user_id'=>$this->data['user_id'],
	'cover_photo'=>$pic,
	'category'=>$this->input->post('category'),  
	'description'=>$this->input->post('description'), 
	'url'=>$this->input->post('youtube_url'),
	'ad_premium'=>$this->input->post('ad_system'),
	'email_alert'=>$this->input->post('email_alert'),
	'posted_date'=>time()); 

	//check database for any result if exists
	if($this->input->post('course_id')==0)
		{
	//Insert data into database if there is no data
			$this->db->insert('first_course', $first_course);
			$insert_id=$this->db->insert_id();
				return $insert_id;	

			
		}

		//end if
	else{
		
	$first_course1=array('course_name'=>$this->input->post('course_name'),
	
	'cover_photo'=>$pic,
	'category'=>$this->input->post('category'),  
	'description'=>$this->input->post('description'), 
	'url'=>$this->input->post('youtube_url'),
	'ad_premium'=>$this->input->post('ad_system'),
	'email_alert'=>$this->input->post('email_alert')); 

		//Update the database if the data is already there with same user
	$where = array('user_id'=>$user_id,'id'=>$this->input->post('course_id'));
		 
	if($this->db->update('first_course', $first_course1, $where)){
			
		return $this->input->post('course_id');
	}
	//end if
	}
}
public function add_course_second($user_id,$pic,$files=array()){

	$file1=json_encode($files);

	$second_course=array('subtitle'=>$this->input->post('subtitle'),
	'user_id'=>$this->data['user_id'],
	'course_id'=>$this->input->post('ref_id'),
	'photo'=>$pic,
	'details'=>$this->input->post('course_details'),  
	'url'=>$this->input->post('youtube_url'), 
	'upload_file1'=>$file1,
	'email_alert'=>$this->input->post('email_alert'),
	'posted_date'=>time()); 
$check_action=$this->input->post('update_course_next');
	


if($check_action==0)
		{
			
	//Insert data into database if there is no data
		if($this->db->insert('second_course', $second_course)){
		return TRUE;
		}	
		}else{
					//Update the database if the data is already there with same user
	$where = array('user_id'=>$user_id,'course_id'=>$this->input->post('ref_id'));
		 
	if($this->db->update('second_course', $second_course, $where)){
			
		return TRUE;
	}
	//end if
		}
		
		//end if
	
		if($this->input->post('update_course_next')){
			
		}


}



public function add_scholarship($user_id,$pic){

		
//define admission data

	$scholarship_data=array('scholarship_title'=>$this->input->post('scholarship_title'),
	
	'scholarship_type'=>$this->input->post('scholarship_type'),
	'scholarship_detail'=>$this->input->post('scholarship_detail'),  
	'no_of_seats'=>$this->input->post('total_no_of_seats'), 
	'cover_photo'=>$pic,
	'requirement'=>$this->input->post('requirement'),
	'scholarship_for'=>$this->input->post('scholarship_for'),
	'ad_system'=>$this->input->post('ad_system'),
	'user_id'=>$user_id,
	'email_alert'=>$this->input->post('sms_email'),
	'posted_date'=>time()); 

	//check database for any result if exists
	if($this->input->post('scholarship_id')==0)
		{
	//Insert data into database if there is no data
		if($this->db->insert('scholarship', $scholarship_data)){
		return TRUE;
		}	
		}
		//end if
	else{
		
		$scholarship_data=array('scholarship_title'=>$this->input->post('scholarship_title'),
	
	'scholarship_type'=>$this->input->post('scholarship_type'),
	'scholarship_detail'=>$this->input->post('scholarship_detail'),  
	'no_of_seats'=>$this->input->post('total_no_of_seats'), 
	'cover_photo'=>$pic,
	'requirement'=>$this->input->post('requirement'),
	'scholarship_for'=>$this->input->post('scholarship_for'),
	'ad_system'=>$this->input->post('ad_system'),
	'user_id'=>$user_id,
	'email_alert'=>$this->input->post('sms_email')); 

		//Update the database if the data is already there with same user
	$where = array('user_id'=>$user_id,'id'=>$this->input->post('scholarship_id'));
		 
	if($this->db->update('scholarship', $scholarship_data, $where)){
			
		return TRUE;
	}
	//end if
	}
	//end else if
		
		
	}
	// vacancy function to insert data in DB******************************
	public function add_vacancy($u_id,$pic,$files=array()){
		$file1=json_encode($files);
		$vacancy_data=array(
			'user_id'=>$u_id,
			'job_title'=>$this->input->post('job_title'),'job_category'=>$this->input->post('job_category'),'requirement'=>$this->input->post('job_requirement'),'cover_photo'=>$pic,'skills'=>$this->input->post('job_skill'),'edu_level'=>$this->input->post('edu_level'),'exp_field'=>$this->input->post('exe_field'),'ex_period_yrs'=>$this->input->post('exp_yrs'),
			'ex_period_months'=>$this->input->post('exp_months'),'salary'=>$this->input->post('salary'),'nature_of_service'=>$this->input->post('nature_of_service'),'description'=>$this->input->post('description'),'dead_line'=>$this->input->post('dead_line'),'document'=>$this->input->post('document'),'additional_documents'=>$file1,'posted_date'=>time());
if($this->input->post('vacancy_id')==0){
	$this->db->insert('vacancy',$vacancy_data);
	return TRUE;
}else{
	$vacancy_data=array(
		'user_id'=>$u_id,
			'job_title'=>$this->input->post('job_title'),'job_category'=>$this->input->post('job_category'),'requirement'=>$this->input->post('job_requirement'),'cover_photo'=>$pic,'skills'=>$this->input->post('job_skill'),'edu_level'=>$this->input->post('edu_level'),'exp_field'=>$this->input->post('exe_field'),'ex_period_yrs'=>$this->input->post('exp_yrs'),
			'ex_period_months'=>$this->input->post('exp_months'),'salary'=>$this->input->post('salary'),'nature_of_service'=>$this->input->post('nature_of_service'),'description'=>$this->input->post('description'),'dead_line'=>$this->input->post('dead_line'),'document'=>$this->input->post('document'),'additional_documents'=>$file1);
		$where = array('user_id'=>$user_id,'id'=>$this->input->post('vacancy_id'));
		$this->db->update('vacancy',$vacancy_data,$where);
		return TRUE;

}


	}
// end of vacancy function in model ********************************************





	
	public function add_admission($user_id,$pic,$files=array()){
		$file1=json_encode($files);
//define admission data
$admission_data=array('entrance_exam'=>$this->input->post('entrance_exam'),'admission_title'=>$this->input->post('admission_title'),'cover_photo'=>$pic,'upload_file1'=>$file1,'scholarships'=>$this->input->post('scholarships'),'total_fee'=>$this->input->post('fee'),'category'=>$this->input->post('category'),'payment'=>$this->input->post('payment_system'),'description'=>$this->input->post('description'),'ad_system'=>$this->input->post('ad_system'),'user_id'=>$user_id,'email_alert'=>$this->input->post('sms_email'),'posted_date'=>time()); 
	//check database for any result if exists


	if($this->input->post('admission_id')==0)
		{
	//Insert data into database if there is no data
		if($this->db->insert('admission', $admission_data)){
		return TRUE;
		}	
		}
		//end if
	else{
		
		$admission_data=array('entrance_exam'=>$this->input->post('entrance_exam'),'admission_title'=>$this->input->post('admission_title'),'cover_photo'=>$pic,'upload_file1'=>$file1,'scholarships'=>$this->input->post('scholarships'),'total_fee'=>$this->input->post('fee'),'category'=>$this->input->post('category'),'payment'=>$this->input->post('payment_system'),'description'=>$this->input->post('description'),'ad_system'=>$this->input->post('ad_system'),'user_id'=>$user_id,'email_alert'=>$this->input->post('sms_email')); 

		//Update the database if the data is already there with same user
	$where = array('user_id'=>$user_id,'id'=>$this->input->post('admission_id'));
		 
	if($this->db->update('admission', $admission_data, $where)){
			
		return TRUE;
	}
	//end if
	}
	//end else if
		
		
	}
	
	//get college basic details
	public function get_college_basic_detail($user){
	
	$sql = "SELECT college_details.college_name, college_details.college_city,college_details.college_zone,college_details.college_street,college_details.college_number,college_details.college_url,college_details.college_email,college_details.facebook_page,college_details.twitter_page,college_details.google_page,college_details.college_logo,college_details.college_type,cities.name as city,cities.id as city_id,countries.name as country,countries.id as country_id, states.name as state, states.id as state_id FROM college_details LEFT JOIN cities ON cities.id=college_details.college_city LEFT JOIN states ON states.id=college_details.college_zone LEFT JOIN countries ON countries.id=college_details.college_country WHERE college_details.user_id=?"; 
	
	$query=$this->db->query($sql, array($user));
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	$this->college_data=$query->row();
	return true;
	}

	public function course_title(){
	$this->db->order_by('id','desc');

		$this->db->order_by("id","desc");$this->db->select('*');
		$this->db->from('first_course');
		$query_course=$this->db->get();
		return $query_course->result_array();
	}



// ******************************************************
	//get college basic details
	public function get_my_courses($user,$id=0){
	
	if($id==0){
	$sql = "SELECT id,course_name,cover_photo,category,description,url,ad_premium,posted_date,email_alert FROM first_course WHERE user_id=?"; 
	}
	else{
	$sql = "SELECT id,course_name,cover_photo,category,description,url,ad_premium,posted_date,email_alert FROM first_course WHERE user_id=? AND id=?";	
	}
	
	$query=$this->db->query($sql, array($user,$id));
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	$this->course_data=$query->result_array();
	$this->course_single_data=$query->row();
	return true;
	}
	// ****************************************************








	
	
	//get college basic details
	public function get_my_admissions($user,$id=0){
	
	if($id==0){
	$sql = "SELECT id,admission_title,cover_photo,scholarships,total_fee,category,payment,description,ad_system,entrance_exam,posted_date,email_alert FROM admission WHERE user_id=?"; 
	}
	else{
	$sql = "SELECT admission_title,cover_photo,scholarships,total_fee,category,payment,description,ad_system,entrance_exam,posted_date,email_alert FROM admission WHERE user_id=? AND id=?";	
	}
	
	$query=$this->db->query($sql, array($user,$id));
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	$this->admission_data=$query->result_array();
	$this->admission_single_data=$query->row();
	return true;
	}

	//get college basic details
	public function get_my_scholarships($user,$id=0){
	
	if($id==0){
	$sql = "SELECT id,scholarship_title,scholarship_type,scholarship_detail,cover_photo,no_of_seats,requirement,scholarship_for,ad_system,posted_date,email_alert FROM scholarship WHERE user_id=?"; 
	}
	else{
	$sql = "SELECT scholarship_title,scholarship_type,scholarship_detail,cover_photo,no_of_seats,requirement,scholarship_for,ad_system,posted_date,email_alert FROM scholarship WHERE user_id=? AND id=?";	
	}
	$query=$this->db->query($sql, array($user,$id));
	
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	$this->scholarship_data=$query->result_array();
	$this->scholarship_single_data=$query->row();
	return true;
	}


	public function get_my_vacancies($user,$id=0){
	
	if($id==0){
	$sql = "SELECT id,job_title,job_category,requirement,cover_photo,skills,edu_level,exp_field,ex_period_yrs,ex_period_months,salary,nature_of_service,description,dead_line,document,additional_documents,posted_date,email_alert FROM vacancy WHERE user_id=?"; 
	}
	else{
	$sql = "SELECT job_title,job_category,requirement,cover_photo,skills,edu_level,exp_field,ex_period_yrs,ex_period_months,salary,nature_of_service,description,dead_line,document,additional_documents,posted_date,email_alert FROM vacancy WHERE user_id=?";	
	}
	
	$query=$this->db->query($sql, array($user,$id));
							
	if ($query->num_rows() == 0){
		
	return false;
	
	}
	
	$this->vacancy_data=$query->result_array();
	$this->vacancy_single_data=$query->row();
	return true;
	}



	
	public function get_countries(){
		
	$this->db->select('id,name');
	
	$query = $this->db->get('countries');
						
	if ($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
$this->countries=$query->result_array();
return TRUE;	
		}
}


public function get_states($country_id){
	
$this->db->select('id,name');

$this->db->where('country_id',$country_id);

$query = $this->db->get('states');
						
	if ($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
$this->states=$query->result_array();
return TRUE;	
		}
}

public function get_cities($state_id){
	
$this->db->select('id,name');

$this->db->where('state_id',$state_id);

$query = $this->db->get('cities');
						
	if ($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
$this->cities=$query->result_array();
return TRUE;	
		}
}


public function delete($table,$id,$user_id){

	
if($table=='first_course'){
	if($this->db->delete('second_course',array('course_id' => $id,'user_id' => $user_id))){
		$this->db->delete($table,array('id'=>$id,'user_id'=>$user_id));
		return 1;
	}else{
		$this->db->delete($table,array('id'=>$id,'user_id'=>$user_id));
		return 1;
	}

}

		if($this->db->delete($table,array('id' => $id,'user_id' => $user_id))){
	
		
		// extra check ************************************************8
			// if($table=='first_course'){
			// 	$this->db->delete('second_course',array('course_id' => $id,'user_id' => $user_id));

			// }
			return 1;
		}

		return 0;
}
	
	public function registration_first_step_admin(){
					
			//Collect registration data and prepare to send in an email for user to confirm
			$first_step_register = array(
               'user_id' => $this->user_id,
               'email' => $this->email,
               'username' => $this->input->post('username'),
			   'full_name'=>$this->name,
			   'password'=>$this->encrypt_str($this->rand_pass),
			   'confirmation'=>1,
			   'admin_activation'=>1,
			   'creator'=>'admin'
            );
			
			//Insert data into database
			if($this->db->insert('user_reg', $first_step_register)){
			
			return TRUE;

		}
		return FALSE;
	}
	
	//encrypting password or cookie
	public function encrypt_str($str){
	
	return crypt($str,$this->config->item('encryption_key'));	
}

	
	public function confirm_account(){
	
	//Validate confirmation code supplied 
	$this->form_validation->set_rules('confirmation_check', 'Confirmation Code', 'trim|required|callback_confirmation_check');
	
	if($this->form_validation->run()==TRUE){
	
	return TRUE;	
	
	}
	return FALSE;
	}
	
	public function update_pic_pass($user_id,$file){
			
			$data = array('password' =>crypt($this->input->post('pass'),'$5$rounds=5000$usemyfavouriteclubisbarcelona$'), 'pro_pic' => $file);
			
			$where = array('user_id'=>$user_id); 
			
			//Update profile picture
			if($this->db->update('user_reg', $data, $where)){
			
			return TRUE;	
			
			}
			
			else{
				
						return FALSE;		
				
			}
	}
	
	
	public function check_login_combination($username,$password){
		
	$sql = "SELECT email,user_id,full_name,password FROM user_reg WHERE username=? AND creator=''"; 
	
	$query=$this->db->query($sql, array($username));
						
	if ($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
			
		$row=$query->row();
		
		if(crypt($password, $row->password) == $row->password){
			
			$this->user_first_data=$query->row();
			return TRUE;
			
		}
		
		else{
			
			return FALSE;
			
		}
		
	}
	
	}
	
	
	
	public function check_login_combination_admin($username,$password){
		
	$sql = "SELECT email,user_id,full_name,password FROM user_reg WHERE username=? AND creator='admin'"; 
	
	$query=$this->db->query($sql, array($username));
						
	if ($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
			
		$row=$query->row();
		
		if(crypt($password, $row->password) == $row->password){
			
			$this->user_first_data=$query->row();
			return TRUE;
			
		}
		
		else{
			
			return FALSE;
			
		}
		
	}
	
	}
	
	
	public function confirmation_check1($str){
		
	$sql = "SELECT user_id,email,full_name FROM user_reg WHERE confirmation=? AND confirmation!=?"; 
	
	$query=$this->db->query($sql, array($str,5));
						
	if($query->num_rows() == 0)
		{
			return FALSE;
		}
		$this->user_first_data=$query->row();
							
		$data1 = array('confirmation' =>1);
		
		$where = array('confirmation'=>"$str"); 
		
		$res = $this->db->update('user_reg', $data1, $where);
				
		return TRUE;
			
	}
	
	public function get_user_reg_data($user_id){
		
	$sql = "SELECT full_name,email,username,verified FROM user_reg WHERE user_id=?"; 
	
	$query=$this->db->query($sql, array($user_id));
						
	if($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
		$this->user_reg_data=$query->row();
		return 1;
		}
		
	}
	
	public function update_token($token,$user_id){
	
	$data = array('token' =>$token,'login_date_time' =>time());
			
	$where = array('user_id'=>$user_id); 
			
			//Update profile picture
	if($this->db->update('user_reg', $data, $where)){	
			
	return 1;
		
	}	
	return 0;	
	}
	
	public function logged_in($user_id,$cookie_token){
		
	$sql = "SELECT token FROM user_reg WHERE user_id=? AND creator=''"; 
	
	$query=$this->db->query($sql, array($user_id));
						
	if($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
		$row=$query->row();
		if(crypt($row->token, $cookie_token) == $cookie_token){					
		return 1;			
		}
		elseif(crypt($row->token,$_SESSION['session_key'])==$_SESSION['session_key']){
			return 1;	
		}
			return 0;	
	}
	}
	
	public function logged_in_admin($user_id,$cookie_token){
		
	$sql = "SELECT token FROM user_reg WHERE user_id=? AND creator='admin'"; 
	
	$query=$this->db->query($sql, array($user_id));
						
	if($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
		$row=$query->row();
		if(crypt($row->token, $cookie_token) == $cookie_token){					
		return 1;			
		}
		elseif(crypt($row->token,$_SESSION['session_key'])==$_SESSION['session_key']){
			return 1;	
		}
			return 0;	
	}
	}

public function check_nz_email($email){
$domain = substr($email, 0, strpos($email, "."));
$tld = substr($email, strpos($email, "."), (strlen($email) - strlen($domain)));
if($tld=='.co.nz'){	
return 1;	
}
return 0;
}

public function registration_final($user_id){
	
	$membership='basic';
	
	if($this->get_user_reg_data($user_id) && $this->check_nz_email($this->user_reg_data->email)){
	
	$membership='silver';
		
	}
	
	$one_year=time() + ((2592000/30)*365);
	
	//Collect membership data 
			$membership_data = array(
               'user_id' => $user_id,
               'platform' => $this->input->post('platform'),
               'membership' => $membership,
			   'expires_on' => $one_year,
            );
			
			//Collect personal data 
			$personal_data = array(
               'user_id' => $user_id,
               'dob' => $this->input->post('birth_year').'-'.$this->input->post('birth_month').'-'.$this->input->post('birth_day'),
               'gender' => $this->input->post('gender'),
			   'looking_for' => $this->input->post('looking_for'),
			   'country' => $this->input->post('country'),
			   'city' => $this->input->post('city'),
			   'state' => $this->input->post('state'),
            );
			
			//Collect personal data 
			$more_data = array(
               'user_id' => $user_id,
            );
				
			//Insert data into database
			if($this->db->insert('membership_type', $membership_data) && $this->db->insert('user_personal_info', $personal_data) && $this->db->insert('user_more_info', $more_data)){
			return TRUE;
		}
		return FALSE;
}

public function get_wall_feed($user_id,$from,$total_status){
	
	$sql="SELECT COUNT('user_status.id') as total_status FROM user_status,friends WHERE ((user_status.user_id=friends.reciever_id AND friends.sender_id=? AND friendship_status='2') OR (user_status.user_id=friends.sender_id AND friends.reciever_id=? AND friendship_status='2') OR user_status.user_id=?)";
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id));
	
	$row=$query->row();
	
	$this->total_status=$row->total_status;
	
	$sql = "SELECT user_status.status_type,user_status.timestamp,user_status.user_id,user_status.id as status_id,user_status.status,user_status.thumbnail,user_status.large_image,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender FROM user_status,user_reg,friends,user_personal_info WHERE user_reg.user_id=user_status.user_id AND user_personal_info.user_id=user_status.user_id AND ((user_status.user_id=friends.reciever_id AND friends.sender_id=? AND friendship_status='2') OR (user_status.user_id=friends.sender_id AND friends.reciever_id=? AND friendship_status='2') OR user_status.user_id=?) GROUP BY user_status.id ORDER BY user_status.id DESC LIMIT $from,$total_status"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id));
						
	if($query->num_rows() == 0)
		{
		$this->wall_feed=$query->result_array();
		array_push($this->wall_feed,array('total_rows'=>$this->total_status,'start_from'=>$from,'total_group'=>$total_status));
		return FALSE;
		}
		$this->wall_feed=$query->result_array();
		array_push($this->wall_feed,array('total_rows'=>$this->total_status,'start_from'=>$from,'total_group'=>$total_status));
		return 1;
}

public function post_status($user_id){
	
	//Validate confirmation code supplied 
	$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
	
	if($this->form_validation->run()==TRUE){
	//Collect membership data 
			$status_data = array(
               'user_id' => $user_id,
               'status_type' => 'status',
               'status' => $this->input->post('message'),
			   'timestamp' =>$this->session->userdata('last_activity')
            );
			
			//Insert data into database
			if($this->db->insert('user_status', $status_data)){
			$insert_id=$this->db->insert_id();
			$status=$this->input->post('message');
			$this->status=array('insert_id'=>$insert_id,'status'=>$status);
			return TRUE;
		}
		return FALSE;
	}
	return FALSE;
}

public function get_single_post($stat_id,$user_id){

$sql = "SELECT user_status.status_type,user_status.timestamp,user_status.user_id,user_status.id as status_id,user_status.status,user_status.thumbnail,user_status.large_image,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender FROM user_status,user_reg,friends,user_personal_info WHERE user_reg.user_id=user_status.user_id AND user_personal_info.user_id=user_status.user_id AND ((user_status.user_id=friends.reciever_id AND friends.sender_id=? AND friendship_status='2') OR (user_status.user_id=friends.sender_id AND friends.reciever_id=? AND friendship_status='2') OR user_status.user_id=?) AND user_status.id='$stat_id' ORDER BY user_status.id DESC"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id));
						
	if($query->num_rows() == 0)
		{
		$this->single_post=$query->result_array();
		return 0;
		}
		$this->single_post=$query->result_array();
		return 1;		
}


public function post_photo_status($user_id,$img,$status){
	
	//Collect membership data 
			$status_data = array(
               'user_id' => $user_id,
               'status_type' => 'photo',
               'status' => $status,
			   'thumbnail' => $img,
			   'timestamp' =>time()
            );
			
			//Insert data into database
			if($this->db->insert('user_status', $status_data)){
			$insert_id=$this->db->insert_id();
			$status=$this->input->post('message');
			$this->status=array('insert_id'=>$insert_id,'status'=>$status,'thumbnail'=>$img);
			return TRUE;
		}
		return FALSE;
}


public function update_comments($status_id,$user_id){
	
	//Validate confirmation code supplied 
	$this->form_validation->set_rules('comment', 'Comment', 'trim|required|xss_clean');
	
	if($this->form_validation->run()==TRUE){
	//Collect membership data 
			$comment_data = array(
               'user_id' => $user_id,
               'status_id' => $status_id,
			   'comment'=>$this->input->post('comment'),
			   'timestamp' =>time()
            );
			
			//Insert data into database
			if($this->db->insert('user_comments', $comment_data)){
			$insert_id=$this->db->insert_id();
			$comment=$this->input->post('comment');
			$this->comment=array('insert_id'=>$insert_id,'comment'=>$comment);
			return TRUE;
		}
		return FALSE;
	}
	return FALSE;
}


public function get_likes($status_id,$user_id){
	
	$sql = "SELECT user_id FROM user_likes WHERE status_id=?"; 
	
	$query=$this->db->query($sql, array($status_id));
						
	if($query->num_rows() == 0)
		{
		$this->text='Like';
		$this->total_likes=0;	
		return true;
		}
		$this->total_likes=$query->num_rows();
		$array=$query->result_array();
		if($this->is_in_array($array,0,$user_id)){
		$this->text='Unlike';	
		}
		else{
		$this->text='Like';	
		}
		return 1;
}


public function get_comments($status_id,$user_id){
	
	$sql = "SELECT user_comments.user_id,user_comments.comment,user_comments.timestamp,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture FROM user_comments,user_reg,user_personal_info WHERE status_id=? AND user_reg.user_id=user_comments.user_id AND user_personal_info.user_id=user_comments.user_id GROUP BY user_comments.id"; 
	
	$query=$this->db->query($sql, array($status_id));
						
	if($query->num_rows() == 0)
		{
		$this->total_comments=0;	
		$this->comments=array();
		return true;
		}
		$this->total_comments=$query->num_rows();
		$this->comments=$query->result_array();	
		return 1;
}


public function is_in_array($array, $key, $key_value){
      $within_array = false;
      foreach( $array as $k=>$v ){
        if( is_array($v) ){
            $within_array = $this->is_in_array($v, $key, $key_value);
            if( $within_array == true ){
                break;
            }
        } else {
                if( $v == $key_value && $k == $key ){
                        $within_array = true;
                        break;
                }
        }
      }
      return $within_array;
}

public function update_likes($status_id,$user_id){
	
if($this->get_likes($status_id,$user_id)){
	
$sql = "SELECT id FROM user_likes WHERE status_id=? AND user_id=?"; 
	
	$query=$this->db->query($sql, array($status_id,$user_id));
						
	if($query->num_rows() == 0)
	{
		//Collect membership data 
			$like_data = array(
               'user_id' => $user_id,
               'status_id' => $status_id,
			   'timestamp' =>time()
            );
			
			//Insert data into database
			if($this->db->insert('user_likes', $like_data)){
				
				$this->text='Unlike';
				$this->total_likes=$this->total_likes+1; 
				return 1;
			}
		}
		
		if($this->db->delete('user_likes', array('user_id' => $user_id,'status_id' => $status_id))){
		$this->text='Like';
		$this->total_likes=$this->total_likes-1; 
		return 1;
		}
}
}

public function get_user_main_info($user_id){
	
$sql = "SELECT user_reg.full_name,user_reg.email,user_reg.username,user_reg.verified,user_reg.admin_activation,user_personal_info.gender,user_personal_info.profile_picture,membership_type.platform,membership_type.membership,membership_type.expires_on FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=? AND user_reg.user_id=user_personal_info.user_id AND user_reg.user_id=membership_type.user_id"; 
	
	$query=$this->db->query($sql, array($user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->user_main_info=$query->row();	
		return 1;	
	
}

public function get_user_full_info($user_id){
	
$sql = "SELECT user_reg.full_name,user_reg.username,user_reg.email,user_reg.login_date_time,user_reg.verified,user_personal_info.gender,user_personal_info.looking_for,user_personal_info.dob,TIMESTAMPDIFF(YEAR, user_personal_info.dob, CURRENT_DATE) AS age,user_personal_info.country,user_personal_info.city,user_personal_info.state,user_personal_info.profile_picture,user_more_info.height,user_more_info.weight,user_more_info.marital_status,user_more_info.kids,user_more_info.smoker,user_more_info.drunker,user_more_info.age_from,user_more_info.age_to,user_more_info.about_me,user_more_info.about_me_short FROM user_reg,user_personal_info,user_more_info WHERE user_reg.user_id=? AND user_reg.user_id=user_personal_info.user_id AND user_reg.user_id=user_more_info.user_id"; 
	
	$query=$this->db->query($sql, array($user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->user_full_info=$query->row();	
		return 1;	
	
}

public function get_user_photos($user_id){
		
$sql = "SELECT thumbnail,large_image,timestamp FROM user_gallery WHERE user_id=?"; 
	
	$query=$this->db->query($sql, array($user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->user_gallery=$query->result_array();	
		return 1;	
}

public function update_pro_pic($user_id,$pic){
	
	$data = array('profile_picture' =>$pic, 'user_id' => $user_id);
			
			$where = array('user_id'=>$user_id); 
			
			//Update profile picture
			if($this->db->update('user_personal_info', $data, $where)){
				
				return 1;
	
			}
			return 0;
}

public function insert_gallery($user_id,$pic){
		
//Collect membership data 
$gallery_data = array(
               'user_id' => $user_id,
               'thumbnail' => $pic,
			   'large_image'=>$pic,
			   'timestamp' =>time()
            );
			
			//Insert data into database
			if($this->db->insert('user_gallery', $gallery_data)){
			return 1;
			}
			return 0;
}

public function edit_profile($table,$field,$value,$user_id){
	
	$data = array($field =>$value);
			
	$where = array('user_id'=>$user_id); 
			
			//Update profile picture
	if($this->db->update($table, $data, $where)){
				
			return 1;
	
			}
			return 0;
	
	
}

public function get_all_friends($user_id,$page_number){
	
$sql = "SELECT user_reg.user_id,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='2' AND (friends.sender_id=? OR friends.reciever_id=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC"; 
	
$query=$this->db->query($sql, array($user_id,$user_id,$user_id));

$this->total_friends=$query->num_rows();
	
$sql = "SELECT user_reg.user_id,user_reg.full_name,user_reg.verified,user_reg.login_date_time,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='2' AND (friends.sender_id=? OR friends.reciever_id=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC LIMIT $page_number,10"; 
	
$query=$this->db->query($sql, array($user_id,$user_id,$user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->user_friends=$query->result_array();	
		return 1;	
	
}



public function get_friend_requests($user_id,$page_number){
	
$sql = "SELECT user_reg.user_id,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='0' AND (friends.sender_id!=? AND friends.reciever_id=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id));
	
	$this->total_friend_requests=$query->num_rows();
	
	$sql = "SELECT user_reg.user_id,user_reg.full_name,user_reg.verified,user_reg.login_date_time,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='0' AND (friends.sender_id!=? AND friends.reciever_id=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC LIMIT $page_number,10"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->user_friend_requests=$query->result_array();	
		return 1;	
	
}


public function get_blocked_friends($user_id,$page_number){
	
$sql = "SELECT user_reg.user_id,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='3' AND (friends.sender_id=? AND friends.reciever_id!=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id,$user_id));
	
		$this->total_blocked_friends=$query->num_rows();
		
		$sql = "SELECT user_reg.user_id,user_reg.full_name,user_reg.verified,user_reg.login_date_time,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='3' AND (friends.sender_id=? AND friends.reciever_id!=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC LIMIT $page_number,10"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id,$user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->user_blocked_friends=$query->result_array();	
		return 1;	
	
}

public function get_sent_requests($user_id,$page_number){
	
$sql = "SELECT user_reg.user_id,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='0' AND (friends.sender_id=? AND friends.reciever_id!=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id,$user_id));
	
	$this->total_sent_requests=$query->num_rows();
	
	$sql = "SELECT user_reg.user_id,user_reg.full_name,user_reg.verified,user_reg.login_date_time,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,friends.sender_id,friends.reciever_id,friends.friendship_status FROM user_reg,user_personal_info,friends WHERE friends.friendship_status='0' AND (friends.sender_id=? AND friends.reciever_id!=?) AND user_reg.user_id=user_personal_info.user_id AND (friends.sender_id=user_reg.user_id OR friends.reciever_id=user_reg.user_id) AND user_reg.user_id!=? GROUP BY user_reg.user_id ORDER BY friends.id DESC LIMIT $page_number,10"; 
	
	$query=$this->db->query($sql, array($user_id,$user_id,$user_id,$user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->user_sent_requests=$query->result_array();	
		return 1;	
	
}


public function search_friends($search_text,$total,$start_from){
	
$this->db->select('user_reg.user_id,full_name,gender,profile_picture,login_date_time,verified,country,city');

$this->db->from('user_reg');

$this->db->join('user_personal_info', 'user_reg.user_id=user_personal_info.user_id');

$this->db->where('user_reg.user_id !=', $_SESSION['user_id']);

$this->db->like('full_name', $search_text);

$this->db->or_like('full_name', UCWORDS($search_text));

$this->db->or_like('full_name', UCFIRST($search_text));

$this->db->or_like('full_name', strtolower($search_text));

$this->db->or_like('full_name', strtoupper($search_text));

$this->db->or_like('email', $search_text);

$this->db->group_by('user_reg.user_id');

$query=$this->db->get();

$this->total_results=$query->num_rows();

$this->db->select('user_reg.user_id,full_name,gender,profile_picture,login_date_time,verified,country,city');

$this->db->from('user_reg');

$this->db->join('user_personal_info', 'user_reg.user_id=user_personal_info.user_id');

$this->db->where(array('user_reg.user_id !='=>$_SESSION['user_id']));

$this->db->or_like('full_name', $search_text);

$this->db->or_like('full_name', UCWORDS($search_text));

$this->db->or_like('full_name', UCFIRST($search_text));

$this->db->or_like('full_name', strtolower($search_text));

$this->db->or_like('full_name', strtoupper($search_text));

$this->db->group_by('user_reg.user_id');

$this->db->limit($total, $start_from);

$query=$this->db->get();
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->friend_search_result=$query->result_array();
		return 1;	
	
}



public function are_friends($user_id,$friend_id){
	
$sql = "SELECT friendship_status,sender_id FROM friends WHERE (sender_id=? AND reciever_id=?) OR (sender_id=? AND reciever_id=?) ORDER BY id DESC"; 
	
	$query=$this->db->query($sql, array($user_id,$friend_id,$friend_id,$user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->friendship_status=$query->row();
		return 1;		
}

public function add_friend($user_id,$friend_id){
		
if($this->are_friends($user_id,$friend_id)){
		
$status=$this->friendship_status->friendship_status;
	
$sender_id=$this->friendship_status->sender_id;

if($status==0 && $sender_id==$_SESSION['user_id']){
//The sender here cancel the request
if($this->db->delete('friends', array('sender_id' => $user_id,'reciever_id' => $friend_id))){
$this->friend_text=array('text'=>'Add Meant2Be','process'=>'Cancel Request','status'=>'Done');
return 1;	
}
return 0;			
}

elseif($status==0 && $sender_id!=$_SESSION['user_id']){

//The sender here blocks the user
	$data = array('friendship_status' =>2);
				
	$where1 = array('reciever_id'=>$user_id,'sender_id'=>$friend_id); 
			
			//Update profile picture
	if($this->db->update('friends', $data, $where1)){
	
	$this->friend_text=array('text'=>'Block Meant2Be','process'=>'Block Meant2Be','status'=>'Done');		
	return 1;
			
	}
		
}

elseif($status==2){
	
	//The sender here blocks the user
	$data = array('friendship_status' =>3,'user_id'=>$_SESSION['user_id']);
			
	$where = array(); 
	
	$where1 = array('reciever_id'=>$user_id,'sender_id'=>$friend_id); 
			
			//Update profile picture
	if($this->db->update('friends', $data, "(sender_id=$user_id AND reciever_id=$friend_id) OR (reciever_id=$user_id AND sender_id=$friend_id) ")){
	
	$this->friend_text=array('text'=>'Unblock Meant2Be','process'=>'Accept Meant2Be','status'=>'Done');		
	return 1;
			
	}
	return 0;
	}
	
	elseif($status==3){
	
	//The sender here unblocks the user
	$data = array('friendship_status' =>0,'user_id' =>0);
							
			//Update friends
	if($this->db->update('friends', $data, "(sender_id=$user_id AND reciever_id=$friend_id) OR (reciever_id=$user_id AND sender_id=$friend_id) AND user_id=$user_id")){
	
	if($sender_id!=$_SESSION['user_id']){
	$this->friend_text=array('text'=>'Accept Meant2Be','process'=>'Block Meant2Be','status'=>'Done');	
	}
	elseif($sender_id==$_SESSION['user_id']){
	$this->friend_text=array('text'=>'Cancel Request','process'=>'Block Meant2Be','status'=>'Done');	
	}
	return 1;
			
	}
	}
	

}else{
	$friendship_data = array(
               'sender_id' => $user_id,
               'reciever_id' => $friend_id,
			   'friendship_status'=>0,
			   'timestamp' =>time()
            );
			
			//Insert data into database
			if($this->db->insert('friends', $friendship_data)){
			$this->friend_text=array('text'=>'Cancel Request','process'=>'Add Meant2Be','status'=>'Done');;
			return 1;	
			}
			return 0;
	}
		



}

public function get_online_friends($user_id){
	
$time=time()-2592000;
		
$sql = "SELECT user_reg.user_id,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender,user_reg.login_date_time FROM user_reg,user_personal_info,friends WHERE user_reg.login_date_time>='$time'  AND user_reg.user_id!='$user_id' AND user_personal_info.user_id=user_reg.user_id AND ((user_reg.user_id=friends.reciever_id AND friends.sender_id='$user_id' AND friendship_status='2') OR (user_reg.user_id=friends.sender_id AND friends.reciever_id='$user_id' AND friendship_status='2')) GROUP BY user_reg.user_id ORDER BY user_reg.login_date_time DESC"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->online_friends=$query->result_array();	
		return 1;	
	
}

public function get_messages($user_id,$start_from){
		
	$sql = "SELECT MAX(message.message_id),message.message,message.timestamp,message.conversation_id,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.user_id FROM message,user_personal_info,user_reg WHERE (message.sender_id=user_reg.user_id OR message.reciever_id=user_reg.user_id) AND user_reg.user_id!='$user_id' AND (message.sender_id='$user_id' OR message.reciever_id='$user_id') AND (user_reg.user_id=user_personal_info.user_id) GROUP BY message.conversation_id"; 
	
	$query=$this->db->query($sql);
	
	$this->total_messages=$query->num_rows();
	
	$sql = "SELECT MAX(message.message_id) as message_id,MAX(message.message) as message,MAX(message.timestamp) as timestamp,message.conversation_id as conversation_id,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.user_id,user_reg.login_date_time FROM message,user_personal_info,user_reg WHERE (message.sender_id=user_reg.user_id OR message.reciever_id=user_reg.user_id) AND user_reg.user_id!='$user_id' AND (message.sender_id='$user_id' OR message.reciever_id='$user_id') AND (user_reg.user_id=user_personal_info.user_id) GROUP BY conversation_id ORDER BY timestamp DESC LIMIT $start_from,10"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
	
	$this->messages=$query->result_array();	
		
	$sql = "SELECT message_id FROM message WHERE message_status=0 AND reciever_id='$user_id' ORDER BY message_id DESC"; 
	
	$query=$this->db->query($sql);
					
	$this->unread_messages=$query->num_rows();	
	
	$this->msg_detail=array('total_message'=>$this->total_messages,'total_unread_message'=>$this->unread_messages);
	
	array_push($this->msg_detail,$this->messages);
		
	return 1;		
}

public function get_single_message($conversation_id,$user_id,$start_from){
			
	$sql = "SELECT message.message,message.timestamp,message.conversation_id,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.user_id FROM message,user_personal_info,user_reg WHERE (message.sender_id='$user_id' OR message.reciever_id='$user_id') AND (message.sender_id=user_reg.user_id) AND (user_reg.user_id=user_personal_info.user_id) AND conversation_id='$conversation_id' GROUP BY message.message ORDER BY message.message_id DESC"; 
	
	$query=$this->db->query($sql);
						
	$this->total_messages=$query->num_rows();
		
	$sql = "SELECT message.message,message.timestamp,message.conversation_id,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.user_id FROM message,user_personal_info,user_reg WHERE (message.sender_id='$user_id' OR message.reciever_id='$user_id') AND (message.sender_id=user_reg.user_id) AND (user_reg.user_id=user_personal_info.user_id) AND conversation_id='$conversation_id' GROUP BY message.message ORDER BY message.message_id DESC LIMIT $start_from,10"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
	
	$this->single_message=$query->result_array();	
		
	$sql = "SELECT message_id FROM message WHERE message_status=0 AND reciever_id='$user_id' AND conversation_id='$conversation_id' ORDER BY message_id DESC"; 
	
	$query=$this->db->query($sql);
					
	$this->single_unread_message=$query->num_rows();
	
	array_push($this->single_message,array('total_message'=>$this->total_messages,'total_unread_message'=>$this->single_unread_message));	
		
	return 1;		
}

public function add_message($user_id,$friend_id,$message){
	
if($this->are_friends($user_id,$friend_id)){
	
	$sql = "SELECT conversation_id FROM message WHERE (message.sender_id='$user_id' AND message.reciever_id='$friend_id') OR (message.sender_id='$friend_id' AND message.reciever_id='$user_id')"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0){
		
	$conversation_id=$user_id.$friend_id;
	
	}
	
	else{
		
	$row=$query->row();
		
	$conversation_id=$row->conversation_id;
		
	}
	
//Collect message data 
	$message_data = array(
               'sender_id' => $user_id,
               'reciever_id' => $friend_id,
			   'timestamp' =>time(),
			   'message'=>$message,
			   'conversation_id'=>$conversation_id
            );
			
//Insert data into database
		if($this->db->insert('message', $message_data)){
			
		$this->message=array('message'=>$message);
			
		return 1;	
		}	
		return 0;
}
	
		
}

public function get_forum_category(){
	
$sql = "SELECT COUNT(*) as count,blog_topics.id,blog_topics.topic_title FROM blog_detail,blog_topics WHERE blog_detail.category=blog_topics.id   GROUP BY blog_topics.id ORDER BY blog_topics.id ASC"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->forum_category=$query->result_array();	
		return 1;		
	
	
}

public function get_forum_questions($start_from){
	
$sql = "SELECT blog_detail.timestamp FROM blog_detail,blog_topics,user_reg WHERE user_reg.user_id=blog_detail.user_id AND blog_topics.id=blog_detail.category ORDER BY blog_detail.timestamp DESC"; 
	
	$query=$this->db->query($sql);
	
	$this->total_forum_posts=$query->num_rows();
	
	$sql = "SELECT COUNT('thread_reply.id') as total_reply, blog_detail.user_id,blog_detail.topic_id,blog_detail.question_title,blog_detail.category,blog_detail.timestamp,blog_topics.topic_title,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender FROM thread_reply,blog_detail,blog_topics,user_reg,user_personal_info WHERE user_reg.user_id=blog_detail.user_id AND user_personal_info.user_id=user_reg.user_id AND blog_topics.id=blog_detail.category GROUP BY blog_detail.id ORDER BY blog_detail.timestamp DESC LIMIT $start_from,10"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->forum_questions=$query->result_array();	
		return 1;		
		
}

public function get_forum_by_category($category_id,$start_from){
	
$sql = "SELECT blog_detail.timestamp FROM blog_detail,blog_topics,user_reg WHERE user_reg.user_id=blog_detail.user_id AND blog_topics.id=blog_detail.category AND blog_detail.category=? ORDER BY blog_detail.timestamp DESC"; 
	
$query=$this->db->query($sql,$category_id);

$this->total_forum_posts=$query->num_rows();

$sql = "SELECT blog_detail.user_id,blog_detail.topic_id,blog_detail.question_title,blog_detail.category,blog_detail.timestamp,blog_topics.topic_title,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender FROM thread_reply,blog_detail,blog_topics,user_reg,user_personal_info WHERE user_reg.user_id=blog_detail.user_id AND blog_topics.id=blog_detail.category AND user_personal_info.user_id=user_reg.user_id AND blog_detail.category=? GROUP BY blog_detail.id ORDER BY blog_detail.timestamp DESC LIMIT $start_from,10"; 
	
$query=$this->db->query($sql,$category_id);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->forum_questions=$query->result_array();
		return 1;		
		
}

public function get_single_question($topic_id){
	
$sql = "SELECT blog_detail.user_id,blog_detail.topic_id,blog_detail.question_title,blog_detail.category,blog_detail.timestamp,blog_topics.topic_title,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender FROM thread_reply,blog_detail,blog_topics,user_reg,user_personal_info WHERE user_reg.user_id=blog_detail.user_id AND user_personal_info.user_id=user_reg.user_id AND blog_topics.id=blog_detail.category AND blog_detail.topic_id=? GROUP BY blog_detail.id ORDER BY blog_detail.timestamp DESC"; 
	
$query=$this->db->query($sql,$topic_id);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->single_question=$query->result_array();
		return 1;		
		
}

public function get_thread($topic_id,$start_from){
	
$sql = "SELECT thread_reply.thread_detail FROM thread_reply,user_reg WHERE user_reg.user_id=thread_reply.reply_user_id AND thread_reply.topic_id='$topic_id' ORDER BY thread_reply.timestamp DESC"; 
	
$query=$this->db->query($sql,$topic_id);

$this->total_thread=$query->num_rows();

$sql = "SELECT thread_reply.thread_detail,thread_reply.reply_user_id,thread_reply.timestamp,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender FROM thread_reply,user_reg,user_personal_info WHERE user_personal_info.user_id=user_reg.user_id AND user_reg.user_id=thread_reply.reply_user_id AND thread_reply.topic_id='$topic_id' GROUP BY thread_reply.id ORDER BY thread_reply.timestamp DESC LIMIT $start_from,10"; 
	
$query=$this->db->query($sql,$topic_id);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->thread=$query->result_array();
		return 1;		
		
}

public function post_forum_question(){
	
//Collect message data 
	$post_data = array(
               'user_id' => $_SESSION['user_id'],
			   'question_title' =>$this->input->post('question'),
			   'category'=>$this->input->post('category'),
			   'timestamp'=>time()
            );
			
//Insert data into database
		if($this->db->insert('blog_detail', $post_data)){
		return 1;	
		}
		return 0;
}

public function post_forum_answer(){
	
//Collect message data 
	$answer_data = array(
               'topic_id' => $this->input->post('topic_id'),
			   'thread_detail' =>$this->input->post('answer'),
			   'reply_user_id'=>$_SESSION['user_id'],
			   'timestamp'=>time()
            );
			
//Insert data into database
		if($this->db->insert('thread_reply', $answer_data)){
		return 1;	
		}
		return 0;
}

public function check_password_info($password){

$sql = "SELECT email,user_id,full_name,password FROM user_reg WHERE user_id=?"; 
	
	$query=$this->db->query($sql,array($_SESSION['user_id']));
						
	if ($query->num_rows() == 0)
		{
			return FALSE;
		}
		else
		{
			
		$row=$query->row();
		
		if(crypt($password, $row->password) == $row->password){
			
			$this->user_first_data=$query->row();
			return TRUE;
			
		}
		
		else{
				
	return FALSE;
	
		}
		}
}

public function change_email(){
	
$where = array('user_id' =>$_SESSION['user_id']);
			
	$data = array('email'=>$this->input->post('email')); 
			
			//Update profile picture
	if($this->db->update('user_reg', $data, $where)){
				
			return 1;
	
			}
			return 0;		
}

public function change_username(){
	
	$where = array('user_id' =>$_SESSION['user_id']);
			
	$data = array('username'=>$this->input->post('username')); 
			
			//Update profile picture
	if($this->db->update('user_reg', $data, $where)){
				
	return 1;
	
	}
	return 0;		
	
}

public function update_message_viewed($conversation_id){
	
	$where = array('conversation_id' =>$conversation_id,'reciever_id' =>$_SESSION['user_id']);
			
	$data = array('message_status'=>1); 
			
			//Update profile picture
	if($this->db->update('message', $data, $where)){
				
			return 1;
	
			}
			return 0;		
	
}

public function change_password($password){
	
	$where = array('user_id' =>$_SESSION['user_id']);
			
	$data= array('password'=>$password); 
			
			//Update profile picture
	if($this->db->update('user_reg', $data, $where)){
				
			return 1;
	
			}
			return 0;		
}

public function set_password($password,$email){
	
	$where = array('email' =>$email);
			
	$data= array('password'=>$password); 
			
			//Update profile picture
	if($this->db->update('user_reg', $data, $where)){
	return 1;
	
			}
			return 0;		
}

public function right_info_psw(){
	
$email=$this->input->post('email');

$username=$this->input->post('username');

$dob=$this->input->post('yy').'-'.$this->input->post('mm').'-'.$this->input->post('dd');
	
$sql="SELECT user_personal_info.user_id,user_reg.user_id FROM user_personal_info,user_reg WHERE user_reg.username='$username' AND user_reg.email='$email' AND user_personal_info.dob='$dob' AND user_reg.user_id=user_personal_info.user_id";

//die($sql);

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;	
		}
		return 1;
}

public function delete_status($user_id,$status_id){
	
if($this->db->delete('user_status', array('user_id' => $user_id,'id' => $status_id)) && $this->db->delete('user_comments', array('status_id' => $status_id)) && $this->db->delete('user_likes', array('status_id' => $status_id))){
		return 1;
		}
		return 0;
}

public function search_people($per_page,$page_number){

$today=date('Y-m-d');

$age_to=$this->input->post('age_to');

$age_to=date('Y-m-d', $age_to);

$age_from=$this->input->post('age_from');

$age_from=date('Y-m-d', $age_from);

$gender=$this->input->post('gender');

$country=$this->input->post('country');

$city=$this->input->post('city');

$sql="SELECT user_reg.user_id,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender,user_reg.login_date_time,user_personal_info.gender,user_personal_info.dob FROM user_reg,user_personal_info WHERE user_personal_info.user_id=user_reg.user_id AND user_personal_info.dob between '$age_to' AND '$age_from' AND user_personal_info.gender='$gender' AND user_personal_info.country='$country' AND user_personal_info.city='$city' AND admin_activation='1' GROUP BY user_reg.user_id ORDER BY user_reg.login_date_time DESC";

$query=$this->db->query($sql);

$this->total_online=$query->num_rows;

$sql="SELECT user_reg.user_id,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender,user_reg.login_date_time,user_personal_info.gender,user_personal_info.dob FROM user_reg,user_personal_info WHERE user_personal_info.user_id=user_reg.user_id AND user_personal_info.dob between '$age_to' AND '$age_from' AND user_personal_info.gender='$gender' AND user_personal_info.country='$country' AND user_personal_info.city='$city' AND admin_activation='1' GROUP BY user_reg.user_id ORDER BY user_reg.login_date_time DESC LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		$this->people=$query->result_array();
		return 1;
		}
		$this->people=$query->result_array();
		return 1;			
}

public function get_online_people($per_page,$page_number){

$time=time()-2592000;

$sql="SELECT user_reg.user_id,user_reg.full_name,user_personal_info.profile_picture,user_personal_info.gender,user_reg.login_date_time FROM user_reg,user_personal_info WHERE user_reg.login_date_time>='$time' AND user_personal_info.user_id=user_reg.user_id GROUP BY user_reg.user_id ORDER BY user_reg.login_date_time DESC";

$query=$this->db->query($sql);

$this->total_online=$query->num_rows();

$sql="SELECT user_reg.user_id,user_reg.full_name,user_reg.admin_activation,user_reg.login_date_time,user_personal_info.profile_picture,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,membership_type.platform,membership_type.membership FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=user_personal_info.user_id AND user_reg.user_id=membership_type.user_id AND user_reg.login_date_time>='$time' AND user_personal_info.user_id=user_reg.user_id GROUP BY user_reg.user_id ORDER BY user_reg.login_date_time DESC LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;
		}
		$this->people=$query->result_array();
		return 1;			
}

public function get_new_girls($per_page,$page_number){ 

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture FROM user_reg,user_personal_info WHERE user_reg.user_id=user_personal_info.user_id AND user_personal_info.profile_picture!='' AND user_personal_info.gender='Female' GROUP BY user_reg.user_id ORDER BY user_reg.id DESC  LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;
		}
		$this->new_girls=$query->result_array();
		return 1;		
	
}

public function get_new_users($per_page,$page_number){ 

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_reg.email,user_reg.admin_activation,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,membership_type.platform,membership_type.membership FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=user_personal_info.user_id AND user_reg.user_id=membership_type.user_id GROUP BY user_reg.user_id ORDER BY user_reg.id DESC";

$query=$this->db->query($sql);

$this->total_users=$query->num_rows;

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_reg.email,user_reg.admin_activation,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,membership_type.platform,membership_type.membership FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=user_personal_info.user_id AND user_reg.user_id=membership_type.user_id GROUP BY user_reg.user_id ORDER BY user_reg.id DESC  LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;
		}
		$this->new_users=$query->result_array();
		return 1;		
	
}

public function get_pending_members($per_page,$page_number){ 

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_reg.email,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,membership_type.platform,membership_type.membership,verification_requests.type,verification_requests.verification_code,verification_requests.user_id FROM user_reg,user_personal_info,membership_type,verification_requests WHERE user_reg.user_id=user_personal_info.user_id AND verification_requests.user_id=user_reg.user_id AND user_reg.user_id=membership_type.user_id AND verification_requests.type!='verification' AND verification_code!=1 GROUP BY user_reg.user_id ORDER BY user_reg.id DESC";

$query=$this->db->query($sql);

$this->total_pending=$query->num_rows();

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_reg.email,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,membership_type.platform,membership_type.membership,verification_requests.type,verification_requests.verification_code,verification_requests.user_id FROM user_reg,user_personal_info,membership_type,verification_requests WHERE user_reg.user_id=user_personal_info.user_id AND verification_requests.user_id=user_reg.user_id AND user_reg.user_id=membership_type.user_id AND verification_requests.type!='verification' AND verification_code!=1 GROUP BY user_reg.user_id ORDER BY user_reg.id DESC LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;
		}
		$this->pending_members=$query->result_array();
		return 1;		
	
}


public function get_expiring_members($per_page,$page_number){ 

$time=time()+2592000;

$today=time();

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture,membership_type.platform,membership_type.membership,membership_type.expires_on FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=user_personal_info.user_id AND membership_type.user_id=user_reg.user_id AND membership_type.expires_on<=$time AND membership_type.expires_on>=$today GROUP BY user_reg.user_id ORDER BY user_reg.id DESC";

$query=$this->db->query($sql);

$this->total_expiring=$query->num_rows();

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_personal_info.gender,user_personal_info.city,user_personal_info.country,user_personal_info.profile_picture,membership_type.platform,membership_type.membership,membership_type.expires_on FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=user_personal_info.user_id AND membership_type.user_id=user_reg.user_id AND membership_type.expires_on<=$time AND membership_type.expires_on>=$today GROUP BY user_reg.user_id ORDER BY user_reg.id DESC LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;
		}
		$this->expiring_members=$query->result_array();
		return 1;		
	
}

public function get_expired_members($per_page,$page_number){ 

$time=time()+2592000;

$today=time();

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_reg.locked,user_personal_info.gender,user_personal_info.profile_picture,membership_type.platform,membership_type.membership,membership_type.expires_on FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=user_personal_info.user_id AND membership_type.user_id=user_reg.user_id AND (membership_type.expires_on<=$today OR user_reg.locked=1) GROUP BY user_reg.user_id ORDER BY user_reg.id DESC";

$query=$this->db->query($sql);

$this->total_expired=$query->num_rows();

$time=time()+2592000;

$today=time();

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_reg.locked,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.city,user_personal_info.country,membership_type.platform,membership_type.membership,membership_type.expires_on FROM user_reg,user_personal_info,membership_type WHERE user_reg.user_id=user_personal_info.user_id AND membership_type.user_id=user_reg.user_id AND (membership_type.expires_on<=$today OR user_reg.locked=1) GROUP BY user_reg.user_id ORDER BY user_reg.id DESC  LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;
		}
		$this->expired_members=$query->result_array();
		return 1;		
	
}

public function get_verification_requests($per_page,$page_number){

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_personal_info.gender,user_personal_info.profile_picture,verification_requests.type,verification_requests.verification_code,verification_requests.user_id FROM user_reg,user_personal_info,verification_requests WHERE user_reg.user_id=user_personal_info.user_id AND verification_requests.user_id=user_reg.user_id AND verification_requests.type='verification' GROUP BY user_reg.user_id ORDER BY user_reg.id DESC";

$query=$this->db->query($sql);

$this->total_request=$query->num_rows();

$sql="SELECT user_reg.user_id,user_reg.username,user_reg.full_name,user_reg.email,user_personal_info.gender,user_personal_info.profile_picture,user_personal_info.country,user_personal_info.city,membership_type.platform,membership_type.membership,verification_requests.type,verification_requests.verification_code,verification_requests.user_id FROM user_reg,user_personal_info,membership_type,verification_requests WHERE user_reg.user_id=user_personal_info.user_id AND verification_requests.user_id=user_reg.user_id AND verification_requests.type='verification' GROUP BY user_reg.user_id ORDER BY user_reg.id DESC  LIMIT $page_number,$per_page";

$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return 0;
		}
		$this->verification_requests=$query->result_array();
		return 1;			
	
}

public function ac_dc_user($user_id){

$sql="SELECT user_reg.admin_activation FROM user_reg WHERE user_reg.user_id='$user_id'";

$query=$this->db->query($sql);	

$row=$query->row();

if($row->admin_activation==1){

$data=array('admin_activation'=>0);

}
else{
	
$data=array('admin_activation'=>1);

}

if($this->db->update('user_reg', $data, array('user_id'=>$user_id))){

return 1;	
	
}
return 0;	
	
}

public function insert_email($user_id,$subject,$message,$to,$from_email,$from_name){

//Collect message data 
	$email_data = array(
               'sender_id' => $user_id,
			   'reciever_email' =>$to,
			   'subject'=>$subject,
			   'message'=>$message,
			   'sender_email'=>$from_email,
			   'sender_name'=>$from_name,
			   'timestamp'=>time()
            );
			
//Insert data into database
		if($this->db->insert('sent_messages', $email_data)){
		return 1;	
		}
		return 0;	
	
}

public function keyword_message($keyword,$start_from){
		
	$sql = "SELECT message.message_id,message.message,message.timestamp,message.conversation_id,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.user_id FROM message,user_personal_info,user_reg WHERE LOWER(message.message) LIKE '%$keyword%' AND (user_reg.user_id=message.sender_id OR user_reg.user_id=message.reciever_id) AND user_reg.user_id=user_personal_info.user_id GROUP BY message.message_id ORDER BY message.message_id DESC"; 
	
	$query=$this->db->query($sql);
	
	$this->total_messages=$query->num_rows();
	
	$keyword=strtolower($keyword);
	
	$sql = "SELECT message.message_id,message.message,message.timestamp,message.conversation_id,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.user_id FROM message,user_personal_info,user_reg WHERE LOWER(message.message) LIKE '%$keyword%' AND (user_reg.user_id=message.sender_id OR user_reg.user_id=message.reciever_id) AND user_reg.user_id=user_personal_info.user_id GROUP BY message.message_id ORDER BY message.message_id DESC LIMIT $start_from,10"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
	
	$this->messages=$query->result_array();	
	
	return 1;		
}

public function insert_offer($image,$url){
	
//Collect message data 
	$offer_data = array(
               'offer_image' => $image,
			   'offer_url' =>$url,
			   'created_by'=>$_SESSION['user_id'],
			   'type'=>'offer',
			   'timestamp'=>time()
            );
			
//Insert data into database
		if($this->db->insert('offers', $offer_data)){
		return 1;	
		}
		return 0;		
	
	
}

public function insert_game($image,$url){
	
//Collect message data 
	$offer_data = array(
               'offer_image' => $image,
			   'offer_url' =>$url,
			   'created_by'=>$_SESSION['user_id'],
			   'type'=>'game',
			   'timestamp'=>time()
            );
			
//Insert data into database
		if($this->db->insert('offers', $offer_data)){
		return 1;	
		}
		return 0;		
	
	
}

public function get_offers(){
	
	$sql = "SELECT offers.offer_image,offers.offer_url,offers.created_by,offers.timestamp,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.email FROM offers,user_personal_info,user_reg WHERE offers.type='offer' AND user_reg.user_id=user_personal_info.user_id GROUP BY offers.id ORDER BY offers.id DESC"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
	
	$this->offers=$query->result_array();	
	
	return 1;			
}

public function get_offers_admin(){
	
	$sql = "SELECT offers.id,offers.offer_image,offers.offer_url,offers.created_by,offers.type,offers.timestamp,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.email FROM offers,user_personal_info,user_reg WHERE user_reg.user_id=user_personal_info.user_id GROUP BY offers.id ORDER BY offers.id DESC"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}
	
	$this->offers=$query->result_array();	
	
	return 1;			
}

public function get_games(){
	
	$sql = "SELECT offers.offer_image,offers.offer_url,offers.created_by,offers.timestamp,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.email FROM offers,user_personal_info,user_reg WHERE offers.type='game' AND user_reg.user_id=user_personal_info.user_id GROUP BY offers.id ORDER BY offers.id DESC"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}	
	$this->games=$query->result_array();	
	
	return 1;	
			
}

public function delete_offer($id){
	
	if($this->db->delete('offers', array('id' => $id))){
	return 1;
			
}
}

public function insert_todo(){
	
//Collect message data 
	$to_do_data = array(
              'created_by' => $_SESSION['user_id'],
			   'to_do' => $this->input->post('to_do'),
			   'expire_date' =>'',
			   'timestamp'=>time()
            );
			
//Insert data into database
		if($this->db->insert('to_do_list', $to_do_data)){
		return 1;	
		}
		return 0;		
	
	
}

public function get_to_do(){
	
	$sql = "SELECT to_do_list.id,to_do_list.to_do,to_do_list.created_by,to_do_list.expire_date,to_do_list.timestamp,user_personal_info.profile_picture,user_personal_info.gender,user_reg.full_name,user_reg.email FROM to_do_list,user_personal_info,user_reg WHERE user_reg.user_id=user_personal_info.user_id GROUP BY to_do_list.id ORDER BY to_do_list.id DESC"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}	
	$this->to_do=$query->result_array();	
	
	return 1;	
			
}

public function delete_to_do($id){
	
	if($this->db->delete('to_do_list', array('id' => $id))){
	return 1;
			
}
}

public function delete_msg($id){
	
	if($this->db->delete('sent_messages', array('id' => $id))){
	return 1;
			
}
}

public function get_sent_message($page_number){
	
	$sql = "SELECT reciever_email,subject,message,timestamp,stat,sender_name,id FROM sent_messages WHERE sender_id!='' ORDER BY id DESC"; 
	
	$query=$this->db->query($sql);
	
	$this->total_message=$query->num_rows();
	
	$sql = "SELECT reciever_email,subject,message,timestamp,stat,sender_name,id FROM sent_messages WHERE sender_id!='' ORDER BY id DESC LIMIT $page_number,10"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}	
	$this->sent_messages=$query->result_array();	
	
	return 1;	
			
}

public function get_recieved_message($page_number){
	
	$sql = "SELECT reciever_email,subject,message,timestamp,stat,sender_name,id FROM sent_messages WHERE sender_id='' ORDER BY id DESC"; 
	
	$query=$this->db->query($sql);
	
	$this->total_message=$query->num_rows();
	
	$sql = "SELECT reciever_email,subject,message,timestamp,stat,sender_name,id FROM sent_messages WHERE sender_id='' ORDER BY id DESC LIMIT $page_number,10"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}	
	$this->recieved_messages=$query->result_array();	
	
	return 1;	
			
}

public function build_admin(){
	
//Collect membership data 
			$membership_data = array(
               'user_id' => $this->user_id,
            );
			
			//Collect personal data 
			$personal_data = array(
               'user_id' => $this->user_id,
               'gender' => $this->input->post('gender'),
            );
			
			//Collect personal data 
			$more_data = array(
               'user_id' => $this->user_id,
            );
			
			//Collect priviliges 
			$pri_data = array(
               'extra' => $this->input->post('privilege'),
            );
				
			//Insert data into database
			if($this->db->insert('membership_type', $membership_data) && $this->db->insert('user_personal_info', $personal_data) && $this->db->insert('user_more_info', $more_data) && $this->db->insert('user_settings', $pri_data)){
			return TRUE;
		}
		return FALSE;	
	
}

public function set_membership_option(){

$expires_on=$this->input->post('expires_on');

$user_id=$this->input->post('user_id');

$sql = "SELECT MAX(id),type FROM verification_requests WHERE user_id='$user_id' ORDER BY ID DESC LIMIT 0,1"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}	
		
$row=$query->row();
		
$type=$row->type;

if($type=='verification'){

$this->db->update('user_reg', array('verified'=>1),array('user_id'=>$user_id));	

$type='premium';
	
}

$today=time();

$add='+'.$expires_on.' days';

$expires_on=strtotime($add, $today);
	
if($this->db->update('verification_requests', array('verification_code'=>1,'expires_on'=>$expires_on), array('user_id'=>$user_id)) && $this->db->update('membership_type', array('expires_on'=>$expires_on,'membership'=>$type), array('user_id'=>$user_id))){	
	return 1;
}
return 0;	
}

public function save_sent_message(){

//Collect membership data 
			$sentmsg_data = array(
             'sender_id' => $this->user_id,
			 'reciever_email' => $this->input->post('to'),
			 'subject' => $this->input->post('subject'),
			 'message' => $this->input->post('message'),
			 'timestamp' => time()
            );
			
	if($this->db->insert('sent_messages', $sentmsg_data)){
	return 1;	
	}
return 0;	
	
}

public function add_upgrade_request($user_id){
//Collect membership data 
			$req_data = array(
             'user_id' => $user_id,
			 'verification_code' => RAND(1000,9999),
			 'type' => $this->input->post('type'),
			 'timestamp' => time(),
            );
			
	if($this->db->insert('verification_requests', $req_data)){
	return 1;	
	}
return 0;	
	
}


public function upgrade_account($user_id){

$sql = "SELECT type,expires_on FROM verification_requests WHERE user_id=? ORDER BY ID DESC"; 
	
	$query=$this->db->query($sql, array($user_id));
						
	if($query->num_rows() == 0)
		{
		return false;
		}
		$this->ver_info=$query->row();
		$expires_on=$this->ver_info->expires_on;
		$type=$this->ver_info->type;	
		
		if($type=='verification'){
		$type='premium';	
		$this->db->update('user_reg', array('verified'=>1), array('user_id'=>$user_id));	
		}
				
		if($this->db->update('verification_requests', array('verification_code'=>1), array('user_id'=>$user_id)) && $this->db->update('membership_type', array('expires_on'=>$expires_on,'membership'=>$type), array('user_id'=>$user_id))){	
		return 1;
		}
		return 0;		
		}
		
public function check_upgrade_code($code){

$sql = "SELECT user_id FROM verification_requests WHERE verification_code=?"; 
		
	$query=$this->db->query($sql, array($code));
						
	if($query->num_rows() == 1)
		{
		return true;
		}		
		return false;
}


public function profile_set($user_id){

$sql = "SELECT user_id FROM membership_type WHERE user_id='$user_id'"; 
	
	$query=$this->db->query($sql);
						
	if($query->num_rows() == 0)
		{
		return false;
		}	
		return true;	
}

public function check_verification(){

$sql = "SELECT user_id FROM verification_requests WHERE verification_code!=? AND user_id=?"; 
	
	$query=$this->db->query($sql, array(1,$_SESSION['user_id']));
						
	if($query->num_rows() == 0)
		{
			return TRUE;
		}	
	return FALSE;
}

// custom function mine
public function ad_premium(){
	 	$this->db->select("*");
  		$this->db->from('ad_premium');
  		$query = $this->db->get();

  		return $query->result_array();
}
public function edit_admission($id){
	$this->db->select("*");
	$this->db->from('admission');
	$this->db->where('id',$id);
	$query=$this->db->get();
	return $query->result_array();
}
public function edit_scholarship($id){
	$this->db->select("*");
	$this->db->from('scholarship');
	$this->db->where('id',$id);
	$query=$this->db->get();
	return $query->result_array();
}
public function edit_course($id){
	$this->db->select('*');
	$this->db->from('first_course');
	$this->db->where('id',$id);
	$query=$this->db->get();
	return $query->result_array();
}
public function edit_course_next($id1){
	

	$this->db->select('*');
	$this->db->from('second_course');
	$this->db->where('course_id',$id1);
	$query=$this->db->get();
	if($query){
		return $query->result_array();	
	}else{

	}
	
}
public function edit_vacancy($id){
	$this->db->select("*");
	$this->db->from('vacancy');
	$this->db->where('id',$id);
	$query=$this->db->get();
	return $query->result_array();
}

// clients model **********************************************
public function count_college_type(){
$this->db->select('college_type');
$this->db->from('college_details');
$query=$this->db->get();
$res=$query->result_array();
$count1=0;$count2=0;$count3=0;$count4=0;
	foreach ($res as $key => $val) {
			foreach ($val as $key => $value) {
				if($value=='College'){
					$count1++;
				}
				else if($value=='School'){
					$count2++;
				}else if($value=='Consultancy'){
					$count3++;
				}else if($value=='Institute'){
					$count4++;
				}	
				
			}
	}
	$arr=array('college'=>$count1,'school'=>$count2,'consultancy'=>$count3,'institute'=>$count4);
	return $arr;
}
public function count_service_provider(){
$this->db->from('admission');
$query1 = $this->db->get();
$c1 = $query1->num_rows();

$this->db->from('scholarship');
$query1 = $this->db->get();
$c2 = $query1->num_rows();

$this->db->from('first_course');
$query1 = $this->db->get();
$c3 = $query1->num_rows();

$this->db->from('vacancy');
$query1 = $this->db->get();
$c4 = $query1->num_rows();
$arr=array('admission'=>$c1,'scholarship'=>$c2, 'course'=>$c3, 'job'=>$c4);
return $arr;
}
// retrieve category
public function get_category($tb,$rw){
	if(empty($rw)||$rw==''){
		$this->db->select('*');
		$this->db->from($tb);
		$query=$this->db->get();
		return $query->result_array();
	}else{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('college_type',$rw);
		$query=$this->db->get();
		return $query->result_array();
	}

}
public function full_detail($tb,$id){
	$this->db->select("*");
	$this->db->from($tb);
	$this->db->where('id',$id);
	$query = $this->db->get();
	return $query->result_array();

}
function search_everything($t,$s){
	$t=strtolower($t);
	if($t=='admissions'){
		$t='admission';
		$search_arr=array('admission_title'=>$s,
			'scholarships'=>$s,
			'total_fee'=>$s,
			'category'=>$s,
			'description'=>$s);
	}
	else if($t=='scholarships'){
		$t='scholarship';
		$search_arr=array('scholarship_title'=>$s,
			'scholarship_detail'=>$s,
			'requirement'=>$s,
			'scholarship_for'=>$s);
	}
	else if($t=='courses'){
		$t1='first_course';
		$t2='second_course';
			$search_arr=array(
				'first_course.course_name'=>$s,
				'first_course.category'=>$s,
				'first_course.description'=>$s,
				'first_course.url'=>$s,
				'second_course.subtitle'=>$s,
				'second_course.details'=>$s,
				'second_course.url'=>$s
				);
	}else if($t=='jobs'){
		$t='vacancy';
		$search_arr=array('job_title'=>$s,
			'job_category'=>$s,
			'requirement'=>$s,
			'skills'=>$s,
			'exp_field'=>$s,
			'salary'=>$s,
			'nature_of_service'=>$s);
	}
	else{

	}
	if($t=='courses'){
		$this->db->select('first_course.id,first_course.course_name,first_course.category,first_course.description,first_course.url,second_course.subtitle,second_course.details,second_course.url');
		$this->db->join('second_course','first_course.id=second_course.course_id');	
		$this->db->from('first_course');
		$this->db->or_like($search_arr);	
		$query=$this->db->get();
		return $query->result_array();
	}else{
		$this->db->select('*');
		$this->db->from($t);
		$this->db->or_like($search_arr);	
		$query=$this->db->get();
		return $query->result_array();
	}
	
}
/*public function check_visit($ip,$dat){
	echo $dat;die();
	$this->db->select('*');
	$this->db->from('hit_counts');
	$this->db->where('ip',$ip);
	$query=$this->db->get();
	return $query->result_array();
}*/
// client message to the service provider
	public function post_client_message(){
		$data = array(	'user_id' => $this->input->post('user_id'),
						'flag' => $this->input->post('0'),
						'client_full_name' => $this->input->post('fullName'),
						'client_email' => $this->input->post('emailID'),
						'client_mobile' => $this->input->post('mobileNumber'),
						'subject' => $this->input->post('subject'),
						'message' => $this->input->post('user_message')
						); 
		$this->db->insert('client_message', $data);
	}
// end
	// count unique visits
	public function post_count_unique_visit($id){
		$ip = getHostByName(getHostName());
		$dat=date("Y-M-D");
    	//$userIP = $_SERVER['REMOTE_ADDR'];
    	//$ip = $this->input->ip_address();
    	
    	$data1 = array('category_id'=>$id,
    						'date'=>$dat,
    						'ip'=>$ip,
    						'views'=>1
    					);
    	//where condition 
    	//$where_arr=array('date'=>$dat);

    	$this->db->select('*');
    	$this->db->from('count_visitors');
    	// $this->db->where($where_arr);
    	$query = $this->db->get();
    	$arr=$query->result_array();
    	$cnt=0;
    	$update_cnt=0;
    	$date_cnt=0;
    	// if($query->num_rows()<0){
    	// 	$this->db->insert('count_visitors', $data1);
    	// 	return 1;
    	// 	}
    	
    			foreach ($arr as $key => $value) {
    				if($id==$value['category_id']){
    					$cnt++;
    				}
    				// if($dat==$value['date'] && $id==$value['category_id']){
    				// 	$date_cnt++;
    				// }
    				if($value['date']==$dat && $ip==$value['ip'] &&$id==$value['category_id']){
    					$update_cnt++;
    				}
    			}
    			

    			if($cnt==0){

    				//die(print_r($data1));
    				$this->db->insert('count_visitors',$data1);
    				return 1;
    			}
    			else{

    				// if($date_cnt>0){
    					//die('name');
    				if($update_cnt==''){
    					$this->db->set('views','`views`+1',FALSE);
    					$this->db->set('date',$dat);
    					$this->db->set('ip',$ip);
						$this->db->where('category_id',$id);
						$this->db->update('count_visitors');
						return 1;
    				}else{
    					return 0;
    				}
    					
    					// $this->db->update('count_visitors')->set('views','views+1', FALSE)->where('category_id', $id);
    					// return 1;
    				// }
    		// 		else{
    		// 			if($update_cnt==0){
    		// 			$this->db->set('views','`views`+1',FALSE);
						// $this->db->where('category_id',$id);
						// $this->db->update('count_visitors');
						// return 1;
    		// 		}
    		// 		else{
    		// 			echo 'sorry';
    		// 		}
    		// 		}
    			}
    		
	}
	// end
}
?>