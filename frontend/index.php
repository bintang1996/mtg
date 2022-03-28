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
			<section id="services-3" class="bg-lightgrey wide-100 services-section division" style="background-color:white; padding-top:50px;">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		
							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color" style="color: #281E78;"><b>PRODUCT BRAND</b></h3>								
						</div> 
					</div>
					<div class="row d-flex align-items-center text-center">
						<div class="col">
							<?php
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM category") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){
							?> 
							
							<a href="product-brands.php?id=<?php echo $d['cat_name']; ?>"><img class="img-fluid" width="200px" src="assets/imgs/vendor/<?php echo $d['logo']; ?>"></a>
							
							
							<?php }?>
						</div>
					</div>
					
				
					
					
				</div>	   <!-- End container -->
			</section>	 <!-- END SERVICES-3 -->	

	
			<section id="services-3" class="bg-lightgrey wide-100 services-section division" style="background-color:#ececec; padding-top:50px;">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		
							<!-- Title 	-->	
							<h4 class="h3-md steelblue-color" style="color: #281E78;"><b>OUR STORIES, NEWS, EDUCATION, & RECENT POST</b></h4>								
						</div> 
					</div>
				
					<div class="row">
			</div>
				
					
					
				</div>	   <!-- End container -->
			</section>	 <!-- END SERVICES-3 -->	

	




			<!-- TESTIMONIALS-2
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division" style="padding-top:50px; padding-bottom:50px;">
				<div class="container">

				<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title" style="margin-bottom:30px;">		
							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color" style="color: #281E78;"><b>OFFICE & SITE LOCATION</b></h3>								
						</div> 
					</div>
					<div class="row">
											
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


