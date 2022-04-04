<?php include "header.php";?>


			<!-- CONTACTS-1
			============================================= -->
			<section id="contacts-1" class="wide-60 contacts-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Have a Question? Get In Touch</h3>	

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
								<h5 class="h5-sm steelblue-color">General Information</h5>
								<p>121 King Street, Melbourne,</p> 
								<p>Victoria 3000 Australia</p>
								<p>Phone: +12 9 8765 4321</p>
								<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a></p>
		 					</div>

		 					<!-- Patient Experience -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Patient Experience</h5>
								<p>Hannah Harper - Patient Experience Coordinator</p>
								<p>Phone: +12 9 8765 4321</p>
								<p>Email: <a href="mailto:yourdomain@mail.com" class="blue-color">hello@yourdomain.com</a></p>
		 					</div>

		 					<!-- Working Hours -->
		 					<div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color">Working Hours</h5>
								<p>Monday – Friday : 8:00 AM - 8:00 PM</p> 
								<p>Saturday : 10:00 AM - 6:00 PM</p>
								<p>Sunday : 10:00 AM - 4:00 PM</p>
		 					</div>

						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->	
				 		<div class="col-md-7 col-lg-8">
				 			<div class="form-holder mb-40">
				 				<form name="contactForm" class="row contact-form">
				                                            
					                <!-- Contact Form Input -->
					                <div id="input-name" class="col-md-12 col-lg-6">
					                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
					                </div>
					                        
					                <div id="input-email" class="col-md-12 col-lg-6">
					                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
					                </div>

					                <div id="input-phone" class="col-md-12 col-lg-6">
					                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
					                </div>	

					                <!-- Form Select -->
					                <div id="input-patient" class="col-md-12 col-lg-6 input-patient">
					                    <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
					                        <option value="">Have You Visited Us Before?*</option>
											<option>New Patient</option>
											<option>Returning Patient</option>
											<option>Other</option>
					                    </select>
					                </div>

					                <div id="input-subject" class="col-lg-12">
					                	<input type="text" name="subject" class="form-control subject" placeholder="Subject*" required> 
					                </div>					                          
					                        
					                <div id="input-message" class="col-lg-12 input-message">
					                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
					                </div> 
					                                            
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-blue blue-hover submit">Send Your Message</button> 
					                </div>
					                                                              
					                <!-- Contact Form Message -->
					                <div class="col-lg-12 contact-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>  
				                                              
				                </form> 

				 			</div>	
				 		</div> 	<!-- END CONTACT FORM -->	


				 	</div>	<!-- End row -->			  
 

				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-1 -->


<?php include "footer.php";?>