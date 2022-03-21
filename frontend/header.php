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
		<title>MedService - Medical & Medical Health Landing Page Template</title>
							
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
			    	<span class="smllogo"><img src="images/logo-grey.png" width="180" height="40" alt="mobile-logo"/></span>
			    	<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
			 	</div>


			 	<!-- HEADER STRIP -->
			 	<div class="headtoppart bg-blue clearfix">
			    	<div class="headerwp clearfix">

			    		<!-- Address -->
			     		<div class="headertopleft">			     			
			        		<div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i>121 King St,
			            		Melbourne, VIC 3000 </span> <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i>(800)-569-7890</a>
			            	</div>
			     		</div>

			     		<!-- Social Links -->
					    <div class="headertopright">
					    	<a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span class="mobiletext02">Google</span></a>
					        <a class="linkedinicon" title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i> <span class="mobiletext02">Linkedin</span></a>
					        <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
					        <a class="facebookicon" title="Facebook" href="#"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
				      	</div>

				    </div>
			  	</div>	<!-- END HEADER STRIP -->


			  	<!-- NAVIGATION MENU -->
			  	<div class="wsmainfull menu clearfix">
    				<div class="wsmainwp clearfix">

    					<!-- LOGO IMAGE -->
    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
    					<div class="desktoplogo"><a href="#hero-1"><img src="images/logo-grey.png"  width="180" height="40" alt="header-logo"></a></div>

    					<!-- MAIN MENU -->
      					<nav class="wsmenu clearfix">
        					<ul class="wsmenu-list">

                                <!-- query untuk memilih db => navbar-->
								<?php
									$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM navbar ");
									while($d=mysqli_fetch_array($sql)){$x=$d['cat_id'];
										?>
        						<!-- DROPDOWN MENU -->
					        	<li aria-haspopup="true"><a href="#"><?php echo $d['cat_name'];?><span class="wsarrow"></span></a>
					           		<ul class="sub-menu">
					           			<li aria-haspopup="true"><a href="#">Dummy Link Style #1</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #2</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #3</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #4</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #5</a></li>
					           		</ul>
					          	</li>	<!-- END DROPDOWN MENU -->
                                

					          
							<?php } ?>
					          	<!-- HALF MENU -->
					          	<li aria-haspopup="true"><a href="#">Half Menu <span class="wsarrow"></span></a>
					            	<div class="wsmegamenu clearfix halfmenu">
					              		<div class="container-fluid">
					                		<div class="row">

					                			<!-- Links -->
							                	<ul class="col-lg-6 col-md-12 col-xs-12 link-list">
							                    	<li class="title">For Patients:</li>
								                    <li><a href="#">Meet The Doctors</a></li>							                    
								                    <li><a href="#">Patient Info Sheets</a></li>
								                    <li><a href="#">Online Patients Portal</a></li>
								                    <li><a href="#">Patients Testimonials</a></li>
								                    <li><a href="#">Blog & Latest News</a></li>								                    
							                  	</ul>

							                  	<!-- Links -->
								                <ul class="col-lg-6 col-md-12 col-xs-12 link-list">
								                    <li class="title">Quick Links:</li>
								                    <li><a href="#">Terms & Privacy Policy</a></li>
								                    <li><a href="#">Donor Privacy Policy</a></li>
								                    <li><a href="#">Workers Compensation</a></li>
								                    <li><a href="#">Insurance Information</a></li>
								                    <li><a href="#">After Hours Care</a></li>
								                </ul>

					                		</div>
					              		</div>
					            	</div>
					          	</li>	<!-- END HALF MENU -->


					          	<!-- MEGAMENU -->
					          	<li aria-haspopup="true"><a href="#">Mega Menu <span class="wsarrow"></span></a>
            						<div class="wsmegamenu clearfix">
             							<div class="container">
               								<div class="row">


               									<!-- MEGAMENU QUICK LINKS -->
               									<ul class="col-lg-3 col-md-12 col-xs-12 link-list">
								                    <li class="title">Quick Links:</li>
								                    <li><a href="#">For Referring Doctors</a></li>
								                    <li><a href="#">Terms & Privacy Policy</a></li>
								                    <li><a href="#">Donor Privacy Policy</a></li>								                    
								                    <li><a href="#">Patient Info Sheets</a></li>
								                    <li><a href="#">Online Patients Portal</a></li>
								                    <li><a href="#">Insurance Information</a></li>
								                    <li><a href="#">Patients Testimonials</a></li>
								                </ul>


								                <!-- MEGAMENU FEATURED NEWS -->
								                <div class="col-lg-5 col-md-12 col-xs-12">

								                	<!-- Title -->
								                    <h3 class="title">Featured News:</h3>

								                    <!-- Image -->
								                    <div class="fluid-width-video-wrapper"><img src="images/blog/featured-news.jpg" alt="featured-news" /></div>

								                    <!-- Text -->
								                    <h5 class="h5-xs"><a href="#">5 Benefits of integrative medicine</a></h5>
								                    <p class="wsmwnutxt">Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
								                       tempus feugiat dolor impedit magna purus at pretium gravida donec
								                    </p>

								                </div>	<!-- END MEGAMENU FEATURED NEWS -->


								                <!-- MEGAMENU LATEST NEWS -->
								                <div class="col-lg-4 col-md-12 col-xs-12">

								                	<!-- Title -->
                    								<h3 class="title">Latest News:</h3>

                    								<!-- Latest News -->
                    								<ul class="latest-news">
									
														<!-- Post #1 -->
														<li class="clearfix d-flex align-items-center">

															<!-- Image -->
															<img class="img-fluid" src="images/blog/latest-post-1.jpg" alt="blog-post-preview" />

															<!-- Text -->
															<div class="post-summary">
																<a href="single-post.html">Etiam sapien risus ante auctor tempus accumsan an empor ...</a>
																<p>43 Comments</p>
															</div>

														</li>
														
														<!-- Post #2 -->
														<li class="clearfix d-flex align-items-center">

															<!-- Image -->
															<img class="img-fluid" src="images/blog/latest-post-2.jpg" alt="blog-post-preview" />

															<!-- Text -->
															<div class="post-summary">
																<a href="single-post.html">Blandit tempor a sapien ipsum, porta risus auctor justo ...</a>
																<p>38 Comments</p>
															</div>

														</li>
														
														<!-- Post #3 -->
														<li class="clearfix d-flex align-items-center">

															<!-- Image -->
															<img class="img-fluid" src="images/blog/latest-post-3.jpg" alt="blog-post-preview" />

															<!-- Text -->
															<div class="post-summary">
																<a href="single-post.html">Cursus risus auctor tempus risus laoreet turpis auctor varius ...</a>
																<p>29 Comments</p>
															</div>

														</li>
													</ul>
                    							</div>	<!-- END MEGAMENU LATEST NEWS -->

								                
							                </div>  <!-- End row -->	
							            </div>  <!-- End container -->	
							        </div>  <!-- End wsmegamenu -->	
							    </li>	<!-- END MEGAMENU -->

							    
							    <!-- SIMPLE NAVIGATION LINK -->
							    <li class="nl-simple" aria-haspopup="true"><a href="#">Simple Link</a></li>

							    <!-- NAVIGATION MENU BUTTON -->
							    <li class="nl-simple header-btn" aria-haspopup="true"><a href="appointment.html">Make an Appointment</a></li>
                                   
                                
        					</ul>
        				</nav>	<!-- END MAIN MENU -->

    				</div>
    			</div>	<!-- END NAVIGATION MENU -->


			</header>	<!-- END HEADER -->
