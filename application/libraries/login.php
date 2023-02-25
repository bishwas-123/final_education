<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class facebook_login{
	
	public function check_facebook_login(){	
	if (isset($_GET['code']) && !empty($_GET['code'])) {
      $code = $_GET['code'];
      // parsing the result to getting access token.
      parse_str($this->get_fb_contents("https://graph.facebook.com/oauth/access_token?client_id=165261643653331&redirect_uri=" . urlencode('http://localhost/final_education/dashboard') ."&client_secret=9b6188181c1f57981df7aa6202b7f373&code=" . urlencode($code)));
	$this->redirect_url='http://localhost/final_education/dashboard?access_token='.$access_token;
    }
    if(!empty($_GET['access_token'])) {
      // getting all user info using access token.
    $fbuser_info = json_decode($this->get_fb_contents("https://graph.facebook.com/me?access_token=".$_GET['access_token']), true);
	 // you can get all user info from print_r($fbuser_info);
    if(!empty($fbuser_info['email'])) {
	$this->user_id=$fbuser_info['id'];
	$this->profile_picture="<img src='https://graph.facebook.com/$this->user_id/picture?return_ssl_resources=1' alt='' />";
    $this->first_name=$fbuser_info['first_name'];
    $this->last_name=$fbuser_info['last_name'];
    $this->email=$fbuser_info['email'];
	$this->gender=$fbuser_info['gender'];	
	return 1;
       }
       else{
     $this->session->set_flashdata('message', 'Error while facebook user information.');
	 return 0;
       }
    }
    if ($this->form_validation->run() == FALSE) {
      return 0; // loading default view.
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