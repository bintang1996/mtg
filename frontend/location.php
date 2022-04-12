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
								    	<li class="breadcrumb-item active" aria-current="page">Lokasi KAmi</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Lokasi Kami</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	









			<!-- TESTIMONIALS-2
			============================================= -->
			<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division" style="padding-top:50px; padding-bottom:50px;">
				<div class="container">

				<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title" style="margin-bottom:30px;">		
							<!-- Title 	-->	
							<h3 class="h4-md steelblue-color" style="color: #281E78; text-decoration: bold;"><b><b>OFFICE & SITE LOCATION</b></b></h3>								
						</div> 
					</div>
					<div class="row">
								<table width="100%">		<tr>
									
								<td width="50%"></td>
								<td width="20%"></td>
								<td style="align:right;">	
											<table>
											<tr>
												<th colspan="5"><h4 style="color: #281E78;"><h4><b>TEMUKAN KAMI DI KOTA ANDA!</b></h4></th>
											
											</tr>
											<tr>
												<td><i style="color:red;" class="fab fa-discourse"></i> Jakarta</td>
												<td> </td>
												<td><i class="fab fa-discourse"></i> Bandung</td>
												<td> </td>
												<td><i class="fab fa-discourse"></i> Makassar</td>
											</tr>
											<tr>
												<td><i style="color:red;" class="fab fa-discourse"></i> Surabaya</td>
												<td></td>
												<td><i class="fab fa-discourse"></i> Palembang</td>
												<td></td>
												<td><i class="fab fa-discourse"></i> Padang</td>
											</tr>
											</table>
							</td>
						
						</tr>

							</table>

											</div><br><br>
				
					<!-- SECTION TITLE -->	
					<div class="row">	
						<?php include "lala.php";?>
					</div>	


				</div>	   <!-- End container -->
			</section>	 <!-- END TESTIMONIALS-2 -->


			<!-- CONTACTS-1
			============================================= -->
			<section id="contacts-1" class="wide-60 contacts-section division" style="background-color:white; border-bottom:1px solid grey">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Hubungi Kami</h3>	

							<!-- Text -->
							<p>Have a question? Want to book an appointment for yourself or your children? Give us a call
							   or send an email to contact the MedService.
							</p>
								
						</div>
					</div>

						
					<div class="row">	


		 				<!-- CONTACTS INFO -->
		 				<div class="col-md-5 col-lg-4">

		 					<!-- General Information -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Jakarta Head Office</h5>
								<p>Jalan Munggang no 86-87</p> 
								<p>Balaikambang, Keramat Jati, Jakarta Timur</p>
                                <p>13530</p>
								<p>Phone: +62 21 2204 7248</p>
								<p>Email: <a href="mailto:info@meditrans.id" class="blue-color">info@meditrans.id</a></p>
		 					</div>

		 					<!-- Patient Experience -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Surabaya Head Office</h5>
								<p>Rungkut Menanggal Harapan O/28</p>
                                <p>Rungkut, Surabaya</p>
                                <p>60239</p>
								<p>Phone: +62 21 2287 9398</p>
								<p>Email: <a href="mailto:info@meditrans.id" class="blue-color">info@meditrans.id</a></p>
		 					</div>

		 					<!-- Working Hours -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Working Hours</h5>
								<p>Monday – Friday : 8:00 - 17:00 WIB</p> 
								
		 					</div>

						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->	
				 		<div class="col-md-7 col-lg-8">
				 			<div class="form-holder mb-40">
				 				<form name="contactForm" method="post" action="submit-contact-act.php">
				                        <div  class="row contact-form">                   
					                <!-- Contact Form Input -->
					                <div id="input-name" class="col-md-12 col-lg-6">
					                	<input type="text" name="name" class="form-control name" placeholder="Masukkan Nama*" required> 
					                </div>
					                        
					                <div id="input-email" class="col-md-12 col-lg-6">
					                	<input type="text" name="email" class="form-control email" placeholder="Masukkan Email*" required> 
					                </div>

					                <div id="input-phone" class="col-md-12 col-lg-6">
					                	<input type="tel" name="phone" class="form-control phone" placeholder="Masukkan No. HP/Whatsapp*" required> 
					                </div>
                                    
                                    <div id="input-instansi" class="col-md-12 col-lg-6">
					                	<input type="tel" name="instansi" class="form-control instansi" placeholder="Masukkan Instansi*" required> 
					                </div>

					                

					                <div id="input-alamat" class="col-lg-12">
					                	<input type="text" name="alamat" class="form-control alamat" placeholder="Masukkan Alamat*" required> 
					                </div>					                          
					                        
					                <div id="input-message" class="col-lg-12 input-message">
					                	<textarea class="form-control message" name="message" rows="6" placeholder="Masukkan Pesan Anda" required></textarea>
					                </div> 
					                                            
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-blue blue-hover 
                                        submit">Kirim</button> 
					                </div>
					                                                              

</div>                        
				                </form> 

				 			</div>	
				 		</div> 	<!-- END CONTACT FORM -->	


				 	</div>	<!-- End row -->			  
 

				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-1 -->


<?php include "footer.php";?>