<?php 
    include "header.php";

?>



			<!-- HERO-2
			============================================= -->	
			<section id="hero-2" class="hero-section division">


				<!-- SLIDER -->
				<div class="slider blue-nav">
			    	<ul class="slides">


				     	<!-- SLIDE #1 -->
				      	

                          <?php
									$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM slider_top ORDER BY urutan");
									while($d=mysqli_fetch_array($sql)){
                                        $i=0;
                                        $i=$i+1;

								?> 	
                                <li id="slide-<?php echo $i;  ?>">			
								<a href="<?php echo $d['link_slider'] ?>"><img class="img-fluid" width="1200px" height="600px" src="images/slider/<?php echo $d['slider_img'] ?>" alt="hero-image"></a>
                                </li>
                                <?php } ?>
						
					    	<!-- END SLIDE #1 -->


				    </ul>
			  	</div>	<!-- END SLIDER -->


			</section>	<!-- END HERO-2 -->




			<!-- ABOUT-1
			============================================= -->
			<section id="about-1" class="about-section division" >
				<div class="container">
					<div class="row d-flex align-items-center">


				

						<!-- ABOUT BOX #3 -->
						<div id="abox-3" class="col-md-12 col-lg-3" style="margin-right:2%; border-radius:10%; min-width:32%; max-width:32%">
										<div class="abox-1 white-color">

								<!-- Title -->
								<p style="color: #E87722;">KSO</p>
								<h4 style="color: #E87722;"><b>KEMITRAAN</b></h4>

								<!-- Text -->
								<p style="color: black;">Kami juga merupakan perusahaan Konstruksi untuk pembangunan ruangan Radiologi, 
									CT-Scan maupun Ruangan Cathlab.
								</p>
								<br><br>
								<!-- Button -->
								<a><h6 style="color: #E87722;"><b>CONTACT NOW</b></h6></a>
							</div>
						</div>





						<!-- ABOUT BOX #2 -->
						<div id="abox-2" class="col-md-12 col-lg-3" style="margin-right:2%; border-radius:10%; min-width:32%; max-width:32%;">
							<div class="abox-1 white-color" style="padding-right:20px;" >

							<p style="font-size:14px; color: #E87722;">PRODUK TERLENGKAP</p>
								<h4 style="color: #E87722;"><b>BERKUALITAS TERBAIK</b></h4>

								<!-- Text -->
								<p style="color: black;">Kerjasama Operasional dalam penyediaan peralatan medis khususnya di Bidang Radiologi dan Kardiologi.
								</p>
								<br><br>
								<!-- Button -->
								<a><h6 style="color: #E87722;"><b>SHOP NOW</b></h6></a>
							</div>
						</div>


			


						<!-- ABOUT BOX #4 -->
						<div id="abox-4" class="col-md-12 col-lg-3" style="border-radius:10%; min-width:32%; max-width:32%">
							<div class="abox-1 white-color">

								<!-- Title -->
								<p style="color: #E87722;">TEMUI KAMI DI KOTA ANDA</p>
								<h4 style="color: #E87722;"><b>JARINGAN YANG LUAS</b></h4>

								<!-- Text -->
								<p class="mt-20" style="color: black;">Hadir dengan inovasi terbaru kami yaitu produk telemedicine dan telediagnostik.
								</p>
<br><br>
								<!-- Button -->
								<a><h6 style="color: #E87722;"><b>LOCATION</b></h6></a>
							</div>
						</div>


					</div>    <!-- End row -->
				</div>	   <!-- End container -->	
			</section>	<!-- END ABOUT-1 -->




			<!-- ABOUT-5
			============================================= -->
			<section id="about-5" class="pt-100 about-section division" style="background-color:#281E78; padding-top:50px;">
				<div class="container" style="background-color:#281E78;">

				
					<!-- Title 	-->	
					<h3 style="margin-bottom:0;" class="h3-md col-lg-10 offset-lg-1 section-title white-color">Produk Kami</h3>						
				
					
					<div class="row d-flex align-items-center text-center">


					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-060-cardiogram-4"></span>
					</div>
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">CARDIOVASCULAR</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-031-scanner"></span>
					</div>
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">RADIOLOGY</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-136-monitor"></span>
					</div>						
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">HEALTHCARE IT</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-076-microscope"></span>
					</div>						
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">LABORATORY</h5>																																		
					</div>
					</div>




					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-129-hospital-1"></span>
					</div>						
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">CONSTRUCTION</h5>																																		
					</div>
					</div>
				
					
									
				
						
					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-5 -->



			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

			<style>
			.mySlides {display:none}
			.w3-left, .w3-right, .w3-badge {cursor:pointer; color:red;}
			.w3-badge {height:13px;width:13px;padding:0; color: orange;}
			a b{
				text-decoration:bold;
			}
			.w3-transparent, .w3-hover-none:hover {
    background-color: red;
}
			</style>
			
			<div class="w3-content w3-display-container" style="max-width:100%; background-color:#ececec;">



			<div class="mySlides">

			<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">
			<tr><td width="50%"  class="text-center align-center">
			<img class="img-fluid" width="70%" src="images/pediatrics_700x700.jpg" alt="tab-image">
			</td>
			<td><br><br>
			<h3 class="h3-md" style="color: #281E78;">SELAMAT DATANG DI MEDITRANS</h3>	
			<p style="text-align:justify;">MPT. Meditrans Global (PT. MTG) berdiri sejak tahun 2012 di Surabaya, berawal dari bisnis penyedia barang dan jasa dan seiring waktu kami terus mengembangkan perusahaan ini ke bidang bidang bisnis lainnya.</p>

			<p style="text-align:justify;">Saat ini kami memfokuskan pengembangan perusahaan dalam hal pelayanan Barang dan Jasa penunjang kesehatan. 
				Kami memiliki team yang solid untuk bekerjasama dengan Rumah Sakit ataupun perusahaan penyedia peralatan kesehatan baik principal ataupun pihak KSO untuk memberikan konsultasi dan pelaksanaan pekerjaan Pra Instalasi.</p>
				<br><a href="#" class="btn btn-md btn-blue blue-hover">Selengkapnya</a>
			</td>
			<td width="5%"></td>
			</table>			
			</div>
			
			<div class="mySlides">

			<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">
			<tr><td width="50%"  class="text-center align-center">
			<img class="img-fluid" width="70%" src="images/pediatrics_700x700.jpg" alt="tab-image">
			</td>
			<td><br><br>
			<h3 class="h3-md" style="color: #281E78;">SELAMAT DATANG DI MTG</h3>	
			<p style="text-align:justify;">MPT. Meditrans Global (PT. MTG) berdiri sejak tahun 2012 di Surabaya, berawal dari bisnis penyedia barang dan jasa dan seiring waktu kami terus mengembangkan perusahaan ini ke bidang bidang bisnis lainnya.</p>

			<p style="text-align:justify;">Berlatar belakang pendiri perusahaan yang memiliki pengalaman dibidang peralatan penunjang kesehatan, Saat ini kami memfokuskan pengembangan perusahaan dalam hal pelayanan Barang dan Jasa penunjang kesehatan. 
				Kami memiliki team yang solid untuk bekerjasama dengan Rumah Sakit ataupun perusahaan penyedia peralatan kesehatan baik principal ataupun pihak KSO untuk memberikan konsultasi dan pelaksanaan pekerjaan Pra Instalasi peralatan kesehatan seperti instalasi X-Ray, CT-Scan, MRI dan Cathlab.</p>
				<br><a href="#" class="btn btn-md btn-blue blue-hover">Selengkapnya</a>
			</td>
			<td width="5%"></td>
			</table>			
			</div>

			<div class="mySlides">

			<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">
			<tr><td width="50%"  class="text-center align-center">
			<img class="img-fluid" width="70%" src="images/pediatrics_700x700.jpg" alt="tab-image">
			</td>
			<td><br><br>
			<h3 class="h3-md" style="color: #281E78;">SELAMAT DATANG DI MTGLOBAL</h3>	
			<p style="text-align:justify;">MPT. Meditrans Global (PT. MTG) berdiri sejak tahun 2012 di Surabaya, berawal dari bisnis penyedia barang dan jasa dan seiring waktu kami terus mengembangkan perusahaan ini ke bidang bidang bisnis lainnya.</p>

			<p style="text-align:justify;">Berlatar belakang pendiri perusahaan yang memiliki pengalaman dibidang peralatan penunjang kesehatan, Saat ini kami memfokuskan pengembangan perusahaan dalam hal pelayanan Barang dan Jasa penunjang kesehatan. 
				Kami memiliki team yang solid untuk bekerjasama dengan Rumah Sakit ataupun perusahaan penyedia peralatan kesehatan baik principal ataupun pihak KSO untuk memberikan konsultasi dan pelaksanaan pekerjaan Pra Instalasi peralatan kesehatan seperti instalasi X-Ray, CT-Scan, MRI dan Cathlab.</p>
				<br><a href="#" class="btn btn-md btn-blue blue-hover">Selengkapnya</a>
			</td>
			<td width="5%"></td>

			
			</table>			
			</div>
		
			<button class="w3-button w3-display-left w3-red" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-display-right w3-red" onclick="plusDivs(1)">&#10095;</button>
			<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
			
				<span class="w3-badge demo w3-border w3-red w3-hover-red" onclick="currentDiv(1)"></span>
				<span class="w3-badge demo w3-border w3-red w3-hover-red" onclick="currentDiv(2)"></span>
				<span class="w3-badge demo w3-border w3-red w3-hover-red" onclick="currentDiv(3)"></span>
			</div>
			</div>

				<script>
				var slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n) {
				showDivs(slideIndex += n);
				}

				function currentDiv(n) {
				showDivs(slideIndex = n);
				}

				function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("demo");
				if (n > x.length) {slideIndex = 1}
				if (n < 1) {slideIndex = x.length}
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" w3-white", "");
				}
				x[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " w3-white";
				}
				</script>



			<!-- SERVICES-3
			============================================= -->
			<section id="services-3" class="bg-lightgrey wide-100 services-section division" style="background-color:white;">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		
							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color" style="color: #281E78;"><b>PRODUCT BRAND</b></h3>								
						</div> 
					</div>
				
					
				
					
					
				</div>	   <!-- End container -->
			</section>	 <!-- END SERVICES-3 -->	

			============================================= -->
			<section id="services-3" class="bg-lightgrey wide-100 services-section division" style="background-color:#ececec;">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		
							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color" style="color: #281E78;"><b>OUR STORIES, NEWS, EDUCATION, & RECENT POST</b></h3>								
						</div> 
					</div>
				
					<div class="row">
			</div>
				
					
					
				</div>	   <!-- End container -->
			</section>	 <!-- END SERVICES-3 -->	


		
			<!-- INFO-6
			============================================= -->
			<section id="info-6" class="bg-blue info-section division">


				<!-- TEXT BLOCK -->		
				<div class="container">
					<div class="row d-flex align-items-center">	
						<div class="col-lg-6 offset-lg-6">
							<div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
					 			<span class="section-id id-color">Qualified Doctors</span>

								<!-- Title -->
								<h3 class="h3-md">Group of Certified and Experienced Doctors</h3>							

								<!-- CONTENT BOX #1 -->
								<div class="box-list">	
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque vel laoreet
									   turpis urna augue, viverra a augue eget, dictum tempor diam pulvinar massa purus nulla
									</p>				
								</div>

								<!-- CONTENT BOX #2 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium
									   purus feugiat dolor impedit
									</p>							
								</div>

								<!-- CONTENT BOX #3 -->
								<div class="box-list">	
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien undo pretium
									   purus feugiat dolor impedit magna purus pretium gravida donec ligula massa in faucibus
									</p>				
								</div>

								<!-- Button -->
								<a href="all-doctors.html" class="btn btn-tra-white blue-hover mt-25">Meet The Doctors</a>
								
							</div>	
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- END TEXT BLOCK -->	


				<!-- INFO-6 IMAGE -->
				<div class="info-6-img text-center"></div>


			</section>	<!-- END INFO-6 -->		




			<!-- TESTIMONIALS-2
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
				<div class="container">

				<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		
							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color" style="color: #281E78;"><b>OFFICE & SITE LOCATION</b></h3>								
						</div> 
					</div>
					<div class="row">
											
											<table>
											<tr>
												<th colspan="5">First Name</th>
											
											</tr>
											<tr>
												<td><i class="fab fa-placeholder"></i> Jakarta</td>
												<td> </td>
												<td><div class="sbox-3-icon"><span class="flaticon-placeholder"></span></div> Bandung</td>
												<td> </td>
												<td><div class="sbox-3-icon"><span class="flaticon-placeholder"></span></div> Makassar</td>
											</tr>
											<tr>
												<td><div class="sbox-3-icon"><span class="flaticon-placeholder"></span></div> Surabaya</td>
												<td></td>
												<td><div class="sbox-3-icon"><span class="flaticon-placeholder"></span></div> Palembang</td>
												<td></td>
												<td><div class="sbox-3-icon"><span class="flaticon-placeholder"></span></div> Padang</td>
											</tr>
											</table>
											</div>
				
					<!-- SECTION TITLE -->	
					<div class="row">	
						<img src="images/map1.png" width="100%" alt="testimonial-avatar">
					</div>	


				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-2 -->





			<!-- BLOG-1
			============================================= -->
			<section id="blog-1" class="wide-60 blog-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Our Stories, Tips & Latest News</h3>	

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus, 
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>
								
						</div>
					</div>


			 		<!-- BLOG POSTS HOLDER -->
				 	<div class="row">


				 		<!-- BLOG POST #1 -->
				 		<div class="col-lg-4">
				 			<div class="blog-post wow fadeInUp" data-wow-delay="0.4s">

				 				<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img">
									<img class="img-fluid" src="images/blog/post-1-img.jpg" alt="blog-post-image" />	
								</div>

				 				<!-- BLOG POST TITLE -->
								<div class="blog-post-txt">

									<!-- Post Title -->
									<h5 class="h5-sm steelblue-color"><a href="single-post.html">5 Benefits Of Integrative Medicine</a></h5>

									<!-- Post Data -->
									<span>May 03, 2019 by <span>Dr.Jeremy Smith</span></span>

									<!-- Post Text -->
									<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
									   gravida donec ipsum, at porta justo...
									</p>

								</div>

							</div>
				 		</div>	<!-- END  BLOG POST #1 -->


				 		<!-- BLOG POST #2 -->
				 		<div class="col-lg-4">
				 			<div class="blog-post wow fadeInUp" data-wow-delay="0.6s">

				 				<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img">
									<img class="img-fluid" src="images/blog/post-2-img.jpg" alt="blog-post-image" />	
								</div>

				 				<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Title -->
									<h5 class="h5-sm steelblue-color"><a href="single-post.html">Your Health Is In Your Hands</a></h5>

									<!-- Post Data -->
									<span>Apr 28, 2019 by <span>Dr.Jonathan Barnes</span></span>

									<!-- Post Text -->
									<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
									   gravida donec ipsum, at porta justo...
									</p>

								</div>

							</div>
				 		</div>	<!-- END  BLOG POST #2 -->


				 		<!-- BLOG POST #3 -->
				 		<div class="col-lg-4">
				 			<div class="blog-post wow fadeInUp" data-wow-delay="0.8s">

				 				<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img">
									<img class="img-fluid" src="images/blog/post-3-img.jpg" alt="blog-post-image" />	
								</div>

				 				<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Title -->
									<h5 class="h5-sm steelblue-color"><a href="single-post.html">How Weather Impacts Your Health</a></h5>

									<!-- Post Data -->
									<span>Apr 17, 2019 by <span>Dr.Megan Coleman</span></span>

									<!-- Post Text -->
									<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
									   gravida donec ipsum, at porta justo...
									</p>

								</div>

							</div>
				 		</div>	<!-- END  BLOG POST #3 -->


					</div>	<!-- END BLOG POSTS HOLDER -->


				</div>	   <!-- End container -->		
			</section>	<!-- END BLOG-1 -->




			<!-- BANNER-2
			============================================= -->
			<section id="banner-2" class="pt-80 banner-section division">
				<div class="bg-scroll bg-inner bg-image division">
					<div class="container white-color">
						<div class="row d-flex align-items-center">


							<!-- CALL TO ACTION IMAGE -->
							<div class="col-lg-5">
								<div class="banner-2-img">
									<img class="img-fluid" src="images/image-05.png" alt="banner-image" />	
								</div>
							</div>


							<!-- BANNER TEXT -->
							<div class="col-lg-6 offset-lg-1">
								<div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s">

									<!-- Section ID -->	
					 				<span class="section-id id-color">Modern Medicine</span>

									<!-- Title  -->
									<h3 class="h3-lg">Better Technologies for Better Healthcare</h3>

									<!-- Text -->
									<p>Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue
									   egestas suscipit lectus mauris lectus laoreet gestas neque undo luctus feugiat.
									   Aliquam a augue suscipit
								    </p>

								    <!-- Button -->
									<a href="all-doctors.html" class="btn btn-tra-white blue-hover">View Our Doctors</a>

								</div>
							</div>	<!-- END BANNER TEXT -->


						</div>	  <!-- End row -->
					</div>	   <!-- End container -->
				</div>		<!-- End Inner Background -->		
			</section>	<!-- END BANNER-2 -->

<?php 
    include "footer.php";

?>


