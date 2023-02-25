<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class facebook_login{
	
	public function check_facebook_login($code){	
	if (isset($code) && !empty($code)) {
      // parsing the result to getting access token.
     parse_str($this->get_fb_contents("https://graph.facebook.com/oauth/access_token?client_id=165261643653331&redirect_uri=" . urlencode('http://localhost/final_education/profile') ."&client_secret=9b6188181c1f57981df7aa6202b7f373&code=" . urlencode($code)));
	$_SESSION['access_token']=$access_token;
	//redirect('http://localhost/final_education/dashboard?access_token='.$access_token);
    }
    if(!empty($_SESSION['access_token'])) {
      // getting all user info using access token.
    $fbuser_info = json_decode($this->get_fb_contents("https://graph.facebook.com/me?access_token=".$_SESSION['access_token']), true);
	 // you can get all user info from print_r($fbuser_info);
    if(!empty($fbuser_info['id'])) {
	$this->user_id=$fbuser_info['id'];
	$this->profile_picture="<img src='https://graph.facebook.com/$this->user_id/picture?return_ssl_resources=1)' alt='' />";
    $this->first_name=$fbuser_info['first_name'];
    $this->last_name=$fbuser_info['last_name'];
    if(!empty($fbuser_info['email'])) {
       $this->email=$fbuser_info['email'];
    }
   
	$this->gender=$fbuser_info['gender'];	
	if(strlen($code>=1)){
	//set logout code into the session.
	$_SESSION['logout_code']=$code;
	}
	return 1;
       }
       else{
	 return 0;
       }
    }
}

private function get_fb_contents($url) {
    $curl = curl_init();
    curl_setopt( $curl, CURLOPT_URL, $url );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
    $response = curl_exec( $curl );
    curl_close( $curl );
    return $response;
  }


}