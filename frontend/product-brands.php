<?php include "header.php";?>


<style>
	.indicators {
display: none;
	}

	.lugi{
		height: 100px;
		width: auto;
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
								<img class="img-fluid" width="100%" height="500px" src="images/produk_kami.jpg" alt="hero-image">
                                
							<!-- Image Caption -->
							<div class="caption d-flex align-items-center left-align" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)); ">
		       					<div class="container">
		       						<div class="row" >
		       							<div class="col-md-12 col-lg-10" >
		       								<div class="caption-txt">
						       					<!-- Title -->
						       					<h3 class="white-color judul1">PRODUK KAMI</h3>

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

	<!-- DOCTORS-1
			============================================= -->
			<section id="doctors-1" class="wide-40 doctors-section division" style="background-color:white;">
				<div class="container">


				<table style="border: none;" width="100%"><tr><td>
									<h3 class="h3-md steelblue-color"></h3>
									</td>
									<td style="text-align: right; align:right;">
									<?php
									 $r=$_GET['id'];
										$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM category where cat_name='$r'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
										while($d=mysqli_fetch_array($sql)){
										?> 
										
										<a href="product-brands.php?id=<?php echo $d['cat_name']; ?>"><img class="img-fluid lugi" width="200px" src="assets/imgs/vendor/<?php echo $d['logo']; ?>" style="padding-right:20px; padding-bottom:25px;"></a>
									
									<?php }?>
									</td></tr>
									</table>

									<div class="row">
				<?php
				$r=$_GET['id'];
				$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections where cat_name='$r'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
				while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
				$sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
				while($d1=mysqli_fetch_array($sql1)){ 
				?> 

				<!-- DOCTOR #1 -->
				<div class="col-md-6">
				<div class="doctor-1" style="border: 1px solid #4d4d4d; border-radius: 16px;">								
									
				<!-- Doctor Photo -->


				<!-- Photo -->
				<?php
				$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
				while($d2=mysqli_fetch_array($sql2)){
				?> 
				<img class="img-fluid" width="100%" src="assets/imgs/shop/<?php echo $d2['img_name']; ?>" alt="doctor-foto">	
				<?php } ?>



				<!-- Doctor Meta -->		
				<div class="doctor-meta" style="padding: 20px;">

				<h6 class="steelblue-color"><?php $rt1=$d1['p_name']; echo substr("$rt1", 0, 36); ?> ..</h6>
				<span class="blue-color"><?php echo $d['cat_name']; ?></span>

				<p class="p-sm grey-color"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 70); ?>
				... </p><br><a href="product-details.php?id=<?php echo $x;?>" class="btn btn-sm btn-orange" >Lebih Lanjut</a>

				</div>	

				</div>	

						
				</div>	<!-- END DOCTOR #1 -->

				<?php }} ?>	
				</div>

				<!-- PRODUK NI BOS -->	






				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-1 -->






<?php include "footer.php";?>