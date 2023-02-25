
<?php 
if(!empty($vacancy_edit)){ 

	$job_title = $vacancy_edit['0']['job_title'];
	$job_category = $vacancy_edit['0']['job_category'];
	$job_requirement =  $vacancy_edit['0']['requirement'];
	$cover_photo = base_url()."/uploads/".$vacancy_edit['0']['cover_photo'];
	$job_skill = $vacancy_edit['0']['skills'];
	$edu_level = $vacancy_edit['0']['edu_level'];
	$exe_field = $vacancy_edit['0']['exp_field'];
	$exp_yrs = $vacancy_edit['0']['ex_period_yrs'];
	$exp_months = $vacancy_edit['0']['ex_period_months'];
	$salary = $vacancy_edit['0']['salary'];
	$nature_of_service = $vacancy_edit['0']['nature_of_service'];
	$description = $vacancy_edit['0']['description'];
	$dead_line = $vacancy_edit['0']['dead_line'];
	$document = $vacancy_edit['0']['document'];
	$ad_system=$vacancy_edit['0']['ad_system'];
	$email_alert=$vacancy_edit['0']['email_alert'];
}
else{

	$job_title = '';
	$job_category = '';
	$job_requirement ='';
	$cover_photo = '';
	$job_skill = '';
	$edu_level = '';
	$exe_field = '';
	$exp_yrs = '';
	$exp_months ='';
	$salary ='';
	$nature_of_service ='';
	$description ='';
	$dead_line = '';
	$document = '';
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
<?php echo form_open_multipart('add_vacancy');?>							
<fieldset>

								<div class="section postdetails">
                                <span style="color:red;">
								<?php echo $upload_errors;?>
								<?php echo validation_errors();?></span>
									<h4>Create New Vacancy <span class="pull-right">* Mandatory Fields</span></h4>
									
									<div class="row form-group job-title">
										<label class="col-sm-3 label-title">Job Title<span class="required">*</span></label>
										<div class="col-sm-9">
											<input class="form-control job_title" id="text" placeholder="e.g:Vacancy for IT graduate" type="text" name="job_title" value="<?php echo $job_title; ?>">
										</div>
									</div>
									<div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Job Category<span class="required">*</span></label>
										<div class="col-sm-9">
											<select name="job_category" class="form-control">
												<?php 
												if(!empty($job_category)){
													echo '<option>'.$job_category.'</option>';
												}
											 	?>
												<option>Banking</option>
												<option>Airlines</option>
												<option>Telecommunication</option>
											</select>
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Requirement<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control job_requirement" id="text" placeholder="Requirement" type="text" name="job_requirement" placeholder="Write about job requirement" rows="8">
											<?php echo $job_requirement; ?>
											</textarea>		
										</div>
									</div>
									<div class="row form-group add-image">
										<label class="col-sm-3 label-title">Add Photo<span>(This will be your cover photo )</span> </label>
										<div class="col-sm-9">
											<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Photo to Upload / Drag and Drop Photo</h5>
											<div class="upload-section">
												<label class="upload-image" for="upload-image-one">
													<input id="upload-image-one" class="upload-image-one" value="<?php echo $cover_photo;  ?>" type="file" multiple="multiple" name="userfile">
                                                    <img src="<?php echo $cover_photo; ?>" id="image" class="image" />
												</label>									
											</div>	
										</div>
									</div> 
									<div class="row form-group job-skill">
										<label class="col-sm-3 label-title">Skills<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="skill" name="job_skill" placeholder="Write about your job skill" rows="8"><?php echo $job_skill; ?></textarea>		
										</div>
									</div>
									<div class="row form-group edu-level">
										<label class="col-sm-3 label-title">Education Level<span class="required">*</span></label>
										<div class="col-sm-9">
											<select name="edu_level" class="form-control">
												<?php 
												if(!empty($edu_level)){
													echo '<option>'.$edu_level.'</option>';
												}
											 	?>
												<option>+2</option>
												<option>Bachelor</option>
												<option>Master</option>
												<option>M.phil</option>
												<option>Doctor</option>
											</select>
										</div>
									</div>
									<div class="row form-group exe-field">
										<label class="col-sm-3 label-title">Experience Field<span class="required">*</span></label>
										<div class="col-sm-9">
											<input class="form-control" id="text" placeholder="Experience Field" type="text" name="exe_field" value="<?php echo $exe_field; ?>">
										</div>
									</div>
									<div class="row form-group select-price">
										<label class="col-sm-3 label-title">Experience Period</label>
											<div class="col-sm-9">
												<div class="row col-md-12">
													<div class="row exp_period_box_content">
														<div class="col-sm-6">
															<div class="exp_period_box">
																<label>Years</label>
																	<select  id="fee" type="text" name="exp_yrs" class="exp_period_box_element">
																	<?php 
												if(!empty($exp_yrs)){
													echo '<option>'.$exp_yrs.'</option>';
												}
											 	?>
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																		<option value="4">4</option>
																		<option value="5">5</option>
																		<option value="6">6</option>
																		<option value="7">7</option>
																		<option value="8">8</option>
																		<option value="9">9</option>
																		<option value="10+">10+</option>
																	</select>
															</div>
														</div>		
														<label>Months</label>
														<select  id="fee" type="text"  name="exp_months" class="exp_period_box_element">
																		<?php 
												if(!empty($exp_months)){
													echo '<option>'.$exp_months.'</option>';
												}
											 	?>
																		<option value="3">2</option>
																		<option value="4">4</option>
																		<option value="5">5</option>
																		<option value="6">6</option>
																		<option value="7">7</option>
																	</select>
													</div>
												</div>
											</div>
									</div>	
									<div class="row form-group vac_salary">
										<label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
										<div class="col-sm-9">
											<input class="form-control salary" id="salary" placeholder="salary" type="text" name="salary" value="<?php echo $salary; ?>">
										</div>
									</div>
									<div class="row form-group nature-of-service">
										<label class="col-sm-3 label-title">Nature of service<span class="required">*</span></label>
										<div class="col-sm-9">
											<select name="nature_of_service" class="form-control">
												<?php 
												if(!empty($nature_of_service)){
													echo '<option>'.$nature_of_service.'</option>';
												}
											 	?>
												<option>Type 1</option>
												<option>Type 2</option>
												<option>Type 3</option>
												<option>Type 4</option>
											</select>
										</div>
									</div>
									<div class="row form-group job-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="description" name="job_description" placeholder="Write about your job description" rows="8"><?php echo $description; ?></textarea>		
										</div>
									</div>
									<div class="row form-group dead-line">
										<label class="col-sm-3 label-title">Dead Line<span class="required">*</span></label>
										<div class="col-sm-9">
											<input class="form-control dead_line" id="text" placeholder="Job expire" type="date" name="dead_line" value="<?php echo $dead_line; ?>">
										</div>
									</div>
									<div class="row form-group document">
										<label class="col-sm-3 label-title">Documents<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="document" name="document" placeholder="attach PP-photo, other required document" rows="8"><?php echo $document; ?> </textarea>		
										</div>
									</div>
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title"></i>Additional Document(Option)  <span class="required">*</span></label>
										<div class="col-sm-9">

										<!-- ********************************************** -->
										<label class="btn btn-default result_file" for="upload_file">Choose multiple files <i class="fa fa-upload"></i> </label><span class="badge count_result"></span>
										<span class="label label-danger wrong_result"></span>
										<input type="file" id="upload_file" name="upload_doc[]" class="check-file-extention"  multiple="multiple" style="visibility:hidden;"/>   
											

										<!-- ********************************************************* -->
											
										</div>
									</div>																
								</div><!-- section -->
								
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
                                
                                <input type="hidden" name="vacancy_id" value="<?php if(isset($_GET['vacancy_id']) && is_numeric($_GET['vacancy_id'])){ echo $_GET['vacancy_id'];  }else{echo '0';} ?>" />
								
								<div class="checkbox section agreement">
									<label for="send">
										<input name="sms_email" id="send" type="checkbox" value="1">
										Send me Email/SMS Alerts for this Admission whenever anyone is interested. By clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Sajiloeducation to find a genuine student.
									</label>
									<button type="submit" class="btn btn-primary" id="post_vacancy">Post Vacancy</button>
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