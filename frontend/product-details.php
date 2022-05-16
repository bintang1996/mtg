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
                <br><p>Informasi Produk Lebih Lanjut</p>
                <a href="contact-us.php" class="btn btn-md btn-blue blue-hover">Hubungi Kami</a>

							</div>
						</div>	<!-- END TEXT BLOCK -->	

				
						







						</div>    <!-- End row -->
					</div>	<!-- END TOP ROW -->




					<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>



				</div>	   <!-- End container -->
			</section>	<!-- END INFO-4 -->



<?php include "footer.php";?>