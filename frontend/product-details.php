<?php include "header.php";?>

<!-- HERO-2
			============================================= -->	
			<section id="hero-2" class="hero-section division">


				<!-- SLIDER -->
				<div class="slider" style="height: 500px;">
			    	<ul class="slides">


				     	<!-- SLIDE #1 -->
				      	

    	
                                <li style="height: 500px;">			
								<img class="img-fluid" width="100%" height="500px" src="images/detailproduk.jpg" alt="hero-image">
                                
							<!-- Image Caption -->
							<div class="caption d-flex align-items-center left-align" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)); ">
		       					<div class="container">
		       						<div class="row" >
		       							<div class="col-md-12 col-lg-10" >
		       								<div class="caption-txt">
						       					<!-- Title -->
						       					<h3 class="white-color judul1">DETAIL PRODUK</h3>

						       					<!-- Option Box #1 -->
												<div class="box-list">							
													<div class="box-list-icon white-color"></div>
																			
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


			<!-- INFO-4
			============================================= -->
			<section id="info-4" class="wide-100 info-section division" style="background-color:white;padding-bottom:10px;border-bottom: 1px solid grey; ">
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
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi Produk</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Kontak</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Brosur Produk</a>
  </div>
</nav>
<br><br>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="container">

  <?php 
                  $id = $_GET['id'];      
                  $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                  while($d=mysqli_fetch_array($sql)){
                            
                ?> 
					 		
                
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


  </div></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

  <div class="container">

  <h3 class="h3-md steelblue-color">Kontak Kami</h3>

<p>Silahkan download brosur produk pada link berikut.</p>

  <p>Informasi Produk Lebih Lanjut</p>
 <a href="contact-us.php" class="btn btn-md btn-blue blue-hover">Hubungi Kami</a>

		 </div>

  </div>



  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

  <div class="container">
  <h3 class="h3-md steelblue-color">Brosur Produk</h3>

  <p>Silahkan download brosur produk pada link berikut.</p>


  <?php       
           
            $id=$_GET['id'];
				$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$id' and img_name LIKE '%.pdf%' ") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
				while($d=mysqli_fetch_array($sql)){
			?>

<a style="color:blue;" href="assets/imgs/shop/<?php echo $d['img_name']; ?>">Download <?php echo $d['img_name']; ?></a> 

<?php } ?></div>
  </div>
</div>


<br><br><br><br>
				</div>	   <!-- End container -->
			</section>	<!-- END INFO-4 -->



<?php include "footer.php";?>