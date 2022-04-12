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
						<div id="abox-3" class="col-md-12 col-lg-3" style="margin-right:2%; border-radius:10%; min-width:32%; max-width:32%;">
										<div class="abox-1 white-color" style="padding:30px;">

								<!-- Title -->
								<p style="color: #E87722;">KSO</p>
								<h4 style="color: #E87722;  margin-top:0px;"><b>KEMITRAAN</b></h4>

								<!-- Text -->
								<p style="color: black;">Meditrans telah bermitra dengan berbagai rumah sakit dan perusaahan di Indonesia. 
									Kami berkomitmen untuk selalu dapat bermitra dengan fasilitas layanan kesehatan maupun perusahaan non kesehatan.
								</p>
								<br><br>
								<!-- Button -->
								<a><h6 style="color: #E87722;"><b>CONTACT NOW</b></h6></a>
							</div>
						</div>





						<!-- ABOUT BOX #2 -->
						<div id="abox-2" class="col-md-12 col-lg-3" style="margin-right:2%; border-radius:10%; min-width:32%; max-width:32%;">
							<div class="abox-1 white-color" style="padding:30px;" >

							<p style="font-size:14px; color: #E87722;">PRODUK TERLENGKAP</p>
								<h4 style="color: #E87722; margin-top:0px;"><b>BERKUALITAS TERBAIK</b></h4>

								<!-- Text -->
								<p style="color: black;">Kami hanya memberikan produk dan jasa dengan kualitas terbaik untuk pelanggan setia kami. 
										Baik itu Business-to-Business (B2B), maupun Business-to-Customer B2C. Meditrans juga memiliki sistem terbaik 
										dalam hal pengembangan layanan kerjasama dengan Rumah Sakit.

								</p>
							
								<!-- Button -->
								<a><h6 style="color: #E87722;"><b>SHOP NOW</b></h6></a>
							</div>
						</div>


			


						<!-- ABOUT BOX #4 -->
						<div id="abox-4" class="col-md-12 col-lg-3" style="border-radius:10%; min-width:32%; max-width:32%">
							<div class="abox-1 white-color" style="padding:30px;">

								<!-- Title -->
								<p style="color: #E87722;">TEMUI KAMI DI KOTA ANDA</p>
								<h4 style="color: #E87722;  margin-top:0px;"><b>JARINGAN LUAS</b></h4>

								<!-- Text -->
								<p class="mt-20" style="color: black;">Meditrans memiliki jaringan dan distribusi yang luas meliputi 
										berbagai institusi kesehatan termasuk rumah sakit pemerintah dan swasta.
								</p>
<br><br><br>
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
					<h3 style="margin-bottom:0;" class="h4-md col-lg-10 offset-lg-1 section-title white-color"><B><B>PRODUK KAMI</B></B></h3>					
				
					
					<div class="row d-flex align-items-center text-center">


					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none; padding-left:0px; margin-left:0px; padding-right:0px; margin-right:0px; ">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-060-cardiogram-4"></span>
					</div>
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">CARDIOVASCULAR</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none; padding-left:0px; margin-left:0px; padding-right:0px; margin-right:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon"> 
						<span class="flaticon-031-scanner"></span>
					</div>
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">RADIOLOGY</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none; padding-left:0px; margin-left:0px; padding-right:0px; margin-right:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-136-monitor"></span>
					</div>						
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">HEALTHCARE IT</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none; padding-left:0px; margin-left:0px; padding-right:0px; margin-right:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-076-microscope"></span>
					</div>						
					<!-- Title -->
					<h5 class="h5-xs white-color" style="margin-top:0;">LABORATORY</h5>																																		
					</div>
					</div>




					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#281E78; border:none; padding:0px; margin:0px;">
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
.gambar{
			width: 90%;
			height: 300px;
		
			background-repeat: no-repeat;
			background-size: cover;
			
  background-position: center;
			
			}
			</style>
		
			
			<div class="w3-content w3-display-container" style="max-width:100%; background-color:#ececec;">



			<div class="mySlides">

			<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">
			<tr><td width="50%"  class="text-center align-center">
			<img class="img-fluid" width="70%" src="images/pediatrics_700x700.jpg" alt="tab-image">
			</td>
			<td><br><br>
			<h3 class="h4-md" style="color: #281E78;font-family:'Lato';"><B>SELAMAT DATANG DI MEDITRANS</B></h3><BR>	
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
			<h3 class="h3-md" style="color: #281E78;">Advancing in Healthcare Everyday</h3>	
			<p style="text-align:justify;">Selamat datang di Meditrans. Sebuah perusahaan kesehatan 
										yang kami dirikan sejak 2012 di Surabaya yang sampai saat ini masih terus 
										mengembangkan dirinya. Bersama tim yang berpengalaman di bidangnya, sejak 
										awal dikembangkan, Meditrans telah melayani banyak rumah sakit dalam hal 
										kebutuhan layanan kesehatan.</p>

			<p style="text-align:justify;">Kami tidak hanya membantu rumah sakit untuk memenuhi kebutuhan peralatan 
										kesehatan, perusahaan kami juga bergerak di bidang kerjasama operasional (KSO). 
										Yakni berupa KSO CT Scan dan KSO Cathlab. Kami juga melayani kebutuhan renovasi 
										dan pekerjaan konstruksi rumah sakit.</p>

			<p style="text-align:justify;">Dengan banyak pengalaman yang kami miliki, Anda tidak perlu ragu untuk bermitra 
										dan bekerjasama dengan kami. Kami selalu siap memberikan yang terbaik untuk Anda.</p>										
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
			<p style="text-align:justify;">PT. Meditrans Global (PT. MTG) berdiri sejak tahun 2012 di Surabaya, berawal dari bisnis penyedia barang dan jasa dan seiring waktu kami terus mengembangkan perusahaan ini ke bidang bidang bisnis lainnya.</p>

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
			<section id="services-3" class="bg-lightgrey wide-100 services-section division" style="background-color:white; padding-top:50px;">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color" style="color: #281E78;"><b><b>PRODUCT BRAND</b></b></h3>								
						</div> 
					</div>
					<div class="row d-flex align-items-center text-center">
						<div class="col">
						
						
								<?php
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM category") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){
							?> 
							
							<a href="product-brands.php?id=<?php echo $d['cat_name']; ?>"><img class="img-fluid" width="200px" src="assets/imgs/vendor/<?php echo $d['logo']; ?>" style="padding-right:20px; padding-bottom:25px;"></a>
							
							
							<?php }?>
						</div>
					</div>
					
				
					
					
				</div>	   <!-- End container -->
			</section>	 <!-- END SERVICES-3 -->	


<!-- TOP-NEWS
			============================================= -->
			<?php
                    $r=$_GET['id'];
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a where cat_name = 'Default News Page' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
                                $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d1=mysqli_fetch_array($sql1)){ 
							?> 
			<section id="info-9" class="bg-blue info-section division">

		
            <!-- TEXT BLOCK -->		
            <div class="container">
                <div class="row d-flex align-items-center">	
                    <div class="col-lg-6">
                       
						<?php
							$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where a_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d2=mysqli_fetch_array($sql2)){
							?> 
										<div class="gambar" style="background-image: url('assets/imgs/shop/<?php echo $d2['img_name']; ?>');"></div>
		<?php } ?>
						
                    </div>	

                    <div class="col-md-6">
                        <div class="info-9-table white-color wow fadeInUp" data-wow-delay="0.4s">
						<p style="margin-bottom:1px; font-size:1em;">LATEST POST</p>
                            <!-- Title -->
                            <h4 class="h4-xs"><?php echo $d1['p_name']; ?></h4>

                            <!-- Text -->
                            <p><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 200); ?>
                                
                             
                            </p>

                            <!-- Button -->
								<a href="article-details.php?id=<?php echo $d1['id']; ?>" class="btn btn-tra-white white-hover mt-20">Find Out More</a>

                        </div>	
                    </div>
                </div>	  <!-- End row -->
            </div>	   <!-- END TEXT BLOCK -->	
<?php }} ?>

            </section>	<!-- END TOP-NEWS -->









	
			<section id="services-3" class="bg-lightgrey wide-100 services-section division" style="background-color:#ececec; padding-top:50px;">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title" style="margin-bottom:30px;">		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color" style="color: #281E78;"><b><b>NEWS, EDUCATION & OUR STORIES</b></b></h3>								
						</div> 
					</div>
				
					<div class="row">
						<div class="col-md-12">					
							<div class="owl-carousel owl-theme reviews-holder">

							<?php
                    $r=$_GET['id'];
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a limit 9") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
                                $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d1=mysqli_fetch_array($sql1)){ 
							?> 
						
								<!-- TESTIMONIAL #1 -->
								<div class="review-1">
									<div class="review-txt text-left">

										<!-- Quote -->
										<div class="quote"></div>	

										<!-- Author Avatar -->
										<div class="hover-overlay text-center">

                                                                <?php
							$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where a_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d2=mysqli_fetch_array($sql2)){
							?> 
								<div class="gambar" style="background-image: url('assets/imgs/shop/<?php echo $d2['img_name']; ?>');"></div>
	
							<?php } ?>

										</div>
										
                                        <!-- Judul News -->
										<div class="review-author">
											<br>
											<p style="margin-bottom:1px; font-size:1em;"><?php echo $d['cat_name']; ?></p>
											<h4 class="h4-md"><?php echo $d1['p_name']; ?></h4>
										</div>	

										<!-- Testimonial Text -->
										<p style="font-size: 0.5em;"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 100); ?>... <a style="font-size: 1em; color:blue;" href="article-details.php?id=<?php echo $d1['id']; ?>">Read more.</a></p>
														
																
									</div>						
								</div>	<!--END  TESTIMONIAL #1 -->
						
						<?php }} ?>



							
							</div>
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 

				
					
					
				</div>	   <!-- End container -->
			</section>	 <!-- END SERVICES-3 -->	

	




			<!-- TESTIMONIALS-2
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division" style="padding-top:50px; padding-bottom:50px;">
				<div class="container">

				<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title" style="margin-bottom:30px;">		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color" style="color: #281E78;"><b><b>OFFICE & SITE LOCATION</b></b></h3>								
						</div> 
					</div>
					<div class="row">
								<table width="100%">		<tr>
									
								<td width="50%"></td>
								
								<td style="text-align:right;">	
											<table>
											<tr>
												<th colspan="5"><h4 style="color: #281E78;"><b>TEMUKAN KAMI DI KOTA ANDA!</b></h4></th>
											
											</tr>
											<tr>
												<td><i style="color:red;" class="fab fa-discourse"></i> Jakarta</td>
												<td> </td>
												<td><i class="fab fa-discourse"></i> Bandung</td>
												<td> </td>
												<td><i class="fab fa-discourse"></i> Makassar</td>
											</tr>
											<tr>
												<td><i style="color:red;" class="fab fa-discourse"></i> Surabaya</td>
												<td></td>
												<td><i class="fab fa-discourse"></i> Palembang</td>
												<td></td>
												<td><i class="fab fa-discourse"></i> Padang</td>
											</tr>
											</table>
							</td>
						
						</tr>

							</table>

											</div><br><br>
				
					<!-- SECTION TITLE -->	
					<div class="row">	
						<?php include "lala.php";?>
					</div>	


				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-2 -->


	


<?php 
    include "footer.php";

?>


