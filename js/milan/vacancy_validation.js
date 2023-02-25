<!--  ************************** this is vacancy validation file ************************************** -->

	$(document).ready(function(){
		$("#post_vacancy").click(function(e){

		$('span.error-scholarship-title').hide();
			var job_title = $(".job_title").val();
			var job_requirement= $(".job_requirement").val();
			var salary = $(".salary").val();
			var alphaReg = /^[A-Za-z0-9 ]*$/; 

			var numericReg = /^[0-9]*$/;

		if(job_title == ''){
				$('.job_title').before('<span class="error error-scholarship-title" style="color:#D8000C;">Job title field can not be empty!</span>');
				$('.job_title').css({ "border-color":"#D8000C"});
				$('.job_title').focus();
				e.preventDefault();
			}
			
			else if(!alphaReg.test(job_title)){
				$('.job_title').before('<span class="error error-scholarship-title" style="color:#D8000C;">Letters, space and numeric charecters support only!</span>');
				$('.job_title').css({"border-color":"#D8000C"});
				$('.job_title').focus();
				e.preventDefault();
		}
		else{
			if(salary == ''){
			$('.salary').before('<span class="error error-scholarship-title" style="color:#D8000C;margin-left:15px;">Salary field is empty!</span>');
			$('.salary').css({ 
        		"border-color":"#D8000C"});
			$('.salary').focus();
			e.preventDefault();
			}
		else if(!numericReg.test(salary)){
			$('.salary').before('<span class="error error-scholarship-title" style="color:#D8000C;margin-left:15px;">Numeric charecters support only!</span>');
			$('.salary').css({"border-color":"#D8000C"});
				$('.salary').focus();
				e.preventDefault();
		}else{
			
		}
		}	
	});
});


<!-- ********************* this is end of vacancy validation file ************8   -->

