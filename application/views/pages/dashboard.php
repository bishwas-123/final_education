<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			
			
			<div class="ad-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<?php echo $profile_picture;?>
					</div>
					<div class="user">
						<h2>Hello, <a href="#"><?php echo $first_name." ".$last_name;?></a></h2>
						<h5>Update your profile !</h5>
					</div>
                    </div>
			</div><!-- ad-profile -->	
            
			<div class="profile section">
				<div class="row">
					<div class="col-sm-8">
						<div class="user-pro-section">
                        <?php echo form_open('add_role');?>
							<!-- profile-details -->
							<div class="profile-details section">
								<h2>Define Your Role</h2>
                                <span style="color:red">           <?php echo validation_errors();?>
</span>
								<!-- form -->
								<div class="form-group">
									<label>Your Role</label>
									<select class="form-control" name="user_role">
										<option value="service_provider">Service Provider</option>
										<option value="client" selected>Client</option>
									</select>
                                    <input type="hidden" value="<?php echo $user_id;?>" name="user_id" />
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