	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Quik Links</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">All Cities</a></li>
								<li><a href="#">Help & Support</a></li>
								<li><a href="#">Advertise With Us</a></li>
								<li><a href="#">Blog</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>How to sell fast</h3>
							<ul>
								<li><a href="#">How to sell fast</a></li>
								<li><a href="#">Membership</a></li>
								<li><a href="#">Banner Advertising</a></li>
								<li><a href="#">Promote your ad</a></li>
								<li><a href="#">Trade Delivers</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h3>Follow us on</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Trade is Worldest leading classifieds platform that brings!</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2016. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	
	
	
    <!-- JS -->
    <script src="<?php echo $base_url;?>/js/modernizr.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo $base_url;?>/js/gmaps.min.js"></script>
	<script src="<?php echo $base_url;?>/js/goMap.js"></script>
	<script src="<?php echo $base_url;?>/js/map.js"></script>
    <script src="<?php echo $base_url;?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $base_url;?>/js/smoothscroll.min.js"></script>
    <script src="<?php echo $base_url;?>/js/scrollup.min.js"></script>
    <script src="<?php echo $base_url;?>/js/price-range.js"></script> 
    <script src="<?php echo $base_url;?>/js/jquery.countdown.js"></script>    
	<script src="<?php echo $base_url;?>/js/switcher.js"></script>
	<!-- editor js file -->
	<!-- <script type="text/javascript" src="<?php //echo $base_url;?>/js/bishwas/editor.js"></script> -->

	<!-- Custom profile validation check -->

	<script type="text/javascript" src="<?php echo $base_url;?>/js/milan/allform_validation.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>/js/milan/allcourse_validation.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>/js/milan/vacancy_validation.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>/js/milan/uploadfilecheck.js"></script>


<script type="text/javascript" src="<?php echo $base_url;?>/js/milan/queries.js">
</script>
    	
	
<script>

function delete_course(param2){
	//alert(param2);
	var r = confirm("Are you sure to delete Course!");
	if (r == true) {
		var url='<?php echo $base_url;  ?>/delete/course/'+param2;
	$.post(url, $(this).serialize(), function(data){
	var data1=$.parseJSON(data);

if(data1.text=='deleted'){
	$('#ad_'+param2).hide(1500);
}
});

}
	return false;

}






function delete_admission(param1){
var r = confirm("Are you sure to delete Admission!");
if (r == true) {
		var url='<?php echo $base_url;  ?>/delete/adm/'+param1;
$.post(url, $(this).serialize(), function(data){
var data1=$.parseJSON(data);
if(data1.text=='deleted'){
$('#ad_'+param1).hide(1500);
}
});

}
return false;
}
// delete scholarship data
function delete_scholarship(param1){
var r = confirm("Are you sure to delete Scholarship!");
if (r == true) {

 $.ajax({
         type: "POST",
         url: <?php $base_url ?> + "index.php/home/delete", 
         data: {id: param1},
         dataType: "text",  
         cache:false,
         success: 
              function(data){
                alert(data);  //as a debugging message.
              }
          });// you have missed this bracket







// var url='<?php echo $base_url;  ?>/delete/sch/'+param1;
// $.post(url, $(this).serialize(), function(data){
// var data1=$.parseJSON(data);
// if(data1.text=='deleted'){
// $('#ad_'+param1).hide(1500);
// }
// });
}
return false;
}

//delete vacancies data 
function delete_vacancy(param2){
	//alert(param2);
	var r = confirm("Are you sure to delete vacancy!");
	if (r == true) {
		var url='<?php echo $base_url;  ?>/delete/vacancy/'+param2;
	$.post(url, $(this).serialize(), function(data){
	var data1=$.parseJSON(data);

if(data1.text=='deleted'){
	$('#ad_'+param2).hide(1500);
}
});

}
	return false;

} 



</script>


    <script>
$(document).ready(function(){
$('#countryId').change(function(){
var country_id=$('#countryId').val();
var url='<?php echo $base_url;  ?>/get_states/'+country_id;
$('#stateId').html("Please wait..");
$.post(url, $(this).serialize(), function(data){
var data1=$.parseJSON(data);
for(var i=0;i<=data.length;i++){
$('#stateId').append("<option value='"+data1[i].id+"'>"+data1[i].name+"</option>");
}
});
});
});

$(document).ready(function(){
$('#stateId').change(function(){
var state_id=$('#stateId').val();
var url='<?php echo $base_url;  ?>/get_cities/'+state_id;
$('#cityId').html("Please wait..");
$.post(url, $(this).serialize(), function(data){
var data1=$.parseJSON(data);
for(var i=0;i<=data.length;i++){
$('#cityId').append("<option value='"+data1[i].id+"'>"+data1[i].name+"</option>");
}
});
});
});
</script>

<!-- ############################################################################################### -->



<script>
	
	$(document).ready(function(){
// *******************   search bar ***********************
$(".search-input").on("keyup",function(){
var option=$(".search-cat option:selected").text();

var inputed=$(this).val();

var uri='<?php echo $base_url;?>/search_section';
if(inputed==''){
	 $(".search-result").empty();
	$(".search-result").css("display","none");
}else{
	$.ajax({
            type: "POST",
            url: uri,
            data: {tbl:option,input_field:inputed},
           success: function(res){
           
           $(".search-result").empty();
           $(".search-result").css("display","block");
               
           if(res=='no result found'){
               $(".search-result").css('color','red');
                $(".search-result").text('No result found !!');
               }else{
                    $(".search-result").append("<ul id='div-content-0' class='category-list'><h4>Search Results: </h4></ul>");
         var obj=$.parseJSON(res);
          option=option.toLowerCase();
            
              $.each(obj, function(k,v) {
                  //alert(option);
                  if(option=='admissions'){
                     var desc=v.description;
	          		desc = desc.replace(/<\/?[^>]+(>|$)/g, "");
	          		desc=desc.substr(0,13);
	          		$("#div-content-"+(k)).append("<div id='div-content-"+(k+1)+"'><a style='text-align:left;text-decoration:underline;font-size:18px; href='#'><div style='margin-bottom: 10px;'>"+"<b>Search result- "+(k+1)+"..."+v.admission_title+"</b>....."+v.payment+"...."+desc+"</div></a></div>");

                  }else if(option=='scholarships'){
                      var opt='scholarship';

                      var desc=v.scholarship_detail;
                      desc = desc.replace(/<\/?[^>]+(>|$)/g, "");
                      desc=desc.substr(0,13);
                      $("#div-content-"+(k)).append("<div id='div-content-"+(k+1)+"'><a style='text-align:left;text-decoration:underline;font-size:18px; href='#'><div style='margin-bottom: 10px;'>"+"<b>Search result- "+(k+1)+"..."+v.scholarship_title+"</b>....."+v.scholarship_type+"...."+desc+"</div></a></div>");



                  }
                  else if(option=='jobs'){
                      var opt='vacancy';


                      var desc=v.description;
                      desc = desc.replace(/<\/?[^>]+(>|$)/g, "");
                      desc=desc.substr(0,13);
                      $("#div-content-"+(k)).append("<div id='div-content-"+(k+1)+"'><a style='text-align:left;text-decoration:underline;font-size:18px; href='#'><div style='margin-bottom: 10px;'>"+"<b>Search result- "+(k+1)+"..."+v.job_title+"</b>....."+v.job_category+"...."+v.requirement+"...."+v.skills+"...."+desc+"</div></a></div>");



                  }
                  else{
                      // var opt='first_course';
                      var desc=v.description;
                      desc = desc.replace(/<\/?[^>]+(>|$)/g, "");
                      desc=desc.substr(0,13);
                      $("#div-content-"+(k)).append("<div id='div-content-"+(k+1)+"'><a style='text-align:left;text-decoration:underline;font-size:18px; href='#'><div style='margin-bottom: 10px;'>"+"<b>Search result- "+(k+1)+"..."+v.course_name+"</b>....."+v.category+"...."+v.f1_url+"...."+v.subtitle+"...."+v.f2_url+"...."+desc+"</div></a></div>");


                  }
                  //alert("#"+(k+1));
                  
                  //var elem='<div id="elem-'+k+'"></div>';
                  //alert(elem);
                  
            });
               }
         

   

               }
   });
}


});
// *********************************************************
    });

</script>
<!-- ################################################################################################### -->




<script>
$(document).ready(function(){
$('.upload-image-one').change(function(){
	var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
});
</script>
<!-- ******************** custom script tag from bishwas ************************************** -->
<script>
	$(document).ready(function(){
		
		$(".payment-system-select").click(function(){

			$select_id=$(this).val();
			if($select_id==5){
				$(".payment-method-text").css("display","block");
				
			}else{
				$(".payment-method-text").css("display","none");
				
			}

		});
	});


		// $(document).ready(function() {

		// 		$("#txtEditor").Editor();
		// 		$("#menuBarDiv").css("display","none");
		// 	});
		$(document).ready(function(){
// class="email_check"
//alert('name and the system update');
$('.email_check').change(function(){
	 if ($(this).is(':checked')){
	 	// $('.email_check').value='1';
	 	$(this).val('1');
	 	console.log($(this).val());
	 	
	 }else{
	 	// $('.email_check').value='0';
	 	$(this).val('0');
	 	console.log($(this).val());
	 		
	 }
	
});

		});


	</script>
<!-- ****************************************************************************************** -->

























<!-- for text editor -->
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
	
  </body>

</html>