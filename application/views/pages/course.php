<?php if(!empty($course_edit)){
	$update_id=$course_edit['0']['id'];
	$course_name=$course_edit['0']['course_name'];
	$cover_photo=base_url()."/uploads/".$course_edit['0']['cover_photo'];
	$category=$course_edit['0']['category'];
	$description=$course_edit['0']['description'];
	$youtube_url=$course_edit['0']['url'];
	$ad_system=$course_edit['0']['ad_premium'];
	$email_alert=$course_edit['0']['email_alert'];
	} 
	else{
$update_id='';
$course_name='';
$cover_photo='';
$category='';
$description='';
$youtube_url='';
$ad_system='';
$email_alert='0';
	}


	?>


<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		<?php $this->load->view('pages/provider_menu',$this->data);?>
		 <div class="profile section">
				<div class="adpost-details">
				<div class="row">	
					<div class="col-md-8">	
						<?php echo form_open_multipart('add_course');?>
		<fieldset>

						<div class="section postdetails">
                                <span style="color:red;">
								<?php echo $upload_errors;?>
								<?php echo validation_errors();?></span>

									<h4>Create Courses <span class="pull-right">* Mandatory Fields</span></h4>
									
									<ul class="course-tabs">
									<?php 

									// if(empty($check_course_data)){

									// }else{
									// 	foreach ($check_course_data as $key1 => $value1) {
									// 		echo "<li>".$value1['course_name']."</li>";
									// 	}

									// }
									?>
									
									<!-- 	<li>course title</li>
										<li>course title1</li> -->
									</ul>

									<div class="row form-group">
										<label class="col-sm-3 scholarship-title">Course Name<span class="required">*</span></label>
										<div class="col-sm-9">
										<input type="text" name="course_name" class="form-control" id="course_title" placeholder="course name" value="<?php echo $course_name; ?>">

											
										</div>
									</div>

											<!-- feastured photo -->
									<div class="row form-group add-image">
										<label class="col-sm-3 label-title">Photos for your ad <span>(This will be your feature photo )</span> </label>
										<div class="col-sm-9">
											<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>
											<div class="upload-section">
												<label class="upload-image" for="upload-image-one2">
													<input id="upload-image-one2" class="upload-image-one" value="<?php echo $cover_photo;  ?>" type="file" multiple="multiple" name="userfile">
                                                    <img src="<?php echo $cover_photo; ?>" id="image" />
												</label>										
											</div>	
										</div>
									</div>

									<!-- course title -->
									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Category<span class="required">*</span></label>
										<div class="col-sm-9">
											<select name="category" class="form-control">
											<?php 
												if(!empty($category)){
													echo '<option>'.$category.'</option>';
												}
											 ?>
											<option>Long term course</option>
											<option>Short term course</option>
											</select>
										</div>
									</div>

									<!-- description -->
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">
										<!-- <textarea name="description" id="txtEditor"></textarea>  -->


										<textarea class="form-control" id="description" name="description" placeholder="Write few lines about your Payment" rows="8"><?php echo $description; ?></textarea>		
										</div>
									</div>

									<!-- promo url of youtube -->
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Insert youtube URL<span class="required">*</span></label>
										<div class="col-sm-9">
										<input type="text" name="youtube_url" placeholder="Paste your video url" class="form-control" value="<?php echo $youtube_url;  ?>">		
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
																		
									</ul>
								</div><!-- section -->


									<!-- email alert  -->
								<input type="hidden" name="course_id" value="<?php if(isset($_GET['course_id']) && is_numeric($_GET['course_id'])){ echo $_GET['course_id'];  }else{echo '0';} ?>" />


								<div class="checkbox section agreement">
									<label for="send">
										<input name="sms_email" id="send" type="checkbox" value="1" >
										Send me Email/SMS Alerts for this Admission whenever anyone is interested. By clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Sajiloeducation to find a genuine student.
									</label>
									
									<button type="submit" class="btn btn-primary course_post">Next</button>
								</div><!-- section -->








							</div><!-- section postdetails -->
					</fieldset>
					</form><!-- end of form -->





					</div>
				</div>
				</div>
			</div>
		</div>
</section>