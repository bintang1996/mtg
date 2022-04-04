<?php include "header.php";?>
<style>
.gambar{
			width: 100%;
			height: 500px;
		
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
  background-position: center;

			}

			.owl-dots{
				display: none;
			}
			</style>
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

			<?php
                    $r=$_GET['id'];
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a where cat_name = 'Default News Page' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
                                $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d1=mysqli_fetch_array($sql1)){ 
							?> 
            <!-- TEXT BLOCK -->		
            <div class="container">
                <div class="row d-flex align-items-center">	
                    <div class="col-lg-6">
                        <div class="tab-img">
						<?php
							$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where a_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d2=mysqli_fetch_array($sql2)){
							?> 
										<div class="gambar" style="background-image: url('assets/imgs/shop/<?php echo $d2['img_name']; ?>');"></div>
		<?php } ?>
						</div>
                    </div>	

                    <div class="col-md-6">
                        <div class="info-9-table white-color wow fadeInUp" data-wow-delay="0.4s">
						<p style="margin-bottom:1px; font-size:1em;"><?php echo $d['cat_name']; ?></p>
                            <!-- Title -->
                            <h4 class="h4-xs"><?php echo $d1['p_name']; ?></h4>

                            <!-- Text -->
                            <p><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 100); ?>
                                
                             
                            </p>

                            <!-- Button -->
								<a href="article-details.php?id=<?php echo $d1['id']; ?>" class="btn btn-tra-white white-hover mt-20">Find Out More</a>

                        </div>	
                    </div>
                </div>	  <!-- End row -->
            </div>	   <!-- END TEXT BLOCK -->	
<?php }} ?>

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
			</section>	 <!-- END LATEST-POST -->

<?php include "footer.php";?>