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
								    	<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Karir</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Karir</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	
        <div class="wide-100" style="background-color:#FFFFFF; padding-bottom: 50px;">
            <div class="container" style="background-color:#FFFFFF;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 text-left">
                            <!-- Title -->
							<h3 class="h3-md steelblue-color">Bergabunglah bersama Meditrans</h3><br>

                            <!-- Text -->
                            <p class="p-lg">Jika Anda adalah orang dengan minat dalam industri kesehatan, Meditrans adalah perusahaan yang tepat bagi Anda untuk mengembangkan karir. Anda akan bertemu begitu banyak orang yang memiliki passion seperti Anda di dunia healthcare. Pemimpin dan tim kami menghargai bakat dan kontribusi Anda untuk memberi dampak pada industri healthcare dan lainnya.
							
						
                            </p><br>
							<img class="img-fluid" width="70%" src="images/Career.jpg" alt="doctor-foto">	
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wide-100" style="background-color:#f8f9fb; padding-bottom: 50px;">
            <div class="container" style="background-color:#f8f9fb;">
			<!-- SECTION TITLE -->	
			<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Lowongan Pekerjaan Terbaru</h3>	

							<!-- Text -->
							<p>Berikut Lowongan Pekerjaan di Meditrans. 
							</p>
								
						</div>
			</div>
                <!-- Options List -->
                <div class="options-list">
				<?php 
                   
            	$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a where cat_name='Lowongan'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                while($d=mysqli_fetch_array($sql)){ $id=$d['p_id'];
                                            
                $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                while($d1=mysqli_fetch_array($sql1)){
                                                
                ?> 

				<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
				<a href="article-details.php?id=<?php echo $d1['id']; ?>">						
					<div class="sbox-7-txt">							
					<h5 class="h5-sm steelblue-color"><?php echo $d1['p_name']; ?></h5>									
					<p class="p-sm"><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 100); ?></p>

					</div>

				 	</a>
			 	</div>					
<?php }} ?>
										

											
									
				</div>	<!-- End Options List -->
            </div>
        </div>

        <div class="wide-100" style="background-color:#FFFFFF; border-bottom:1px solid grey">
            <div class="container" style="background-color:#FFFFFF; ">
			<!-- SECTION TITLE -->	
			<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Bergabung dengan Kami</h3>	

							<!-- Text -->
							<p>Come join us? Want to book an appointment for yourself or your children? Give us a call
							   or send an email to contact the MedService.
							</p>
								
						</div>
			</div>

                <div class="row">
                    <!-- CONTACT FORM -->	
				 		<div class="col-md-8 col-lg-8" style="margin-left: auto; margin-right: auto;" >
				 			<div class="form-holder mb-40">

							 <form method="post" action="submit-career-act.php"  enctype="multipart/form-data">
				                 <div class="row contact-form">                           
					                <!-- Contact Form Input -->
					                <div id="input-name" class="col-md-12 col-lg-6">
					                	<input type="text" name="name" class="form-control name" placeholder="Nama*" required> 
					                </div>
					                        
					                <div id="input-email" class="col-md-12 col-lg-6">
					                	<input type="text" name="email" class="form-control email" placeholder="Email*" required> 
					                </div>

					                <div id="input-phone" class="col-md-12 col-lg-6">
					                	<input type="number" name="phone" class="form-control phone" placeholder="Nomor Handphone*" required> 
					                </div>	

                                    <div id="input-address" class="col-md-12 col-lg-6">
					                	<input type="text" name="address" class="form-control phone" placeholder="Domisili*" required> 
					                </div>

                                    <div id="input-linkedin" class="col-md-12 col-lg-6">
					                	<input type="text" name="linkedin" class="form-control phone" placeholder="Linkedin Profil*" required> 
					                </div>

                                    <div id="input-perusahaan-sebelumnya" class="col-md-12 col-lg-6">
					                	<input type="text" name="current_company" class="form-control phone" placeholder="Perusahaan Sebelumnya*" required> 
					                </div>

                                    <div id="input-posisi-sebelumnya" class="col-md-12 col-lg-6">
					                	<input type="text" name="current_position" class="form-control phone" placeholder="Posisi Sebelumnya*" required> 
					                </div>

                                    <!-- Form Select -->
					                <div id="input-Posisi" class="col-md-12 col-lg-6 input-patient">
					                    <select id="inlineFormCustomSelect3" name="desired_position" class="custom-select patient" required>
					                        <option value="">Posisi Yang Ingin Dilamar*</option>
											<option>Posisi 1</option>
											<option>Posisi 2</option>
											<option>Posisi 3</option>
                                            <option>Posisi 4</option>
                                            <option>Posisi 5</option>
					                    </select>
					                </div>

                                    <div id="input-message" class="col-lg-12 input-message">
					                	<textarea class="form-control message" name="ket" rows="6" placeholder="Alasan Memilih Posisi Tersebut" required></textarea>
					                </div> 

					                <div id="input-file" class="col-lg-12">
									<label>Upload CV Terbaru</label>                                  
					                	<input type="file" name="P_ATTACHMENT[]" class="form-control" placeholder="CV*" required> 
                                    </div>					                          
					                        
					                
					                                            
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15">  
					                	<button type="submit" class="btn btn-blue blue-hover">Kirim Lamaran</button> 
					                </div>
					                                                              
				</div>
				                                              
				                </form> 

				 			</div>	
				 		</div> 	<!-- END CONTACT FORM -->
                </div>
            </div>
        </div>
<?php include "footer.php";?>