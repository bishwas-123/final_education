<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			
			
			<div class="ad-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<?php echo $profile_picture;?>
					</div>
					<div class="user">
						<h2><a href="#"><?php echo $first_name." ".$last_name;?></a>, This is a final step.</h2>
						<h5>Complete your profile !</h5>
					</div>
                    </div>
			</div><!-- ad-profile -->	
            
			<div class="profile section">
				<div class="row">
					<div class="col-sm-8">
						<div class="user-pro-section">
                        <?php echo form_open('final_reg');?>
							<!-- profile-details -->
							<div class="profile-details section">
								<h2>Complete Profile</h2>
                                <span style="color:red">           <?php echo validation_errors();?>
</span>
								
                                
                                
                                <!-- form -->
								<div class="form-group">
									<label>College Name</label>
									<input type="text" name="college_name" value="<?php if(isset($college_details)){echo $college_details->college_name;}?>"  />
								</div>	
                                
                                
                                
                                <!-- form -->
								<div class="form-group">
									<label>College Type</label>
									<select name="college_type" class="form-control countries" required="required" >
                                    <option value="college">College</option>
                                    <option value="high_school">High School</option>
                                    <option value="school">Secondary School</option>
                                    </select>
								</div>	
                                
                                
                                <!-- form -->
								<div class="form-group">
									<label>Country</label>
									<select name="country" class="form-control countries" id="countryId" required="required" >
                                    <?php if(isset($college_details)){?><option value="<?php echo $college_details->country_id;?>" selected><?php echo $college_details->country;?></option><?php } ?>
									<?php foreach($countries as $country){ ?>
                                    <option <?php if(!isset($college_details) && $country['id']==153){  echo 'selected'; }?> value="<?php echo $country['id'];?>"><?php echo $country['name'];?></option>
                                    <?php } ?>
                                    </select>
								</div>	
                                
                                <!-- form -->
								<div class="form-group">
									<label>State</label>
						<select name="state" class="form-control states" id="stateId" required="required">
<?php if(isset($college_details)){?><option value="<?php echo $college_details->state_id;?>" selected><?php echo $college_details->state;?></option><?php } ?>
<?php foreach($states as $state){ ?>
                                    <option <?php if(!isset($college_details) && $state['id']==2566){  echo 'selected'; }?> value="<?php echo $state['id'];?>"><?php echo $state['name'];?></option>
                                    <?php } ?>
</select>
								</div>	
                                
                                 <!-- form -->
								<div class="form-group">
									<label>City</label>
                <select name="city" class="form-control cities" id="cityId" required="required">
                <?php if(isset($college_details)){?><option value="<?php echo $college_details->city_id;?>" selected><?php echo $college_details->city;?></option><?php } ?>
<?php foreach($cities as $city){ ?>
                                    <option <?php if($city['id']==29790){  echo 'selected'; }?> value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
                                    <?php } ?></select>
								</div>	
                                
                                
                                <!-- form -->
								<div class="form-group">
									<label>Street</label>
									<input type="text" name="street" value="<?php if(isset($college_details)){echo $college_details->college_name;}?>"  />
								</div>
                                
                                <button type="submit" class="btn btn_green">Save Profile</button>
			
							</div><!-- profile-details -->
                            <?php echo form_close();?>
						</div><!-- user-pro-edit -->
					</div><!-- profile -->

					
			</div>				
		</div><!-- container -->
        </div>
	</section>