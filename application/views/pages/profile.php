<?php
 if(!empty($admission_edit)){
 	//echo $admission_edit['0']['email_alert'];
		//print_r($admission_edit);
 		$entrance_exam=$admission_edit['0']['entrance_exam'];
		$admission_title=$admission_edit['0']['admission_title'];
		$cover_photo=base_url()."/uploads/".$admission_edit['0']['cover_photo'];
		$scholarships=$admission_edit['0']['scholarships'];
		$total_fee=$admission_edit['0']['total_fee'];
		$category=$admission_edit['0']['category'];
		$payment=$admission_edit['0']['payment'];
		$description=$admission_edit['0']['description'];
		$ad_system=$admission_edit['0']['ad_system'];
		$email_alert=$admission_edit['0']['email_alert'];
	}
	else{
		$entrance_exam='1';
		$admission_title='';
		$cover_photo='';
		$scholarships='1';
		$total_fee='';
		$category='';
		$payment='';
		$description='';
		$ad_system='';
		$email_alert=0;

	}

?>
<section id="main" class="clearfix  ad-profile-page">

		<div class="container">
		
			
            <?php $this->load->view('pages/provider_menu',$this->data);?>
            
            <div class="profile section">
				<div class="adpost-details">
				<div class="row">	
					<div class="col-md-8">
<?php echo form_open_multipart('add_admission');?>							
<fieldset>
								<div class="section postdetails">
                                <span style="color:red;">
								<?php echo $upload_errors;?>
								<?php echo validation_errors();?></span>
									<h4>Create New Admission <span class="pull-right">* Mandatory Fields</span></h4>
									<div class="row form-group">
										<label class="col-sm-3">Type of ad<span class="required">*</span></label>
										<div class="col-sm-9 user-type">
										<?php if($entrance_exam==1) 
										{
										echo '<input name="entrance_exam" value="1" id="newsell" type="radio" checked> <label for="newsell">Need to pass an entrance examination </label>
											<input name="entrance_exam" value="0" id="newbuy" type="radio"> <label for="newbuy">There is no entrance examination</label>';
										}
										else{
										echo '<input name="entrance_exam" value="0" id="newsell" type="radio"> <label for="newsell">Need to pass an entrance examination </label>
											<input name="entrance_exam" value="1" id="newbuy" type="radio" checked> <label for="newbuy">There is no entrance examination</label>';
										}?>
												
										</div>
									</div>
									<div class="row form-group add-title">
										<label class="col-sm-3 label-title">Title of your Admission<span class="required">*</span></label>
										<div class="col-sm-9">
											<input class="form-control my_title"  placeholder="e.g:Admission open for grade XI" type="text" value="<?php echo $admission_title; ?>" name="admission_title">
										</div>
									</div>
									<div class="row form-group add-image">
										<label class="col-sm-3 label-title">Photos for your ad <span>(This will be your cover photo )</span> </label>
										<div class="col-sm-9">
											<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>
											<div class="upload-section">
												<label class="upload-image" for="upload-image-one">
													<input id="upload-image-one" class="upload-image-one" value="<?php echo $cover_photo;  ?>" type="file" multiple="multiple" name="userfile">
                                                    <img src="<?php echo $cover_photo; ?>" id="image" class="image" />
												</label>										
											</div>	
										</div>
									</div>
									<div class="row form-group select-condition">
										<label class="col-sm-3">Scholarships<span class="required">*</span></label>
										<div class="col-sm-9">
										<?php
											if($scholarships=='1'){
												echo '<input name="scholarships" value="1" id="new" type="radio" checked> 
											<label for="new">Available</label>
											<input name="scholarships" value="0" id="used" type="radio"> 
											<label for="used">Not Available</label>';
											}else{
												echo '<input name="scholarships" value="1" id="new" type="radio"> 
											<label for="new">Available</label>
											<input name="scholarships" value="0" id="used" type="radio" checked> 
											<label for="used">Not Available</label>';
											}
										 ?>
											
										</div>
									</div>
									<div class="row form-group select-price">
										<label class="col-sm-3 label-title">Total fee<br />(course complete) <span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-3">
													<select class="form-control">
													<option>NPR</option>
													<option>USD</option>
													<option>DZD</option>
													<option>EUR</option>
													<option>AOA</option>
													</select>
												</div>
												<div class="col-sm-8">
													<input class="form-control numeric_fs" value="<?php echo $total_fee; ?>" id="fee" type="text" name="fee">
												</div>
											</div>										
											
										</div>
									</div>
                                    
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
                                    
                                    <div class="row form-group brand-name">
										<label class="col-sm-3 label-title">Payment System<span class="required">*</span></label>
										<div class="col-sm-9">
										<div class="form-group">
											<select name="payment_system" class="form-control payment-system-select">
											<?php if(!empty($payment)) {
												echo '<option value='.$payment.' selected="selected">'.$payment.'</option>';

											}   ?>
												<option value="Yearly">Yearly</option>
												<option value="Semesterwise">Semesterwise</option>
												<option value="Monthly">Monthly</option>
												<option value="Weekly">Weekly</option>
												<option value="Others">Others</option>
											</select>
											</div>

											<div class="form-group payment-method-text" style="display: none;">
												<input type="text" class="form-control" placeholder="Enter your own payment system" name="payment_method">
											</div>
										</div>
									</div>
	
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">
										<!-- <textarea name="description" id="txtEditor"></textarea>  -->


										<textarea class="form-control" id="description" name="description" placeholder="Write few lines about your Payment" rows="8"><?php echo $description; ?></textarea>		
										</div>
									</div>


									<div class="row form-group item-description">
										<label class="col-sm-3 label-title"></i>Upload your files(eg .pdf, .doc)  <span class="required">*</span></label>
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
                                
                                <input type="hidden" name="admission_id" value="<?php if(isset($_GET['admission_id']) && is_numeric($_GET['admission_id'])){ echo $_GET['admission_id'];  }else{echo '0';} ?>" />
								
								<div class="checkbox section agreement">
									<label for="send">
								
											<?php 
												if($email_alert==1){
													echo '<input checked class="email_check" type="checkbox" id="send" name="sms_email" value="1">';
												}
												else{
													echo '<input class="email_check" type="checkbox" id="send" name="sms_email" value="0">';
												}
											?>
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

