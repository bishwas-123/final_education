
<section id="main" class="clearfix  ad-profile-page">
		<div class="container">		
            <?php $this->load->view('pages/provider_menu',$this->data);?>
            
            <div class="profile section">
				<div class="adpost-details">
				<div class="row">	
					
				<div class="col-sm-8">
						<div class="my-ads section">
							<h2>My course</h2>
                            <p></p>
                            
                            <?php foreach($my_course as $course){ ?>
							<!-- ad-item -->
							<div class="ad-item row" id="ad_<?php echo $course['id'];?>">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="<?php echo $base_url;?>/profile?course_id=<?php echo  $course['id']; ?>"><img src="<?php echo $base_url;?>/uploads/<?php echo $course['cover_photo'];?>" alt="<?php echo $course['course_name'];?>" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">Youtube url: <?php echo $course['url'];?></h3>
										<h4 class="item-title"><a href="<?php echo $base_url;?>/profile?course_id=<?php echo  $course['id']; ?>"><?php echo $course['course_name'];?></a></h4>
										<div class="item-cat">
											<span><a href="#"><?php echo $course['category'];?></a></span> /
											<span><a href="#">Tv &amp; Video</a></span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated">Posted On: <a href="#"><?php $ar=explode(',',timespan($course['posted_date'],time()));  echo $ar[0];?> ago</a></span>
											<span class="visitors">Visitors: 221</span> 
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
										<?php $pass_id=$course['id'];  ?>
										<a href="<?php echo $base_url;?>/course?course_id=<?php echo  $course['id']; ?>"  class="edit-item" data-placement="top" title="" data-original-title="Edit this ad"><span class="fa fa-pencil"></span></a>

											
											<a onclick="return delete_course(<?php echo $course['id'];?>);"  title="" data-original-title="Delete this ad" ><i class="fa fa-times"></i></a>

										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->
                            
                            <?php } ?>
                            
                            
                            

						</div>
					</div>
                    <!--col -->
				

					<div class="col-sm-4 text-center">
						<!-- recommended-cta -->
						<div class="recommended-cta">					
							<div class="cta">
								<!-- single-cta -->						
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-secure">
										<img src="images/icon/13.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Quick course</h4>
									<p>Get the applications quick in your inbox as soon as you post the course notice.</p>
								</div><!-- single-cta -->
								

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-support">
										<img src="images/icon/14.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>24/7 Support</h4>
									<p>If you need any support, Just contact us anytime.</p>
								</div><!-- single-cta -->
							

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-trading">
										<img src="images/icon/15.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Easy Tracking</h4>
									<p>Track any applicant or your any students at anytime.</p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<h5>Need Help?</h5>
									<p><span>Give a call on</span><a href="tellto:9779843152556"> 977-9843152556</a></p>
								</div><!-- single-cta -->
							</div>
						</div><!-- cta -->
					</div>
				</div><!-- photos-ad -->				
			</div>
			</div>
			
			
        </div>
	</section>