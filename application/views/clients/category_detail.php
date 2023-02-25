
<?php  
if(!empty($detail_info)){
	if(isset($_GET['admission'])){

		$area = 'admission';
		$title = $detail_info['0']['admission_title'];
		$cover_photo= $detail_info['0']['cover_photo'];
		$description= $detail_info['0']['description'];
		$updated_date= $detail_info['0']['updated_date'];

		// extra for the admission
		$ent_exm =$detail_info['0']['entrance_exam'];
		$sch=$detail_info['0']['scholarships'];
		$total_fee=$detail_info['0']['total_fee'];
		$category=$detail_info['0']['category'];
		$payment=$detail_info['0']['payment'];
		$crs_category = '';
		$url = '';


		$course_cat = "";
		$url_title = "";
		$sch='';//school or college
		$total_seat='';
		$category='';
		$scholarship_type='';

		$skills='';
		$url='';
		if($sch == 0){
			$sch1 = "Not available";
		}
		else{
			$sch1 = "Available";
		}
		if($ent_exm == 1){
			$exam1 = 'Yes';
		}else{

		$exam1 = 'No';
		}
		/*table data*/
		$category = '';
		$exp_field='';
		$skills='';
		$edu_level='';
		$ex_period_yrs='';
		$ex_period_months='';
		$requirement='';	
		$nature_of_service='';
		$ur_exp ='';
		$salary='';
		$dead_line='';

		/*title for data*/
		$sch_for = "Scholarship:";
		$fee = "Total fee:";
		$cat = "Category:";
		$pay  = "Payment:";
		$exam = "Entrance exam:";
		$skill = '';
		$for = '';
		$job_cat = "";
		$exp_field1 = "";
		$skill = "";
		$edu = "";
		$did = "";
		$need = "";
		$date = "";
		$sal = "";
		$type="";
		$seat_no = "";
		$req = "";
		$requirement1='';

	}else if(isset($_GET['vacancy'])){
		$area = 'vacancy';
		$title = $detail_info['0']['job_title'];
		$cover_photo= $detail_info['0']['cover_photo'];
		$description= $detail_info['0']['description'];
		$updated_date= $detail_info['0']['updated_date'];

		// extra field
		$category = $detail_info['0']['job_category'];
		$exp_field=$detail_info['0']['exp_field'];
		$skills=$detail_info['0']['skills'];
		$edu_level=$detail_info['0']['edu_level'];
		$ex_period_yrs=$detail_info['0']['ex_period_yrs'];
		$ex_period_months=$detail_info['0']['ex_period_months'];
		$requirement=$detail_info['0']['requirement'];	
		$nature_of_service=$detail_info['0']['nature_of_service'];
		$ur_exp = $ex_period_yrs.'/Yrs,'.$ex_period_months.'/Months';
		$salary=$detail_info['0']['salary'];
		$dead_line=$detail_info['0']['dead_line'];
		$crs_category = '';
		$url = '';


		$course_cat = "";
		$url_title = "";

		$sch='';//school or college
		$total_seat='';
		$category='';
		$scholarship_type='';
		$req = "";
		$requirement1='';

/*not in DB*/
		
		
		$total_fee='';
		$category='';
		$payment='';
		$sch1 = '';
		$exam1= '';
		$sch = '';
		
		/*title*/
		$type="";
		$seat_no = "";
		$sch_for = "";
		$exam = "";
		$total_fee='';
		$fee = "";
		$cat = "";
		$pay  = "";
		$for = "";
		$job_cat = "Job Category:";
		$exp_field1 = "Experienced field";
		$skill = "Skills:";
		$edu = "Qualification:";
		$did = "Experienced:";
		$need = "Requirement";
		$date = "Dead line:";
		$sal = "Salary:";


	}else if(isset($_GET['scholarship'])){
		$area = 'scholarship';
		$title = $detail_info['0']['scholarship_title'];
		$cover_photo= $detail_info['0']['cover_photo'];
		$description= $detail_info['0']['scholarship_detail'];
		$updated_date= $detail_info['0']['updated_date'];
		// extra field

		$sch=$detail_info['0']['scholarship_for'];//school or college
		$total_seat=$detail_info['0']['no_of_seats'];
		$requirement1=$detail_info['0']['requirement'];
		$scholarship_type=$detail_info['0']['scholarship_type'];
		$crs_category = '';
		$url = '';
		

		$course_cat = '';
		$url_title = "";
		$skills='';

		/*table data*/
		$category = '';
		$exp_field='';
		$skills='';
		$edu_level='';
		$ex_period_yrs='';
		$ex_period_months='';
		$requirement='';	
		$nature_of_service='';
		$ur_exp ='';
		$salary='';
		$dead_line='';
		$need = '';

		/*title for data*/

		$for="Scholarship for:";
		$req = "Requirement";
		$type="Scholarship type:";
		$seat_no = "Available Seats:";

		$sch_for = "";
		$fee = "";
		$cat = "";
		$pay  = "";
		$exam = "";
		$skill = '';
		$job_cat = "";
		$exp_field1 = "";
		$skill = "";
		$edu = "";
		$did = "";
		
		$date = "";
		$sal = "";
		$sch1='';
		$exam1='';
		$payment='';

	}else if(isset($_GET['first_course'])){

		$area = 'Course';
		$title = $detail_info['0']['course_name'];
		$cover_photo= $detail_info['0']['cover_photo'];
		$description= $detail_info['0']['description'];
		$updated_date= $detail_info['0']['updated_date'];

		// extra field
		$crs_category = $detail_info['0']['category'];
		$url = $detail_info['0']['url'];


		$course_cat = "Category:";
		$url_title = "Url:";
		$sch='';//school or college
		$total_seat='';
		$category='';
		$scholarship_type='';
		$skills='';
		$req = "";

		/*table data*/
		$requirement1='';
		$category = '';
		$exp_field='';
		$skills='';
		$edu_level='';
		$ex_period_yrs='';
		$ex_period_months='';
		$requirement='';	
		$nature_of_service='';
		$ur_exp ='';
		$salary='';
		$dead_line='';
		$for="";
		$need = "";
		$type="";
		$seat_no = "";
		$sch_for = "";
		$fee = "";
		$cat = "";
		$pay  = "";
		$exam = "";
		$job_cat = "";
		$exp_field1 = "";
		$skill = "";
		$edu = "";
		$did = "";
		
		$date = "";
		$sal = "";
		$sch1='';
		$exam1='';
		$payment='';

		}	
}
?>
<style type="text/css">
	#pure-message{
		border:1px solid #e3e3e3;
		min-height: 100px;
		padding:2px 10px 2px 10px;
		color:#000;
	}
	#pure-message:focus{
		outline:1px solid #00a651;
		padding:2px 10px 2px 10px;
	}
	.modal-header{
    border-bottom: 0px!important; 
}
	.modal-footer {
		border-top: 0px!important; 
}

</style>
<section id="main" class="clearfix details-page">
		<div class="container">
			<div class="section banner">				
				<!-- banner-form -->
				<div class="banner-form banner-form-full">
					<form action="#">
						<!-- category-change -->
						<div class="dropdown category-dropdown">						
							<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu category-change">
								<li><a href="#">Scholarships</a></li>
								<li><a href="#">Addmissions</a></li>
								<li><a href="#">Courses</a></li>
								<li><a href="#">Jobs</a></li>
							</ul>								
						</div><!-- category-change -->
						<input type="text" class="form-control" placeholder="Type Your key word">
						<button type="submit" class="form-control" value="Search">Search</button>
					</form>
				</div><!-- banner-form -->
			</div><!-- banner -->




			<div class="section slider">					
				<div class="row">

				<?php if(!empty($detail_info)){

					if(isset($_GET['college_details'])){ 
						$college_type = $detail_info['0']['college_type'];
						$college_name = $detail_info['0']['college_name'];
						$college_city = $detail_info['0']['college_city'];
						$college_country = $detail_info['0']['college_country'];
						$college_zone = $detail_info['0']['college_zone'];
						$college_street = $detail_info['0']['college_street'];
						$college_number = $detail_info['0']['college_number'];
						$college_url = $detail_info['0']['college_url'];
						$college_email = $detail_info['0']['college_email'];
						$facebook_page = $detail_info['0']['facebook_page'];
						$twitter_page = $detail_info['0']['twitter_page'];
						$google_page = $detail_info['0']['google_page'];
						$college_logo = $detail_info['0']['college_logo'];
						



						echo '<div class="col-md-7">
						<div class="col-md-12">
							<div class="row">
						<img src="uploads/img.png" alt="Carousel Thumb" class="img-responsive" width="100%" height="100%">
							</div>

							
						</div>
					</div>
					<div class="col-md-5">
						<div class="slider-text">
							<!-- <h2>$950.00</h2> -->
							<h3 class="title">'.$college_name.'</h3>
							 
							 <span class="icon"><i class="fa fa-map-marker"></i><a href="#">Los Angeles, USA</a></span>
							<!--<span class="icon"><i class="fa fa-suitcase online"></i><a href="#">Dealer <strong>(online)</strong></a></span>-->
							
							<!-- short-info -->
							<div class="short-info">
								<h4>Short info of '.$college_type.' </h4>
								<p><strong>'.$college_type.' Name:</strong><i class="fa fa-university f" aria-hidden="true"></i>'.$college_name.'</p>
								<p><strong>Contact Number:</strong><i class="fa fa-phone f" aria-hidden="true"></i>'.$college_number.'</p>
								<p><strong>'.$college_type.' Website:</strong><a href="https://'.$college_url.'" target="_blank"><i class="fa fa-link f" aria-hidden="true"></i>'.$college_url.'</a></p>
								<p><strong>E-mail us:</strong><a href="https://'.$college_email.'" target="_blank"><i class="fa fa-envelope f" aria-hidden="true"></i>'.$college_email.'</a></p>
							</div><!-- short-info -->
							
							<!-- contact-with-->
							<div class="contact-with">
								<h4>Our social media pages: </h4>
								<span class="btn btn-red show-number">
									<i class="fa fa-external-link-square"></i>
									Visit website 
								</span>
								<a href="#" class="btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-square"></i>Send message</a>
							</div> <!--contact-with -->
							
							<!-- social-links -->
							<div class="social-links">
								<h4>Our social media pages: </h4>
								<ul class="list-inline">
									<li><a href="https://'.$facebook_page.'" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
									<li><a href="https://'.$twitter_page.'" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
									<li><a href="https://'.$google_page.'" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
									<!--<li><a href="https://'.$college_url.'" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
									<li><a href="https://'.$college_url.'" target="_blank"><i class="fa fa-tumblr-square fa-2x"></i></a></li>-->
								</ul>
							</div><!-- social-links -->						
						</div>
					</div><!-- slider-text -->				
				</div>				
			</div><!-- slider -->
			<div class="description-info">
				<div class="row">
					<div class="col-md-12">
					<!-- description -->
					<div class="col-md-8">
						<div class="description">
							<h4>Description</h4>
							<p></p>
						</div>
					</div>';


					}	
					else{
					
					echo '<div class="col-md-7">
						<div class="col-md-12">
							<div class="row">
						<img src="uploads/'.$cover_photo.'" alt="Carousel Thumb" class="img-responsive" width="100%" height="100%">
							</div>

							
						</div>
					</div>
					<div class="col-md-5">
						<div class="slider-text">
							<h3 class="title">'.$title.'</h3>
							<!-- <p><span>Offered by: <a href="#">Yury Corporation</a></span>
							<span> Ad ID:<a href="#" class="time"> 251716763</a></span></p> -->
							<span class="icon"><i class="fa fa-clock-o"></i><a href="#">'.$updated_date.' </a></span>
							<!-- <span class="icon"><i class="fa fa-map-marker"></i><a href="#">Los Angeles, USA</a></span>
							<span class="icon"><i class="fa fa-suitcase online"></i><a href="#">Dealer <strong>(online)</strong></a></span> -->
							
							<!-- short-info -->
							<div class="short-info">
								<h4>About '.$area.'</h4>
								<p><strong>'.$for.''.$sch_for.''.$job_cat.''.$course_cat.'</strong><a href="#">'.$crs_category.''.$sch1.''.$category.''.$sch.'</a></p>
								<p><strong>'.$url_title.''.$fee.''.$skill.''.$seat_no.'</strong><a href="#">'.$total_seat.''.$skills.''.$url.'</a> </p>
								<p><strong>'.$type.''.$exp_field1.''.$cat.'</strong><a href="#">'.$category.''.$exp_field.''.$scholarship_type.'</a> </p>
								<p><strong>'.$req.''.$pay.''.$edu.'</strong><a href="#">'.$edu_level.''.$payment.''.$requirement1.'</a> </p>
								<p><strong>'.$did.''.$exam.'</strong><a href="#">'.$ur_exp.''.$exam1.'</a> </p>

								<p><strong>'.$need.'</strong><a href="#">'.$requirement.'</a>
								 </p>
								 <p><strong>'.$sal.'</strong><a href="#">'.$salary.'</a> </p>
								<p><strong>'.$date.'</strong><a href="#">'.$dead_line.'</a> </p>
						
							</div><!-- short-info -->
							
							<!-- contact-with -->
							<div class="contact-with">
								<h4>Contact with </h4>
								<span class="btn btn-success">
									<i class="fa fa-external-link-square"></i>
									Visit website</span>
								<a href="#" class="btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope-square"></i>Send Message</a>
							</div><!-- contact-with -->
							
							<!-- social-links -->
							<div class="social-links">
								<h4>Share this ad</h4>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
									<!-- <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li> -->
									<li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
								</ul>
							</div><!-- social-links -->						
						</div>
					</div><!-- slider-text -->				
				</div>				
			</div><!-- slider -->
			<div class="description-info">
				<div class="row">
					<div class="col-md-12">
					<!-- description -->
					<div class="col-md-8">
						<div class="description">
							<h4>Description</h4>
							<p>'.$description.'</p>
						</div>
					</div>';
				}}
					?>








					<!-- short-info -->
							<div class="col-md-4 short-info">
								<div class="row">
								<h4>Your Add here!!</h4>
								<img src="ad-banner/facebook.png" style="width: 100%; height: 200px;"/>
								</div>
							</div><!-- short-info -->
							</div>
		<!-- this is for send message************************************************** -->
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">	
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Please, Provide all the neccessary Information !</h3>
        <input type="hidden" name="user_id" value="<?php echo $detail_info['0']['user_id'];?>">
      </div>
      <div class="modal-body">
       <div class="form-group">
       		<label>Full Name *</label>
       		<input type="text" name="fullName" class="col-md-3 form-control">
       </div>
       <div class="form-group">
       		<label>Email ID *</label>
       		<input type="text" name="emailID" class="form-control">
       </div>
       <div class="form-group">
       		<label>Mobile Number *</label>
       		<input type="text" name="mobileNumber" class="form-control">
       </div>
       <div class="form-group">
       		<label>Subject</label>
       		<input type="text" name="subject" class="form-control">
       </div>
       <div class="form-group remove">
       		<label>Message</label>
       		<div contenteditable="true" id="pure-message">
  				
			</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="send-myMessage">Send</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- end************************************************************************ -->
</section>
<section id="something-sell" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="title">Do you have something-sell?</h2>
					<h4>Post your ad for free on Trade.com</h4>
					<a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
				</div>
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->

