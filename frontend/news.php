<?php include "header.php";?>
<style>
.gambar{
			width: 90%;
			height: 300px;
		
			background-repeat: no-repeat;
			background-size: cover;
			
  background-position: center;

			}

			.owl-dots{
				display: none;
			}
			</style>
		<style>
	.indicators {
display: none;
	}
</style>
	<!-- HERO-2
			============================================= -->	
			<section id="hero-2" class="hero-section division">


				<!-- SLIDER -->
				<div class="slider" style="height: 500px;">
			    	<ul class="slides">


				     	<!-- SLIDE #1 -->
				      	

    	
                                <li style="height: 500px;">			
								<img class="img-fluid" width="100%" height="500px" src="images/head/newsheader.jpg" alt="hero-image">
                                
							<!-- Image Caption -->
							<div class="caption d-flex align-items-center left-align" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)); ">
		       					<div class="container">
		       						<div class="row" >
		       							<div class="col-md-12 col-lg-10" >
		       								<div class="caption-txt">
						       					<!-- Title -->
						       					<h3 class="white-color">NEWS</h3>

						       					<!-- Option Box #1 -->
												<div class="box-list">							
													<div class="box-list-icon white-color"></div>
													<p class="p-md white-color" >Ini news Perusahaan
													</p>						
												</div>
									
									    
											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

							
							
							</li>
                       
						
					    	<!-- END SLIDE #1 -->


				    </ul>
			  	</div>	<!-- END SLIDER -->


			</section>	<!-- END HERO-2 -->


            

            <!-- LATEST-POST
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

						<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title" style="margin-bottom:30px;">		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color text-center" style="color: #214068; PADDING-LEFT: 15PX;"><b><b>LATEST POST</b></b></h3>								
						</div> 
					</div>

							<!-- Text -->
							<p>
							</p>
										
						</div> 
					</div>	 <!-- END SECTION TITLE -->
				
					
					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col-md-12">					
							<div class="owl-carousel owl-theme reviews-holder">

							<?php
                    $r=$_GET['id'];
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a ") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
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
										<div class="gambar" style="border-radius:20px ;background-image: url('assets/imgs/shop/<?php echo $d2['img_name']; ?>');"></div>
		<?php } ?>

										</div>
										
                                        <!-- Judul News -->
										<div class="review-author">
											<br>
											<p style="margin-bottom:1px; font-size:1em; color:#007aff;"><?php echo $d['cat_name']; ?></p>
											<h4 style="padding-left:10px;"class="h4-md"><?php echo $d1['p_name']; ?></h4>
										</div>	

										<!-- Testimonial Text -->
										<p style="font-size: 0.5em;color:#4d4d4d;"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 100); ?>... <a style="font-size: 1em; color:#e86845;" href="article-details.php?id=<?php echo $d1['id']; ?>">Read more.</a></p>
														
																
									</div>						
								</div>	<!--END  TESTIMONIAL #1 -->
						
						<?php }} ?>



							
							</div>
						</div>									
					</div>	<!-- END TESTIMONIALS CONTENT --> 
							
						
				</div>	   <!-- End container -->
			</section>	 <!-- END LATEST-POST -->

<?php include "footer.php";?>