<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
			.mySlides {display:none}
			.w3-left, .w3-right, .w3-badge {cursor:pointer; color:red;}
			.w3-badge {height:13px;width:13px;padding:0; color: orange;}
			a b{
				text-decoration:bold;
			}
			.w3-transparent, .w3-hover-none:hover {
    background-color: red;
}
			</style>
<div class="w3-content w3-display-container" style="max-width:100%; background-color:#ececec;">


            
	
            <?php       
				$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM banner3col") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
				while($d=mysqli_fetch_array($sql)){
			?> 
			<div class="mySlides">


			<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">

			<tr>
            <td width="50%"  class="text-center align-center"><br><br>
			<h3 class="h3-md" style="color: #281E78;"><?php echo $d['link_slider']; ?></h3>
			</td>
            <td width="50%"  class="text-center align-center">
			<img style="width:250px;  max-width:250px; max-height: 300px; display: inline-block;"class="img-fluid"  src="assets/imgs/banner/<?php echo $d['slider_img']; ?>" alt="tab-image">
            
			</td>
			
			</table>			
			</div>
            
            <?php } ?>
			<button class="w3-button w3-display-left w3-red" onclick="plusDivs(-1)">&#10094;</button>
			<button class="w3-button w3-display-right w3-red" onclick="plusDivs(1)">&#10095;</button>
			<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
			<?php       
				$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM banner3col") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
				while($d=mysqli_fetch_array($sql)){
                    $i = 0; 
                    $i++;
			?> 
				<span class="w3-badge demo w3-border w3-red w3-hover-red" onclick="currentDiv(<?php echo $i; ?>)"></span>
			<?php } ?>
            </div>
			</div>

				<script>
				var slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n) {
				showDivs(slideIndex += n);
				}

				function currentDiv(n) {
				showDivs(slideIndex = n);
				}

				function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("demo");
				if (n > x.length) {slideIndex = 1}
				if (n < 1) {slideIndex = x.length}
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" w3-white", "");
				}
				x[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " w3-white";
				}
				</script>

