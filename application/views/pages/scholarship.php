<?php 

if(!empty($scholarship_edit)){
 $scholarship_title = $scholarship_edit['0']['scholarship_title'];
 $scholarship_type = $scholarship_edit['0']['scholarship_type'];
 $scholarship_detail = $scholarship_edit['0']['scholarship_detail'];
 $total_no_of_seats = $scholarship_edit['0']['no_of_seats'];
 $requirement = $scholarship_edit['0']['requirement'];
 $scholarship_for =  $scholarship_edit['0']['scholarship_for'];
 $cover_photo= base_url()."/uploads/".$scholarship_edit['0']['cover_photo'];
 $ad_system=$scholarship_edit['0']['ad_system'];
}else{
	$scholarship_title = "";
 $scholarship_type ="";
 $total_no_of_seats =  "";
 $scholarship_detail =  "";
  $requirement =  "";
 $scholarship_for =  "";
 $cover_photo="";
$ad_system="";

}

?>

<section id="main" class="clearfix  ad-profile-page">

		<div class="container">
		
			
            <?php $this->load->view('pages/provider_menu',$this->data);?>
            
            <div class="profile section">
				<div class="adpost-details">
				<div class="row">	
					<div class="col-md-8">	
					<?php echo form_open_multipart('add_scholarship');?>	

<fieldset>
								<div class="section postdetails">
                                <span style="color:red;">
								<?php echo $upload_errors;?>
								<?php echo validation_errors();?></span>
									<h4>Create New Scholarship <span class="pull-right">* Mandatory Fields</span></h4>
									<div class="row form-group">
										<label class="col-sm-3 scholarship-title">Scholarship Title<span class="required">*</span></label>
										<div class="col-sm-9">
											<input class="form-control my_title" id="text" placeholder="Scholarship Title" type="text" value="<?php echo $scholarship_title; ?>" name="scholarship_title"/>
										</div>
									</div>


									<div class="row form-group add-image">
										<label class="col-sm-3 label-title">Photos for your ad <span>(This will be your cover photo )</span> </label>
										<div class="col-sm-9">
											<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>
											<div class="upload-section">
												<label class="upload-image" for="upload-image-one1">
													<input id="upload-image-one1" class="upload-image-one" value="<?php echo $cover_photo;  ?>" type="file" multiple="multiple" name="userfile">
                                                    <img src="<?php echo $cover_photo; ?>" id="image" />
												</label>										
											</div>	
										</div>
									</div>








									<div class="row form-group scholarship-type">
										<label class="col-sm-3 label-title">Scholarship Type<span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="form-group">
											<select name="scholarship_type" class="form-control scholarship-type-select">
											<?php 
												if(!empty($scholarship_type)){
													echo '<option>'.$scholarship_type.'</option>';
												}
											 ?>
												<option value="Partial">Partial</option>
												<option value="Full">Full</option>
											</select>
											</div>
										</div>
									</div>
									<div class="row form-group scholarship-detail">
										<label class="col-sm-3 label-title">Scholarship Detail<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="detail" name="scholarship_detail"placeholder="Write few lines about your Scholarship" rows="8"><?php echo $scholarship_detail; ?></textarea>		
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 total-no-of-seats">No. of Seats<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="total_no_of_seats" class="form-control numeric_fs" placeholder="No. of Seats" value="<?php echo $total_no_of_seats ?>" />
										</div>
									</div>
									<div class="row form-group scholarship-requirement">
										<label class="col-sm-3 label-title">Requirement<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="detail" name="requirement" placeholder="Write about Requirement" rows="8"><?php echo $requirement; ?></textarea>		
										</div>
									</div>
									<div class="row form-group scholarship-for">
										<label class="col-sm-3 label-title">Scholarship For<span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="form-group">
											<select name="scholarship_for" class="form-control scholarship-for">
												<?php if(!empty( $scholarship_for)){
													echo '<option>'.$scholarship_for.'</option>';
													}?>
												<option value="School">School</option>
												<option value="College">College</option>
												<option value="Institute">Institute</option>
												<option value="Specific Course">Specific Course</option>
											</select>
											</div>
										</div>
									</div>
					
								<div class="section">
									<h4>Make your Ad Premium </h4>
									<p>More replies means more students. With lots of interested students, you have a better chance of getting more admission requests. <a href="#">Learn more</a></p>
									<ul class="premium-options">
                                    <input type="hidden" value="" name="ad_system"  />
                                     <?php 
                                    	foreach ($ad_premium as $key => $value) {
                                    		echo '<li class="premium">';
                                    		if($ad_system==$value['ad_type']."_".$value['ad_period']."_days"){
                                    			echo '<input name="ad_system" value="'.$value['ad_type']."_".$value['ad_period']."_days".'" id='.$key.' type="radio" checked>';
                                    		}
                                    		else{
                                    			echo '<input name="ad_system" value="'.$value['ad_type']."_".$value['ad_period']."_days".'" id='.$key.' type="radio">';
                                    		}
											echo '<label for='.$key.'>'.$value['ad_type']." "."Ad for ".$value['ad_period']." day".'</label>
                                    				<span>'.$value['ad_currency'].". ".$value['ad_price'].'</span>
                                    			';
                                    	}
                                     ?>
										<!-- <li class="premium">
											<input name="ad_system" value="regular_ad_daily" id="day-one" type="radio">
											<label for="day-one">Regular Ad Per Day</label>
											<span>Rs.200</span>
										</li>
										<li class="premium">
											<input name="ad_system" value="3_days_top" id="day-two" type="radio">
											<label for="day-two">Top Ad for 3 days</label>
											<span>Rs.1000</span>
										</li>
										<li class="premium">
											<input name="ad_system" value="7_days_top" id="day-three" type="radio">
											<label for="day-three">Top Ad for 7 days</label>
											<span>Rs.2000</span>
										</li>
										<li class="premium">
											<input name="ad_system" value="facebook_top" id="day-four" type="radio">
											<label for="day-four">Facebook + Top Ad (7 Days)</label>
											<span>Rs.8000</span>
										</li>	 -->							
									</ul>
								</div><!-- section -->

								<input type="hidden" name="scholarship_id" value="<?php if(isset($_GET['scholarship_id']) && is_numeric($_GET['scholarship_id'])){ echo $_GET['scholarship_id'];  }else{echo '0';} ?>" />


								<div class="checkbox section agreement">
									<label for="send">
										<input name="sms_email" id="send" type="checkbox" value="1" >
										Send me Email/SMS Alerts for this Admission whenever anyone is interested. By clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Sajiloeducation to find a genuine student.
									</label>
									<button type="submit" class="btn btn-primary form_post">Post Admission</button>
								</div><!-- section -->
								
							</fieldset>
						</form><!-- form -->	
					</div>
				

					<!-- quick-rules -->	
					<div class="col-md-4">
						<div class="section quick-rules">
							<h4>Quick rules</h4>
							<p class="lead">Posting an ad on <a href="#">Sajiloeducation.com</a> is free! However, all ads must follow our rules:</p>

							<ul>
								<li>Do not post the same admission more than once or repost an ad within 48 hours.</li>
								<li>Do not put your email or phone numbers in the title or description.</li>
								<li>Make sure you post in the correct category.</li>
								<li>Do not post ads containing multiple items unless it's a package deal.</li>
							</ul>
						</div>
					</div><!-- quick-rules -->	
				</div><!-- photos-ad -->				
			</div>
			</div>	
        </div>
	</section>

	<!-- <script>
		$(document).ready(function(){
			alert("name ANF ");
	});
	</script> -->


