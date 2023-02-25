<?php 
//print_r($count_college_type);
if(!empty($count_college_type)){
$college = $count_college_type['college'];
$school= $count_college_type['school'];
$consultancy = $count_college_type['consultancy'];
$institute = $count_college_type['institute'];
}
if(!empty($count_service_provider)){
	$course = $count_service_provider['course'];
	$job = $count_service_provider['job'];
	$admission = $count_service_provider['admission'];
	$scholarship = $count_service_provider['scholarship'];
}
?>
<!-- main -->
	<section id="main" class="clearfix home-default">
		<div class="container">
			<!-- banner -->
			<div class="banner-section text-center">
				<h1 class="title">Nepal's Largest Education Portal </h1>
				<h3>Search from thousands of courses,scholarships,admissions, jobs, colleges, educational consultancies, institutes & Post unlimited education opportunities free!</h3>
				<!-- banner-form -->
				<div class="banner-form">
					<form action="" method="get">
						<!-- category-change -->
						<select class="form-control search-cat" style="margin-left:10px;border:none;">
							<option>Scholarships</option>
							<option>Admissions</option>
							<option>Courses</option>
							<option>Jobs</option>
						</select>

						<!-- <div class="dropdown category-dropdown">						
							<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu category-change">
								<li><a href="#">Scholarships</a></li>
								<li><a href="#">Admissions</a></li>
								<li><a href="#">Courses</a></li>
								<li><a href="#">Jobs</a></li>
							</ul>								
						</div> -->
						<!-- category-change -->
					
						<input type="text" class="form-control search-input" placeholder="Type Your key word">
						<button type="submit" class="form-control search-btn-align" value="Search">Search</button>
					</form>
				</div><!-- banner-form -->
				<div>
					
				</div>
					<!-- search tab -->
					<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
					
						<div class="section search-result text-center w3-animate-opacity" style="padding: 1px;display: none;cursor: pointer;">
						<!-- <h4>Search Results: </h4> -->
							<!-- <ul class="category-list">	
							
								<a style="text-align:left;text-decoration:underline;font-size:18px;" href="#">
								<div>link and the address</div>
								</a>		
							</ul> -->				
						</div>
						<!-- search tab -->
					</div>
					<div class="col-sm-2"></div>
						
					</div>
						
			</div><!-- banner -->
			
			<!-- main-content -->
			<div class="main-content">
				<!-- row -->
				<div class="row">
					<div class="hidden-xs hidden-sm col-md-2 text-center">
						<div class="advertisement">
							<a href="#"><img src="images/ads/2.jpg" alt="Images" class="img-responsive"></a>
						</div>
					</div>
					<!-- product-list -->
					<div class="col-md-8">
						<!-- categorys -->
						<div class="section category-ad text-center">
							<ul class="category-list">	
								<li class="category-item">

								<!-- 	<a href="<?php echo $base_url;?>/get_categories?type=college"> -->


									<a href="<?php echo $base_url;?>/get_categories?type=College">

										<div class="category-icon"><img src="images/icon/1.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Colleges</span>
										<span class="category-quantity">(<?php echo $college; ?>)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="<?php echo $base_url;?>/get_categories?type=School">
										<div class="category-icon"><img src="images/icon/2.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Schools</span>
										<span class="category-quantity">(<?php echo $school; ?>)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="<?php echo $base_url;?>/get_categories?type=Consultancy">
										<div class="category-icon"><img src="images/icon/3.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Consultancies</span>
										<span class="category-quantity">(<?php echo $consultancy; ?>)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="<?php echo $base_url;?>/get_categories?type=Institute">
										<div class="category-icon"><img src="images/icon/10.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Institutes</span>
										<span class="category-quantity">(<?php echo $institute; ?>)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="<?php echo $base_url;?>/get_categories?service=first_course">
										<div class="category-icon"><img src="images/icon/4.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Courses</span>
										<span class="category-quantity">(<?php echo $course; ?>)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="<?php echo $base_url;?>/get_categories?service=vacancy">
										<div class="category-icon"><img src="images/icon/5.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Jobs</span>
										<span class="category-quantity">(<?php echo $job; ?>)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="<?php echo $base_url;?>/get_categories?service=admission">
										<div class="category-icon"><img src="images/icon/6.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Admissions</span>
										<span class="category-quantity">(<?php echo $admission; ?>)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="<?php echo $base_url;?>/get_categories?service=scholarship">
										<div class="category-icon"><img src="images/icon/9.png" alt="images" class="img-responsive"></div>
										<span class="category-title">Scholarships</span>
										<span class="category-quantity">(<?php echo $scholarship; ?>)</span>
									</a>
								</li><!-- category-item -->		
							</ul>				
						</div><!-- category-ad -->	
						
						<!-- featureds -->
						<div class="section featureds">
							<div class="row">
								<div class="col-sm-12">
									<div class="section-title featured-top">
										<h4>Featured Ads</h4>
									</div>
								</div>
							</div>
							
							<!-- featured-slider -->
							<div class="featured-slider">
								<div id="featured-slider" >
									<!-- featured -->
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="images/featured/1.jpg" alt="" class="img-respocive"></a>
											<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$800.00</h3>
											<h4 class="item-title"><a href="#">Apple MacBook Pro with Retina Display</a></h4>
											<div class="item-cat">
												<span><a href="#">Electronics & Gedgets</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
									
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="images/featured/2.jpg" alt="" class="img-respocive"></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$25000.00</h3>
											<h4 class="item-title"><a href="#">2016 Bugatti Veyron Sport Middlecar</a></h4>
											<div class="item-cat">
												<span><a href="#">Cars & Vehicles</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
									
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="images/featured/3.jpg" alt="" class="img-respocive"></a>
											<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
										</div>
										
										<!-- ad-info -->
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$250.00 <span class="negotiable">(Negotiable)</span></h3>
											<h4 class="item-title"><a href="#">Vivster Acoustic Guitar</a></h4>
											<div class="item-cat">
												<span><a href="#">Music & Art</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="images/trending/4.jpg" alt="" class="img-respocive"></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$50.00</h3>
											<h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
											<div class="item-cat">
												<span><a href="#">Books & Magazines</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
									
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="images/trending/3.jpg" alt="" class="img-respocive"></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$380.00</h3>
											<h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
											<div class="item-cat">
												<span><a href="#">Electronics & Gedgets</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
								</div><!-- featured-slider -->
							</div><!-- #featured-slider -->
						</div><!-- featureds -->

					

						<!-- trending-ads -->
						<div class="section trending-ads">
							<div class="section-title tab-manu">
								<h4>Trending Ads</h4>
								 <!-- Nav tabs -->      
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#recent-ads"  data-toggle="tab">Recent Ads</a></li>
									<li role="presentation"><a href="#popular" data-toggle="tab">Popular Ads</a></li>
									<li role="presentation"><a href="#hot-ads"  data-toggle="tab">Hot Ads</a></li>
								</ul>
							</div>

				  			<!-- Tab panes -->
							<div class="tab-content">
								<!-- tab-pane -->
								<div role="tabpanel" class="tab-pane fade in active" id="recent-ads">
									<!-- ad-item -->
									<div class="ad-item row">
										<!-- item-image -->
										<div class="item-image-box col-sm-4">
											<div class="item-image">
												<a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-responsive"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div>
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$50.00</h3>
												<h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
												<div class="item-cat">
													<span><a href="#">Electronics & Gedgets</a></span> /
													<span><a href="#">Tv & Video</a></span>
												</div>	
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->

									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-responsive"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
												<h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
												<div class="item-cat">
													<span><a href="#">Home Appliances</a></span> /
													<span><a href="#">Sofa</a></span>
												</div>										
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->

									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$800.00</h3>
												<h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
												<div class="item-cat">
													<span><a href="#">Books & Magazines</a></span> /
													<span><a href="#">Story book</a></span>
												</div>										
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->

									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-responsive"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
												<h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
												<div class="item-cat">
													<span><a href="#">Electronics & Gedgets</a></span> /
													<span><a href="#">Mobile Phone</a></span>
												</div>	
											</div><!-- ad-info -->											
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->		
									
								</div><!-- tab-pane -->
								
								<!-- tab-pane -->
								<div role="tabpanel" class="tab-pane fade" id="popular">

									<div class="ad-item row">
										<!-- item-image -->
										<div class="item-image-box col-sm-4">
											<div class="item-image">
												<a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-responsive"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div>
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$50.00</h3>
												<h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
												<div class="item-cat">
													<span><a href="#">Electronics & Gedgets</a></span> /
													<span><a href="#">Tv & Video</a></span>
												</div>	
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->
									
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-responsive"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
												<h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
												<div class="item-cat">
													<span><a href="#">Electronics & Gedgets</a></span> /
													<span><a href="#">Mobile Phone</a></span>
												</div>	
											</div><!-- ad-info -->											
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->	
									
									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-responsive"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
												<h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
												<div class="item-cat">
													<span><a href="#">Home Appliances</a></span> /
													<span><a href="#">Sofa</a></span>
												</div>										
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->

									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$800.00</h3>
												<h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
												<div class="item-cat">
													<span><a href="#">Books & Magazines</a></span> /
													<span><a href="#">Story book</a></span>
												</div>										
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->									
								</div><!-- tab-pane -->

								<!-- tab-pane -->
								<div role="tabpanel" class="tab-pane fade" id="hot-ads">
									<!-- ad-item -->
									<div class="ad-item row">
										<!-- item-image -->
										<div class="item-image-box col-sm-4">
											<div class="item-image">
												<a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-responsive"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div>
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$50.00</h3>
												<h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
												<div class="item-cat">
													<span><a href="#">Electronics & Gedgets</a></span> /
													<span><a href="#">Tv & Video</a></span>
												</div>	
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->
									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$800.00</h3>
												<h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
												<div class="item-cat">
													<span><a href="#">Books & Magazines</a></span> /
													<span><a href="#">Story book</a></span>
												</div>										
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->

									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-responsive"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- ad-item -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
												<h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
												<div class="item-cat">
													<span><a href="#">Electronics & Gedgets</a></span> /
													<span><a href="#">Mobile Phone</a></span>
												</div>	
											</div><!-- ad-info -->											
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->	
									
									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-sm-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-responsive"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
										<div class="item-info col-sm-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
												<h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
												<div class="item-cat">
													<span><a href="#">Home Appliances</a></span> /
													<span><a href="#">Sofa</a></span>
												</div>										
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->									
								</div><!-- tab-pane -->
							</div>
						</div><!-- trending-ads -->		

						<!-- cta -->
						<div class="section cta text-center">
							<div class="row">
								<!-- single-cta -->
								<div class="col-sm-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-secure">
											<img src="images/icon/13.png" alt="Icon" class="img-responsive">
										</div><!-- cta-icon -->

										<h4>Secure Trading</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="col-sm-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-support">
											<img src="images/icon/14.png" alt="Icon" class="img-responsive">
										</div><!-- cta-icon -->

										<h4>24/7 Support</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="col-sm-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-trading">
											<img src="images/icon/15.png" alt="Icon" class="img-responsive">
										</div><!-- cta-icon -->

										<h4>Easy Trading</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div><!-- single-cta -->
							</div><!-- row -->
						</div><!-- cta -->
					</div><!-- product-list -->

					<!-- advertisement -->
					<div class="hidden-xs hidden-sm col-md-2">
						<div class="advertisement text-center">
							<a href="#"><img src="images/ads/1.jpg" alt="Images" class="img-responsive"></a>
						</div>
					</div><!-- advertisement -->
				</div><!-- row -->
			</div><!-- main-content -->
		</div><!-- container -->
	</section><!-- main -->