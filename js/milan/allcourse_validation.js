$(document).ready(function(){


		$(".course_post").click(function(e){

			$('span.error-scholarship-title').hide();
			var course_title = $("#course_title").val();
			var alphaReg = /^[A-Za-z0-9 ]*$/; 
			var email_check = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			

		if(course_title == ''){
				$('#course_title').before('<span class="error error-scholarship-title" style="color:#D8000C;">Course field can not be empty.</span>');
				$('#course_title').css({ "border-color":"#D8000C"});
				$('#course_title').focus();
  				e.preventDefault();
			}
			else if(!alphaReg.test(course_title)){
				$('#course_title').before('<span class="error error-scholarship-title" style="color:#D8000C;">Letters, space and numeric charecters support only!</span>');
				$('#course_title').css({"border-color":"#D8000C"});
				$('#course_title').focus();
				e.preventDefault();
		}
		});
	$(".course_next").click(function(e){
			$('span.error-scholarship-title').hide();
			var course_subtitle = $("#course_subtitle").val();
			var alphaReg = /^[a-zA-Z ]*$/; 
			

		if(course_subtitle == ''){
				$('#course_subtitle').before('<span class="error error-scholarship-title" style="color:#D8000C;">Course subtitle field can not be empty!</span>');
				$('#course_subtitle').css({ "border-color":"#D8000C"});
				$('#course_subtitle').focus();
  				e.preventDefault();
			}
			else if(!alphaReg.test(course_subtitle)){
				$('#course_subtitle').before('<span class="error error-scholarship-title" style="color:#D8000C;">Letters, space and numeric charecters support only!</span>');
				$('#course_subtitle').css({"border-color":"#D8000C"});
				$('#course_subtitle').focus();
				e.preventDefault();
		}
		});




	});
