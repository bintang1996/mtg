<?php include "header.php";?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>








	<!-- TOP ROW -->
    <div class="top-row mb-80" style="background-color:white;">
						<div class="row d-flex align-items-center">


						<!-- INFO IMAGE -->
						<div class="col-lg-6">
							<div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
								

                                     <h2 style="text-align:center">Slideshow Gallery</h2>

                                    <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="img_woods_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="img_5terre_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="img_mountains_wide.jpg" style="width:100%">
                                    </div>
                                        
                                    <div class="mySlides">
                                        <div class="numbertext">4 / 6</div>
                                        <img src="img_lights_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">5 / 6</div>
                                        <img src="img_nature_wide.jpg" style="width:100%">
                                    </div>
                                        
                                    <div class="mySlides">
                                        <div class="numbertext">6 / 6</div>
                                        <img src="img_snow_wide.jpg" style="width:100%">
                                    </div>
                                        
                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                        <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                        </div>
                                        <div class="column">
                                        <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                        <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                        <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                        </div>
                                        <div class="column">
                                        <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                        </div>    
                                        <div class="column">
                                        <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                                        </div>
                                    </div>
                                    </div>



							</div>
						</div>


						<!-- INFO TEXT -->	
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
					 			<span class="section-id blue-color">Welcome to MedService</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Clinic with Innovative Approach to Treatment</h3>

								<!-- Text -->
								<p>An enim nullam tempor sapien gravida donec pretium ipsum  porta justo integer at  odio
								   velna vitae auctor integer congue magna purus pretium ligula rutrum luctus ultrice aliquam
								   a augue suscipit
								</p>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat
								   dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer
								   metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium and ipsum porta
								   justo integer at velna vitae auctor integer congue
								</p>

								<!-- Singnature -->
								<div class="singnature mt-35">

									<!-- Text -->
									<p class="p-small mb-15">Randon Pexon, Head of Clinic</p>

									<!-- Singnature Image -->
									<!-- Recommended sizes for Retina Ready displays is 400x68px; -->
									<img class="img-fluid" src="images/signature.png" width="200" height="34" alt="signature-image" />	

								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->	

						
						</div>    <!-- End row -->
					</div>	<!-- END TOP ROW -->






















<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    



<?php include "footer.php";?>