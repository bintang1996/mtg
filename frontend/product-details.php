<?php include "header.php";?>
<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division" >
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Product Details</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Product Details</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	


			<!-- INFO-4
			============================================= -->
			<section id="info-4" class="wide-100 info-section division" style="background-color:white;padding-bottom:10px;border-bottom: 1px solid grey;">
				<div class="container">


					<!-- TOP ROW -->
					<div class="top-row mb-80">
						<div class="row d-flex align-items-center">


						<!-- INFO IMAGE -->
						<div class="col-lg-6">
							<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<?php include "image-product.php"?>
							</div>
						</div>


						<!-- INFO TEXT -->	
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
                <?php 
                  $id = $_GET['id'];      
                  $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                  while($d=mysqli_fetch_array($sql)){
                            
                ?> 
					 			<span class="section-id blue-color">Product</span>
                
								<!-- Title -->
								<h3 class="h3-md steelblue-color"><?php echo $d['p_name']; ?></h3>

								<!-- Text -->
								<p><?php echo $d['p_desc']; ?>
								</p>

                <h5 class=" steelblue-color">Spesifikasi</h5>
								<!-- Text -->
								<p><?php echo $d['spec']; ?>
								</p>
              
                <?php } ?>

							</div>
						</div>	<!-- END TEXT BLOCK -->	

						
						</div>    <!-- End row -->
					</div>	<!-- END TOP ROW -->

				</div>	   <!-- End container -->
			</section>	<!-- END INFO-4 -->



<?php include "footer.php";?>