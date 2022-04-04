<?php include "header.php";?>

		<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">News</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">News</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	

            <!-- TOP-NEWS
			============================================= -->
			<section id="info-9" class="bg-blue info-section division">


            <!-- TEXT BLOCK -->		
            <div class="container">
                <div class="row d-flex align-items-center">	
                    <div class="col-lg-6">
                        <div class="tab-img">
							<img class="img-fluid" src="images/pediatrics_700x700.jpg" alt="tab-image" />
						</div>
                    </div>	

                    <div class="col-md-6">
                        <div class="info-9-table white-color wow fadeInUp" data-wow-delay="0.4s">

                            <!-- Title -->
                            <h4 class="h4-xs">JUDUL</h4>

                            <!-- Text -->
                            <p>Liver atau hati adalah salah satu organ yang perannya sangat vital dalam tubuh manusia. 
                                Organ yang sering disebut liver ini merupakan organ terbesar di dalam tubuh. Organ yang 
                                berwarna cokelat ini memiliki berat sekitar 1,5 kilogram.  

                                Liver terletak di rongga perut kanan bagian atas, tepat di bawah rusuk bagian kanan. 
                                Organ ini memiliki dua bagian, yaitu bagian kanan dan kiri. Lobus kanan hati merupakan 
                                bagian terbesar yang ukurannya lima sampai enam kali lebih besar daripada lobus kiri. 
                                <br>
                                
                             
                            </p>

                            <!-- Button -->
								<a href="all-services.html" class="btn btn-tra-white white-hover mt-20">Find Out More</a>

                        </div>	
                    </div>
                </div>	  <!-- End row -->
            </div>	   <!-- END TEXT BLOCK -->	


            </section>	<!-- END TOP-NEWS -->


            <!-- LATEST-POST
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Latest Post</h3>	

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus, 
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>
										
						</div> 
					</div>	 <!-- END SECTION TITLE -->
				
					
					<!-- TESTIMONIALS CONTENT -->
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
								<div class="review-2">
									<div class="review-txt text-left">

										<!-- Quote -->
										<div class="quote"></div>	

										<!-- Author Avatar -->
										<div class="hover-overlay text-center">

                                                                <?php
							$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where a_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d2=mysqli_fetch_array($sql2)){
							?> 
									<img class="img-fluid" width="210" src="assets/imgs/shop/<?php echo $d2['img_name']; ?>" alt="doctor-foto">	
							<?php } ?>

										</div>
										
                                        <!-- Judul News -->
										<div class="review-author">
											<br>
											<p style="margin-bottom:1px; font-size:1em;"><?php echo $d['cat_name']; ?></p>
											<h4 class="h4-md"><?php echo $d1['p_name']; ?></h4>
										</div>	

										<!-- Testimonial Text -->
										<p style="font-size: 0.5rem"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 100); ?></p> ... <a style="font-size: 1rem; color:blue;" href="article-details.php?id=<?php echo $d1['id']; ?>">Read more.</a>
														
																
									</div>						
								</div>	<!--END  TESTIMONIAL #1 -->
						
						<?php }} ?>



							
							</div>
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 
							
						
				</div>	   <!-- End container -->
			</section>	 <!-- END LATEST-POST -->

<?php include "footer.php";?>