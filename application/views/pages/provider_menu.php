<div class="ad-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<?php echo $profile_picture;?>
					</div>
					<div class="user">
						<h2>Welcome , <a href="#"><?php echo $first_name." ".$last_name;?></a></h2>
						<h5>You are logged in as <?php echo UCWORDS($college_details->college_name);?> !</h5>
					</div>

					<div class="favorites-user">
						<div class="my-ads">
							<a href="my-ads.html">23<small>New Applications</small></a>
						</div>
						<div class="favorites">
							<a href="#">18<small>New Messages</small></a>
						</div>
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li class="active"><a href="profile">Create Admission</a></li>
					<li><a href="scholarship">Create Scholarship</a></li>
					<li><a href="course">Create Course</a></li>
					<li><a href="vacancy">Create Vacancy </a></li>
					<li><a href="pending-ads.html">Update Website</a></li>
					
                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Quick Menu<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $base_url;?>/myadmissions">My Admissions</a></li>
									<li><a href="<?php echo $base_url;?>/myscholarships">My Scholarships</a></li>
									<li><a href="<?php echo $base_url;  ?>/myvacancies">My Vacancies</a></li>
									<li><a href="<?php echo $base_url; ?>/mycourses">My Courses</a></li>
								</ul>
							</li>
				</ul>
                
                
                
                
                
			</div>