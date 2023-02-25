<?php if(!empty($course_edit)){

	$update_id=$course_edit['0']['id'];
	$subtitle=$course_edit['0']['subtitle'];
	$cover_photo_2 =base_url()."/uploads/".$course_edit['0']['photo'];
	$detail=$course_edit['0']['details'];
	//$description=$course_edit['0']['description'];
	$youtube_url=$course_edit['0']['url'];
	$ad_system=$course_edit['0']['ad_system'];
	$email_alert=$course_edit['0']['email_alert'];



	} else{
$update_id='0';
$subtitle='';
$cover_photo_2='';
$detail='';
$youtube_url='';
$ad_system='';
$email_alert='0';
	}
?>
<?php $cover_photo='';  ?>
<section id="main" class="clearfix  ad-profile-page">
		
		<div class="container">
		<?php $this->load->view('pages/provider_menu',$this->data);?>
		 <div class="profile section">
				<div class="adpost-details">
				<div class="row">	
					<div class="col-md-8">	
						<?php echo form_open_multipart('add_course_second');?>
		<fieldset>

						<div class="section postdetails">
                                <span style="color:red;">
								<?php echo $upload_errors;?>
								<?php echo validation_errors();?></span>

									<h4>Create course <span class="pull-right">* Mandatory Fields</span></h4>
									<div class="row form-group">
										<label class="col-sm-3 scholarship-title">Course title</label>
										<div class="col-sm-9">
											<label><b><?php echo $course_title['0']['course_name'];?></b></label>	
										</div>
									</div>

									<div class="row form-group">
										<label class="col-sm-3 scholarship-title">Course subtitle</label>
										<div class="col-sm-9">
										<input type="text" name="subtitle"value="<?php echo $subtitle; ?>" class="form-control" id="course_subtitle">

										</div>
									</div>

											<!-- feastured photo -->
									<div class="row form-group add-image">
										<label class="col-sm-3 label-title">Photos for your ad <span>(This will be your featured photo )</span> </label>
										<div class="col-sm-9">
											<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>
											<div class="upload-section">
												<label class="upload-image" for="upload-image-one2">
													<input id="upload-image-one2" class="upload-image-one" value="<?php echo $cover_photo_2;  ?>" type="file" multiple="multiple" name="userfile">
                                                    <img src="<?php echo $cover_photo_2; ?>" id="image" />
												</label>										
											</div>	
										</div>
									</div>

								

									<!-- description -->
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Course details<span class="required">*</span></label>
										<div class="col-sm-9">
										<!-- <textarea name="course_details" id="txtEditor"></textarea>  -->


										<textarea class="form-control" id="description" name="course_details" placeholder="Write few lines about your Payment" rows="8"><?php echo $detail; ?></textarea>		
										</div>
									</div>

									<!-- promo url of youtube -->
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Insert youtube URL<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="youtube_url" placeholder="Paste your video url" class="form-control" value="<?php echo $youtube_url; ?>">		
										</div>
									</div>
									<!-- end of url div -->

									<!-- add multiple file div  -->
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
									<!-- end of multiple file div -->


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
								

								<input type="hidden" name='ref_id' value="<?php echo $ref_id['ref_id']; ?>">


									<!-- email alert  -->


									<!-- course_id=****************************** -->
									<?php if($update_id){
											echo '<input type="hidden" value="1" name="update_course_next">';
										}else{
											echo '<input type="hidden" value="0" name="update_course_next">';
											}  ?>
								


								<div class="checkbox section agreement">
									<label for="send">
										<input name="sms_email" id="send" type="checkbox" value="1" >
										Send me Email/SMS Alerts for this Admission whenever anyone is interested. By clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Sajiloeducation to find a genuine student.
									</label>
									<button type="submit" class="btn btn-primary course_next">Next</button>
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