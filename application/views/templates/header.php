<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Admissions, scholarships, jobs, colleges, schools , educational consultancies , courses in Nepal</title>

   <!-- CSS -->
   <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
	<link id="preset" rel="stylesheet" href="css/presets/preset1.css">	
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="css/bishwas/custom.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->



    <!-- editor files -->
    	<link rel="stylesheet" href="css/bishwas/editor.css">
    <!-- end of editor files -->




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo $base_url;?>">Home </a>
								<!--ul class="dropdown-menu">
									<li class="active"><a href="index.html">Home Default </a></li>
									<li><a href="index-one.html">Home Page V-1</a></li>
									<li><a href="index-two.html">Home Page V-2</a></li>
									<li><a href="index-three.html">Home Page V-3</a></li>
									<li><a href="index-car.html">Home Page V-4<span class="badge">New</span></a></li>
									<li><a href="index-car-two.html">Home Page V-5<span class="badge">New</span></a></li>
								</ul-->
							</li>
							<li><a href="categories.html">Admissions</a></li>
							<li><a href="details.html">Scholarships</a></li>
							<li><a href="faq.html">Courses</a></li> 
							<li><a href="faq.html">Jobs</a></li> 
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
					<?php if($logged_in==true){ ?>
                    <!-- language-dropdown -->
					<div class="dropdown language-dropdown">
						<a data-toggle="dropdown" href="#"><span class="change-text">
						<?php echo $profile_picture;?>
					<?php echo  $first_name.' '.$last_name;   ?></span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="#">Messages</a></li>
							<li><a href="#">Notifications</a></li>
                            <li><a href="#">Settings</a></li>
						</ul>								
					</div><!-- language-dropdown -->
					<?php } ?>

					<!-- sign-in -->					
					<ul class="sign-in">
						<li><a href="<?php echo $login_link;?>" class="btn" onclick="FB.logout();"><?php if($logged_in==true){ echo 'Logout';  } else {  echo 'Facebook Login';         }?></a></li>					
                        </ul><!-- sign-in -->					

				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
    	  <script src="<?php echo $base_url;?>/js/jquery.min.js"></script>
    	      <script src="<?php echo $base_url;?>/js/bootstrap.min.js"></script>
    	          <script src="<?php echo $base_url;?>/js/custom.js"></script>

    <script>
	$(document).ready(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '165261643653331',
      version: 'v2.7' // or v2.1, v2.2, v2.3, ...
    });     
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });
});
	</script>

		<script type="text/javascript">
		
		site_url='<?php  echo base_url(); ?>';
		

	</script>

