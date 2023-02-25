<?php 



if(!empty($category)){


	if(isset($_GET['service'])){
	
	$tb=$_GET['service'];
	if($tb=='admission'){
		$field1='admission_title';
		$cover_photo='cover_photo';
		$posted_date = 'posted_date';
	}
	else if($tb=='scholarship'){
		$field1='scholarship_title';
		$cover_photo='cover_photo';
		$posted_date = 'posted_date';
	}
	else if($tb=='vacancy'){
		$field1='job_title';
		$cover_photo='cover_photo';
		$posted_date = 'posted_date';
	}
	else if($tb=='first_course'){
		$field1='course_name';
		$cover_photo='cover_photo';
		$posted_date = 'posted_date';
		}
	}
	if(isset($_GET['type'])){
	$tb='college_details';
	$field1='college_name';
	}

}
?>
<!-- main -->
	<section id="main" class="clearfix category-page">
		<div class="container">
			
			<div class="banner">
			
				<!-- banner-form -->
				<div class="banner-form banner-form-full">
						<form action="" method="get">
						<!-- category-change -->
						<div class="dropdown category-dropdown">						
							<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu category-change">
								<li><a href="#">Scholarships</a></li>
								<li><a href="#">Admissions</a></li>
								<li><a href="#">Courses</a></li>
								<li><a href="#">Jobs</a></li>
							</ul>								
						</div><!-- category-change -->
					
						<input type="text" class="form-control" placeholder="Type Your key word">
						<button type="submit" class="form-control" value="Search">Search</button>
					</form>
				</div><!-- banner-form -->
			</div>
	
					<!-- recommended-ads -->
					<div class="category-info">	
				<div class="row">
					<!-- accordion-->
					<div class="col-md-3 col-sm-4">
						<div class="accordion">
							<!-- panel-group -->
							<div class="panel-group" id="accordion">
							 	
								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
											<h4 class="panel-title">Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-one" class="panel-collapse collapse in">
										<!-- panel-body -->
										<div class="panel-body">
											<h5><a href="categories-main.html"><i class="fa fa-caret-down"></i> All Categories</a></h5>
											<a href="#"><i class="icofont icofont-laptop-alt"></i>We provide services:</a>
											<ul>
												<li><a href="#">Courses <span>(129)</span></a></li>
												<li><a href="#">Jobs <span>(8342)</span></a></li>
												<li><a href="#">Addmissions <span>(782)</span></a></li>
												<li><a href="#">Scholard <span>(5247)</span></a></li>
												<!-- <li><a href="#">Accessories <span>(634)</span></a></li>
												<li><a href="#">Cameras <span>(453)</span></a></li>
												<li><a href="#">Mobile Accessories <span>(7986)</span></a></li>
												<li><a href="#">TV & Video <span>(742)</span></a></li>
												<li><a href="#">Other Electronics <span>(149)</span></a></li>
												<li><a href="#">TV & Video Accessories<span> (9)</span></a></li> -->
											</ul>

										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-two">
											<h4 class="panel-title">Condition<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-two" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="new"><input type="checkbox" name="new" id="new"> New</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Used</label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-three">
											<h4 class="panel-title">
											Price
											<span class="pull-right"><i class="fa fa-plus"></i></span>
											</h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-three" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<div class="price-range"><!--price-range-->
												<div class="price">
													<span>$100 - <strong>$700</strong></span>
													<div class="dropdown category-dropdown pull-right">	
														<a data-toggle="dropdown" href="#"><span class="change-text">USD</span><i class="fa fa-caret-square-o-down"></i></a>
														<ul class="dropdown-menu category-change">
															<li><a href="#">USD</a></li>
															<li><a href="#">AUD</a></li>
															<li><a href="#">EUR</a></li>
															<li><a href="#">GBP</a></li>
															<li><a href="#">JPY</a></li>
														</ul>								
													</div><!-- category-change -->													
													 <input type="text"value="" data-slider-min="0" data-slider-max="700" data-slider-step="5" data-slider-value="[250,450]" id="price" ><br />
												</div>
											</div><!--/price-range-->
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-four">
											<h4 class="panel-title">
											Posted By
											<span class="pull-right"><i class="fa fa-plus"></i></span>
											</h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-four" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="individual"><input type="checkbox" name="individual" id="individual"> Individual</label>
											<label for="dealer"><input type="checkbox" name="dealer" id="dealer"> Dealer</label>
											<label for="reseller"><input type="checkbox" name="reseller" id="reseller"> Reseller</label>
											<label for="manufacturer"><input type="checkbox" name="manufacturer" id="manufacturer"> Manufacturer</label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-five">
											<h4 class="panel-title">
											Brand
											<span class="pull-right"><i class="fa fa-plus"></i></span>
											</h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-five" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<input type="text" placeholder="Search Brand" class="form-control">
											<label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label>
											<label for="htc"><input type="checkbox" name="htc" id="htc"> HTC</label>
											<label for="micromax"><input type="checkbox" name="micromax" id="micromax"> Micromax</label>
											<label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label>
											<label for="others"><input type="checkbox" name="others" id="others"> Others</label>
											<label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label>
												<span class="border"></span>
											<label for="acer"><input type="checkbox" name="acer" id="acer"> Acer</label>
											<label for="bird"><input type="checkbox" name="bird" id="bird"> Bird</label>
											<label for="blackberry"><input type="checkbox" name="blackberry" id="blackberry"> Blackberry</label>
											<label for="celkon"><input type="checkbox" name="celkon" id="celkon"> Celkon</label>
											<label for="ericsson"><input type="checkbox" name="ericsson" id="ericsson"> Ericsson</label>
											<label for="fly"><input type="checkbox" name="fly" id="fly"> Fly</label>
											<label for="g-fone"><input type="checkbox" name="g-fone" id="g-fone"> g-Fone</label>
											<label for="gionee"><input type="checkbox" name="gionee" id="gionee"> Gionee</label>
											<label for="haier"><input type="checkbox" name="haier" id="haier"> Haier</label>
											<label for="hp"><input type="checkbox" name="hp" id="hp"> HP</label>
										</div><!-- panel-body -->
									</div>
								</div> <!-- panel -->   
							 </div><!-- panel-group -->
						</div>
					</div><!-- accordion-->

			




					<div class="col-sm-8 col-md-7">				
						<div class="section recommended-ads">
							<!-- featured-top -->
							<div class="featured-top">
								<h4>Recommended for You</h4>
								<div class="dropdown pull-right">
								
								<!-- category-change -->
								<div class="dropdown category-dropdown">
									<h5>Sort by:</h5>						
									<a data-toggle="dropdown" href="#"><span class="change-text">Popular</span><i class="fa fa-caret-square-o-down"></i></a>
									<ul class="dropdown-menu category-change">
										<li><a href="#">Featured</a></li>
										<li><a href="#">Newest</a></li>
										<li><a href="#">All</a></li>
										<li><a href="#">Bestselling</a></li>
									</ul>								
								</div><!-- category-change -->														
								</div>							
							</div><!-- featured-top -->	
							
							<!-- item-image -->
								
									<?php foreach ($category as $key1 => $value1) {
										if(isset($_GET['service'])){
											
							echo '<div class="ad-item row" id="'.$value1['id'].'">
											
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="'.base_url('category_detail?').$tb."=".$value1['id'].'" class="visit_count" id='."hit-".$value1['id'].'><img src="uploads/'.$value1['cover_photo'].'" alt="Image" class="img-responsive"></a>
									</div>
								</div>
								
								
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">'. $value1[$field1].'</h3>
										<h4 class="item-title"><a href="#"></a></h4>
										<div class="item-cat">
											<span><a href="#">Total view:1110</a></span> /
											<span><a href="#">Users</a></span>
										</div>										
									</div>
									
									
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">'. $value1['updated_date'].' </a></span>
											<a href="#" class="tag"><i class="fa fa-tags"></i> New</a>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div>
									</div>
								</div>
							</div>';
										

										}else{
											echo '<div class="ad-item row" id="'.$value1['id'].'">
								
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="'.base_url('category_detail?').$tb."=".$value1['id'].'" class="visit_count" id='."hit-".$value1['id'].'><img src="uploads/img.png" alt="Image" class="img-responsive"></a>
									</div>
								</div>
								
								
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">'. $value1[$field1].'</h3>
										<h4 class="item-title"><a href="#"></a></h4>
										<div class="item-cat">
											<span><a href="#">Total view:1110</a></span> /
											<span><a href="#">Users</a></span>
										</div>										
									</div>
									
									
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date </a></span>
											<a href="#" class="tag"><i class="fa fa-tags"></i> New</a>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div>
									</div>
								</div>
							</div>';


										}

										 // echo $title = $value1[$field1];
										 // $cover_photo = $value1['cover_photo'];
										 // $posted_date = $value1['updated_date'];
			
										





									}
									 ?>
							


							
							
							
							
							
							

							<!-- ad-section -->						
							<!-- <div class="ad-section text-center">
								<a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-responsive"></a>
							</div> --><!-- ad-section -->
							
								
							
							<!-- pagination  -->
							<div class="text-center">
								<ul class="pagination ">
									<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">10</a></li>
									<li><a href="#">20</a></li>
									<li><a href="#">30</a></li>
									<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>			
								</ul>
							</div><!-- pagination  -->					
						</div>
					</div><!-- recommended-ads -->

					<div class="col-md-2 hidden-xs hidden-sm">
						<div class="advertisement text-center">
							<a href="#"><img src="images/ads/2.jpg" alt="" class="img-responsive"></a>
						</div>
					</div>
				</div>	
			</div>
		</div><!-- container -->
	</section><!-- main -->

	<script type="text/javascript">
		$(document).ready(function(){
			$(".visit_count").click(function(){
				var count_id=$(this).attr("id");

				count_id=count_id.split('-');
				count_id=count_id[1];
				
				// alert(count_id);
				var base_url = '<?php echo base_url();?>'+"count_unique_visit";

				$.ajax({
					method:"POST",
					url:base_url,
					data:{id:count_id},
					success:function(successResponse){
						alert(successResponse);
					}

				});			
			});
			
		});

	</script>