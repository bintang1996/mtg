<!-- TOP-NEWS
			============================================= -->
		










		
			
			<div class="w3-content w3-display-container" style="max-width:100%; background-color:#f8f9fa; padding-bottom: 50px; padding-top: 50px; ">

<div class="row">	
	<div class="col-lg-10 offset-lg-1 section-title" style="margin-bottom: 30px;">		
										
	</div> 
</div>

		<?php
			$r=$_GET['id']; $gi=0;
			$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a where cat_name = 'RECENT UPDATE' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
			while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
			$sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel order by id desc limit 3") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
			while($d1=mysqli_fetch_array($sql1)){  $gi++; $gk=$d1['id'];
		?> 

<div class="mySlides1">

<section id="info-4" class="wide-100 info-section division" style="background-color: #f8f9fa; padding-bottom: 0px; padding-top:0px; ">
<div class="container" style="background-color:#f8f9fa;">


<!-- TOP ROW -->
<div class="top-row mb-80">
	<div class="row d-flex align-items-center">


	<!-- INFO IMAGE -->
	<div class="col-lg-6 text-right" STYLE="ALIGN: right; VALIGN: right;">
<?php
		$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where a_id='$gk' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
		while($d2=mysqli_fetch_array($sql2)){
		?> 
		<div class="gambar1" style="margin-left: 40px;background-image: url('assets/imgs/shop/<?php echo $d2['img_name']; ?>');"></div>
<?php } ?>
</div>


<!-- INFO TEXT -->	
<div class="col-lg-6">

<div class="txt-block pc-30" >

<!-- Title 	-->	
<h3 class="h4-md steelblue-color" style="color: #214068;"><b><b>RECENT UPDATE</b></b></h3>
<br>

<h5 class="h4-md" style="color: #4d4d4d;font-family:'Lato black'; font-weight:bolder;"><B><?php echo $d1['p_name']; ?></B></h5>
<p style="text-align: justify; text-justify: inter-word;"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 210); ?> ....</p>
<br><a href="article-details.php?id=<?php echo $d1['id']; ?>" class="btn btn-md btn-blue orange-hover">Selengkapnya</a>
</div>    <!-- End row -->
</div>	<!-- END SECOND ROW -->
	

</div>	   <!-- End container -->
</section>	<!-- END INFO-4 -->
</div>

<?php }} ?>
<button class="w3-button w3-display-left w3-hover-red" onclick="plusDivs1(-1)" style= "color: #f44336; font-size: 50px;">&#10094;</button>
<button class="w3-button w3-display-right w3-hover-red" onclick="plusDivs1(1)" style= "color: #f44336; font-size: 50px;">&#10095;</button>
<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

<span class="w3-badge demo1 w3-border w3-red w3-hover-red" onclick="currentDiv1(1)"></span>
<span class="w3-badge demo1 w3-border w3-red w3-hover-red" onclick="currentDiv1(2)"></span>
<span class="w3-badge demo1 w3-border w3-red w3-hover-red" onclick="currentDiv1(3)"></span>



</div>
</div>

<script>
var slideIndex1 = 1;
showDivs1(slideIndex1);

function plusDivs1(n) {
showDivs1(slideIndex1 += n);
}

function currentDiv1(n) {
showDivs1(slideIndex1 = n);
}

function showDivs1(n) {
var i;
var x = document.getElementsByClassName("mySlides1");
var dots = document.getElementsByClassName("demo1");
if (n > x.length) {slideIndex1 = 1}
if (n < 1) {slideIndex1 = x.length}
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" w3-white", "");
}
x[slideIndex1-1].style.display = "block";  
dots[slideIndex1-1].className += " w3-white";
}
</script>




































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
						<div class="col">
							<div class="" style="border: 1px solid #4d4d4d; border-radius: 16px;">								
														
								<!-- Doctor Photo -->
						

									<!-- Photo -->
                                    <?php
									$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
									while($d2=mysqli_fetch_array($sql2)){
									?> 
									<img class="img-fluid" width="100%" src="assets/imgs/shop/<?php echo $d2['img_name']; ?>" alt="doctor-foto">	
									<?php } ?>



								

						

								<!-- Doctor Meta -->		
								<div class="" style="padding: 20px;">

									<h5 class="h5-sm steelblue-color"><?php echo $d1['p_name']; ?></h5>
									<span class="blue-color"><?php echo $d['cat_name']; ?></span>

									<p class="p-sm grey-color"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 60); ?>
									... </p><br><a href="product-details.php?id=<?php echo $x;?>" class="btn btn-sm btn-orange" >Read More<a>

								</div>	

							</div>	
								
											
						</div>	<!-- END DOCTOR #1 -->
						
						<?php }} ?>	
							</div>















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



<!-- BUANGAN PAGE PORTOFOLIO cathlab-->

							<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Jenis Kerja Sama</th>
										<th>Rumah Sakit</th>
										<th>Tipe Peralatan</th>
									</tr>
									<tr>
										<td>1</td>
										<td>KSO Cathlab</td>
										<td>RS Dustira Cimahi</td>
										<td>-</td>
									</tr>
									<tr>
										<td>2</td>
										<td>KSO Cathlab</td>
										<td>RS Al Islam Bandung</td>
										<td>-</td>
									</tr>
									<tr>
										<td>3</td>
										<td>KSO Cathlab</td>
										<td>RS Soepraoen Malang</td>
										<td>-</td>
									</tr>
									<tr>
										<td>4</td>
										<td>KSO Cathlab</td>
										<td>RSAL Ramelan</td>
										<td>-</td>
									</tr>

								</table>

								



<!-- BUANGAN PAGE PORTOFOLIO ct scan-->


<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Jenis Kerja Sama</th>
										<th>Rumah Sakit</th>
										<th>Tipe Peralatan</th>
									</tr>
									<tr>
										<td>1</td>
										<td>KSO CT-Scan</td>
										<td>RSI.   Muhammadyah Palembang</td>
										<td>GE   Dxi Single Slice</td>
									</tr>
									<tr>
										<td>2</td>
										<td>KSO CT-Scan</td>
										<td>RSUD   Palabuanratu, Sukabumi</td>
										<td>GE   Brivo, 16 Slice</td>
									</tr>
									<tr>
										<td>3</td>
										<td>KSO CT-Scan	</td>
										<td>RS.   Dustira Cimahi</td>
										<td>Siemens Somatom   Emotions, 16 Slice</td>
									</tr>
									<tr>
										<td>4</td>
										<td>KSO CT-Scan</td>
										<td>RSU   Bangli - Bali</td>
										<td>GE   Brightspeed 16 Slice</td>
									</tr>

								</table>

<!-- BUANGAN PAGE PORTOFOLIO pcr-->

<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Jenis Kerja Sama</th>
										<th>Rumah Sakit</th>
										<th>Tipe Peralatan</th>
									</tr>
									<tr>
										<td>1</td>
										<td>KSO PCR</td>
										<td>RS Tiara Sella Bengkulu</td>
										<td>-</td>
									</tr>

								</table>
