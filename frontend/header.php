<?php 
    include "koneksi.php";
?>

<!DOCTYPE html> 
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="MedService - Medical & Medical Health Landing Page Template"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Meditrans Global - Distributor dan Penyedia Alat Kesehatan di Indonesia</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 

		<!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">		
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="css/menu.css" rel="stylesheet">	
		<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">	
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/jquery.datetimepicker.min.css" rel="stylesheet">
				
		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet"> 
	
	</head>
	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loader-wrapper">
			<div id="loader"><div class="loader-inner"></div></div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header">


				<!-- MOBILE HEADER -->
			    <div class="wsmobileheader clearfix">
			    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
			    	<span class="smllogo"><img src="images/logo-meditrans.png" width="180" height="40" alt="mobile-logo"/></span>
			    	<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
			 	</div>


			 	<!-- HEADER STRIP -->
			 	<div class="headtoppart bg-blue clearfix">
			    	<div class="headerwp clearfix">

			    		<!-- Address -->
			     		<div class="headertopleft">			     			
			        		
						<div class="address clearfix"><span>🕗 SCHEDULE MONDAY - FRIDAY 08.00 - 17.00 WIB</span> 
			        </div>
			     		</div>

			     		<!-- Social Links -->
					    <div class="headertopright">
							
							
							<a class="email" href="mailto:info@meditransglobal.co.id" style="color: black"> INFO@MEDITRANSGLOBAL.CO.ID</a>
							<a class="email" href="mailto:info@meditransglobal.co.id" style="color: black">✉  </a>
							
							
				      	</div>

				    </div>
			  	</div>	<!-- END HEADER STRIP -->


			  	<!-- NAVIGATION MENU -->
			  	<div class="wsmainfull menu clearfix">
    				<div class="wsmainwp clearfix">

    					<!-- LOGO IMAGE -->
    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
    					<div class="desktoplogo"><a href="#hero-1"><img src="images/logo-meditrans.png"  width="200"  alt="header-logo"></a></div>

    					<!-- MAIN MENU -->
      					<nav class="wsmenu clearfix">
        					<ul class="wsmenu-list">
								
							
							<?php
									$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM navbar where cat_desc=1 and cat_name!='Portofolio' and cat_name!='Galeri' and cat_name!='Kontak'");
									while($d=mysqli_fetch_array($sql)){$x=$d['cat_id'];
										?>  	

							<!-- DROPDOWN MENU -->
							<li aria-haspopup="true"><a href="<?php echo $d['logo']; ?>"><?php echo $d['cat_name'];?><span class="wsarrow"></span></a>
					           		<ul class="sub-menu">
									   <?php
										$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM navbar where cat_parent='$x' and cat_desc=2");
										while($d2=mysqli_fetch_array($sql2)){
											?>
					           			<li aria-haspopup="true"><a href="<?php echo $d2['logo']; ?>"><?php echo $d2['cat_name'];?></a></li>
					              		<?php } ?>
					           		</ul>
					          	</li>	<!-- END DROPDOWN MENU -->
								  <?php } ?>	

								<?php
									$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM navbar where cat_name='Portofolio' or cat_name='Kontak'");
									while($d=mysqli_fetch_array($sql)){
										?>  
								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="<?php echo $d['logo']; ?>"><?php echo $d['cat_name'] ?></a></li>
								<?php } ?>	

					          	<!-- NAVIGATION MENU BUTTON -->
							    <li class="nl-simple header-btn" aria-haspopup="true"><a href="appointment.html">Staff Login</a></li>
                                   
                                
        					</ul>
        				</nav>	<!-- END MAIN MENU -->

    				</div>
    			</div>	<!-- END NAVIGATION MENU -->


			</header>	<!-- END HEADER -->
