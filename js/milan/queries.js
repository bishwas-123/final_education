$(document).ready(function(){
		$("#send-myMessage").click(function(e){
			
			var fullName = $("input[name='fullName']").val();
			var emailID = $("input[name='emailID']").val();
			var mobileNumber = $("input[name='mobileNumber']").val();
			var user_id = $("input[name='user_id']").val();
			var subject = $("input[name='subject']").val();
			var user_id = $("input[name='user_id']").val();
			var user_message =$('#pure-message').text();
			var base_url = site_url +"send_user_message_control";
			$('span.error-scholarship-title').hide();
			var alphaReg = /^[A-Za-z ]*$/;  
			var numericReg = /^[0-9]*$/;
			var email_check = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			//alert(mobileNumber.length);
		if(fullName == ''){
				$("input[name='fullName']").before('<span class="error error-scholarship-title" style="color:#D8000C;">Full name field can not be empty !</span>');
				$("input[name='fullName']").css({ "border-color":"#D8000C"});
				$("input[name='fullName']").focus();
  				e.preventDefault();
			}
			else if(!alphaReg.test(fullName)){
				$("input[name='fullName']").before('<span class="error error-scholarship-title" style="color:#D8000C;">Letters only supported !</span>');
				$("input[name='fullName']").css({"border-color":"#D8000C"});
				$("input[name='fullName']").focus();
				e.preventDefault();
		}else{
			if(emailID == ''){
				$("input[name='emailID']").before('<span class="error error-scholarship-title" style="color:#D8000C;">Email field can not be empty !</span>');
				$("input[name='emailID']").css({ "border-color":"#D8000C"});
				$("input[name='emailID']").focus();
  				e.preventDefault();
			}
			else if(!email_check.test(emailID)){
				$("input[name='emailID']").before('<span class="error error-scholarship-title" style="color:#D8000C;">Email ID is not valid !</span>');
				$("input[name='emailID']").css({"border-color":"#D8000C"});
				$("input[name='emailID']").focus();
				e.preventDefault();
		}
		else{
			if(mobileNumber == ''){
				$("input[name='mobileNumber']").before('<span class="error error-scholarship-title" style="color:#D8000C;">Mobile number field can not be empty !</span>');
				$("input[name='mobileNumber']").css({ "border-color":"#D8000C"});
				$("input[name='mobileNumber']").focus();
  				e.preventDefault();
			}
			else if(!numericReg.test(mobileNumber)){
				$("input[name='mobileNumber']").before('<span class="error error-scholarship-title" style="color:#D8000C;">Numbers only supported !</span>');
				$("input[name='mobileNumber']").css({"border-color":"#D8000C"});
				$("input[name='mobileNumber']").focus();
				e.preventDefault();
		}else if(mobileNumber.length!= 10){
				$("input[name='mobileNumber']").before('<span class="error error-scholarship-title" style="color:#D8000C;">Mobile number must be 10 digit !</span>');
				$("input[name='mobileNumber']").css({"border-color":"#D8000C"});
				$("input[name='mobileNumber']").focus();
				e.preventDefault();
		}else{
			  $.ajax({
               type: "POST",
               url: base_url, 
               data: {fullName:fullName, emailID:emailID, mobileNumber:mobileNumber,subject:subject,user_message:user_message,user_id:user_id},
               dataType: "json",
               success: function(dat){
                if (dat.status === 'success'){ 
                	$('#myModal').empty();
$('#myModal').append('<div class="modal-dialog"><div class="modal-content"><div class="modal-header"><div class="text-center" style="color:#00a651;"><i class="fa fa-check-circle fa-5x icon-success" aria-hidden="true"></i></div></div><div class="modal-body"><h3 class="text-center" style="color:#00a651;;">'
                    +dat.message+'</h3></div></div></div>');
					$(document).mouseup(function (){
					var modal_dialog = $(".modal-dialog");
					if(!$('#myModal').is(e.target) && modal_dialog.has(e.target).length == 0){
						window.location.reload();
					}
				});
                    }
                },
                error: function(e) {
                    alert("Oops! Try again later or else sends us message regarding this issue. Thank you!");
                }
            });
			
		}
		}
		}
		});
	
	});