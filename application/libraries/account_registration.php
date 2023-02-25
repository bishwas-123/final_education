<?php
class login{

public function check_facebook_login(){	
if (isset($_GET['code']) && !empty($_GET['code'])) {
      $code = $_GET['code'];
      // parsing the result to getting access token.
      parse_str($this->get_fb_contents("https://graph.facebook.com/oauth/access_token?client_id=165261643653331&redirect_uri=" . urlencode('http://localhost/final_education/dashboard') ."&client_secret=9b6188181c1f57981df7aa6202b7f373&code=" . urlencode($code)));
      redirect('http://localhost/final_education/dashboard?access_token='.$access_token);
    }
    if(!empty($_GET['access_token'])) {
      // getting all user info using access token.
      $fbuser_info = json_decode($this->get_fb_contents("https://graph.facebook.com/me?access_token=".$_GET['access_token']), true);
	 // you can get all user info from print_r($fbuser_info);
      if(!empty($fbuser_info['email'])) {
    //echo $fbuser_info['first_name'];
    //echo $fbuser_info['last_name'];
    //echo $fbuser_info['email'];
    //echo $fbuser_info['gender'];
	//echo $fbuser_info['id'];
	
	//echo '<img src="https://graph.facebook.com/670786558/picture?return_ssl_resources=1" alt="" />';
    // do your stuff.
    //save the data in db save session and redirect.
       }
       else{
     $this->session->set_flashdata('message', 'Error while facebook user information.');
     redirect(base_url());
       }
    }
    if ($this->form_validation->run() == FALSE) {
      $this->index(); // loading default view.
    }
	
}




}