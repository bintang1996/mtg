
		<style>
	.card-header{
		border:1px solid #4d4d4d; background-color: #fff; color: #fff;
	}
</style>	
			
			
			
		







	<!-- PRODUK NI BOS -->									
							
	<div class="row">
									<?php
                   			 $r=$_GET['id'];
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections where cat_name='Wifus'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
                                $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d1=mysqli_fetch_array($sql1)){ 
							?> 

						<!-- DOCTOR #1 -->
						<div class="col-sm-6">
							<div class="doctor-1" style="border: 1px solid #4d4d4d; border-radius: 16px;">								
														
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
                                    <?php
							$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d2=mysqli_fetch_array($sql2)){
							?> 
									<img class="img-fluid" width="100%" src="assets/imgs/shop/<?php echo $d2['img_name']; ?>" alt="doctor-foto">	
							<?php } ?>



									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="product-details.php?id=<?php echo $x;?>" title="">View More Info</a>
									</div> 

								</div>	

								<!-- Doctor Meta -->		
								<div class="doctor-meta" style="padding: 20px;">

									<h5 class="h5-sm steelblue-color"><?php echo $d1['p_name']; ?></h5>
									<span class="blue-color"><?php echo $d['cat_name']; ?></span>

									<p class="p-sm grey-color"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 60); ?>
									... </p><br><a href="product-details.php?id=<?php echo $x;?>" class="btn btn-sm btn-orange" >Read More<a>

								</div>	

							</div>			
											
						</div>	<!-- END DOCTOR #1 -->
						
						<?php }} ?>	
							</div>

<!-- PRODUK NI BOS -->	
	
			
			
			
			
			<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;margin-bottom:0px;padding-bottom:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-060-cardiogram-4"></span>
					</div>
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;margin-bottom:0px;padding-bottom:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-031-scanner"></span>
					</div>
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;margin-bottom:0px;padding-bottom:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-136-monitor"></span>
					</div>						
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;margin-bottom:0px;padding-bottom:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-076-microscope"></span>
					</div>						
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>




					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;margin-bottom:0px;padding-bottom:0px;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-129-hospital-1"></span>
					</div>						
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>
						
					</div>
                    <div class="row d-flex align-items-center text-center">


					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-060-cardiogram-4"></span>
					</div>
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-031-scanner"></span>
					</div>
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-136-monitor"></span>
					</div>						
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>

					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-076-microscope"></span>
					</div>						
					<!-- Title -->
					<br>
					<h5 class="h5-xs" style="margin-top:0;color:#214068;padding-top:20px;">Lorem Ipsum</h5>																																		
					</div>
					</div>




					<div class="col">
					<div class="sbox-3 icon-sm" style="background-color:#fff; border:none;">
					<!-- Icon -->
					<div class="sbox-3-icon">
						<span class="flaticon-129-hospital-1"></span>
					</div>						
					<!-- Title --><br>
					<h5 class="h5-xs" style="padding-top:20px; color:#214068;">Lorem Ipsum</h5>																																		
					</div>
					</div>	













                    <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								
									<!-- Text -->
									<p class="mb-30">
									</p>

									<!-- Options List -->
									<div class="row">

										<div class="col-xl-6">

											<!-- Option #1 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p class="p-sm">Kolaborasi BPJS, Funneling, PPP Model, Subdistribution</p>							
											</div>

											<!-- Option #2 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p class="p-sm">Dedicated Sales and Apps Person<br>Dedicated Sales and Apps person will give high chance to win</p>				
											</div>

											<!-- Option #3 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p class="p-sm">Bundle With Modality Offer Bundle package with cathlab</p>				
											</div>

										</div>

										<div class="col-xl-6">

											<!-- Option #4 -->
											<div class="box-list">	
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p class="p-sm">E-catalog listed product Register QFR in Government Ecommerce</p>				
											</div>

											<!-- Option #5 -->
											<div class="box-list">							
												<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
												<p class="p-sm">On-site Support Build confidence on Users/cardiologist</p>							
											</div>
										</div>
									</div>	<!-- End Options List -->
								</div>
							</div>	<!-- END INFO TEXT -->	

							<!-- INFO IMAGE -->
							<div class="col-lg-6">
								<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
									<img style="border-radius: 10%;" width="100%" class="img-fluid" src="images/emergency_help_700x800.jpg" alt="info-image">
								</div>
							</div>	