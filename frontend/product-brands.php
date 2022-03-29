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
								    	<li class="breadcrumb-item"><a href="all-services.html">Our Product</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Product</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Service Single #1</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	
	<!-- DOCTORS-1
			============================================= -->
			<section id="doctors-1" class="wide-40 doctors-section division" style="background-color:white;">
				<div class="container">


			 		<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Our Medical Specialists</h3>	

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus, 
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>
										
						</div> 
					</div>	 <!-- END SECTION TITLE -->	


					<div class="row">



                    <?php
                    $r=$_GET['id'];
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections where cat_name='$r'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
                                $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d1=mysqli_fetch_array($sql1)){ 
							?> 

						<!-- DOCTOR #1 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">								
														
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
                                    <?php
							$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d2=mysqli_fetch_array($sql2)){
							?> 
									<img class="img-fluid" width="210" src="assets/imgs/shop/<?php echo $d2['img_name']; ?>" alt="doctor-foto">	
<?php } ?>



									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div> 

								</div>	

								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color"><?php echo $d1['p_name']; ?></h5>
									<span class="blue-color"><?php echo $d['cat_name']; ?></span>

									<p class="p-sm grey-color"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 100); ?>
									</p>

								</div>	

							</div>								
						</div>	<!-- END DOCTOR #1 -->
						
						<?php }} ?>

					</div>	    <!-- End row -->


					<!-- ALL DOCTORS BUTTON -->		
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="all-doctors mb-40">
								<a href="all-doctors.html" class="btn btn-blue blue-hover">More Products >></a>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-1 -->






<?php include "footer.php";?>