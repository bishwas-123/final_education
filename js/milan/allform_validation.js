<!--  ************************** this is form validation file ************************************** -->

	$(document).ready(function(){


		$(".form_post").click(function(e){

			$('span.error-scholarship-title').hide();
			var title_addmission = $(".my_title").val();
			var fee = $(".numeric_fs").val();
			var alphaReg = /^[A-Za-z0-9 ]*$/;  
			var numericReg = /^[0-9]*$/;
		

		if(title_addmission == ''){
				$('.my_title').before('<span class="error error-scholarship-title" style="color:#D8000C;">Title field can not be empty!</span>');
				$('.my_title').css({ "border-color":"#D8000C"});
				$('.my_title').focus();
  
				e.preventDefault();
			}
			
			else if(!alphaReg.test(title_addmission)){
				$('.my_title').before('<span class="error error-scholarship-title" style="color:#D8000C;">Letters, space and numeric charecters support only!</span>');
				$('.my_title').css({"border-color":"#D8000C"});
				$('.my_title').focus();
				e.preventDefault();
		}
		else{

			if(fee == ''){
		$('.numeric_fs').before('<span class="error error-scholarship-title" style="color:#D8000C;margin-left:15px;">Title field can not be empty!</span>');
		$('.numeric_fs').css({ 
        		"border-color":"#D8000C"});
		$('.numeric_fs').focus();
			e.preventDefault();
		}
		else if(!numericReg.test(fee)){
			$('.numeric_fs').before('<span class="error error-scholarship-title" style="color:#D8000C;margin-left:15px;">Numeric charecters support only!</span>');
			$('.numeric_fs').css({"border-color":"#D8000C"});
				$('.numeric_fs').focus();
				e.preventDefault();
		}	
		else {
		
		}
			
		}

		});
	});

<!-- ********************* this is end of form validation file ************8   -->

