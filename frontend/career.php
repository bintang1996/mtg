<?php include "header.php";?>
<!-- BREADCRUMB
			============================================= -->
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
								<img class="img-fluid" width="100%" height="500px" src="images/head/karirheader.jpg" alt="hero-image">
                                
							<!-- Image Caption -->
							<div class="caption d-flex align-items-center left-align" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)); ">
		       					<div class="container">
		       						<div class="row" >
		       							<div class="col-md-12 col-lg-10" >
		       								<div class="caption-txt">
						       					<!-- Title -->
						       					<h3 class="white-color judul1">KARIR</h3>

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

        <div class="wide-100" style="background-color:#FFFFFF; padding-bottom: 50px;">
            <div class="container" style="background-color:#FFFFFF;">
			<div class="row">	
					<div class="col-lg-12 text-center" style="margin-bottom:30px;">		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color" style="color: #214068; font-weight: 700;"><b><b>BERGABUNGLAH BERSAMA MEDITRANS</b></b></h3>								
	
							<!-- Text -->
							<p>Jika Anda adalah orang dengan minat dalam industri kesehatan, Meditrans adalah perusahaan yang tepat bagi Anda untuk mengembangkan karir. Anda akan bertemu begitu banyak orang yang memiliki passion seperti Anda di dunia healthcare. Pemimpin dan tim kami menghargai bakat dan kontribusi Anda untuk memberi dampak pada industri healthcare dan lainnya.
							
							</p>
								
						</div>
					</div>

        
            </div>
        </div>

        <div class="wide-100" style="background-color:#f8f9fb; padding-bottom: 50px;">
            <div class="container" style="background-color:#f8f9fb;">
			<!-- SECTION TITLE -->	
			<div class="row">	
						<div>	

							<!-- Title 	-->	
							<div>		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color" style="color: #214068;"><b><b>LOWONGAN PEKERJAAN TERBARU</b></b></h3>								
							</div> 
							<!-- Text -->
							<p>Berikut Lowongan Pekerjaan di Meditrans. 
							</p>
							<br>
							<p><i>Belum ada lowongan pekerjaan saat ini</i></p>
								
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

        <div class="wide-100" style="background-color:#FFFFFF; border-bottom:1px solid grey; padding-top:80px;">
            <div class="container" style="background-color:#FFFFFF; ">
			<!-- SECTION TITLE -->	
			<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color text-center" style="color: #214068; PADDING-LEFT: 15PX;"><b><b>BERGABUNG DENGAN KAMI</b></b></h3>								

							<p>Jika Anda adalah orang dengan minat dalam industri kesehatan, Meditrans adalah perusahaan yang tepat bagi Anda untuk mengembangkan karir. Anda akan bertemu begitu banyak orang yang memiliki passion seperti Anda di dunia healthcare. Pemimpin dan tim kami menghargai bakat dan kontribusi Anda untuk memberi dampak pada industri healthcare dan lainnya.</p>
								
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

									<div id="input-Posisi" class="col-md-12 col-lg-6 input-patient">
					                	<input type="text" name="desired_position" class="form-control phone" placeholder="Posisi Yang Ingin Dilamar*" required> 
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