
			<div class="w3-content w3-display-container" style="max-width:100%; background-color:#ececec;">



<div class="mySlides">

<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">
<tr><td width="50%"  class="text-center align-center">
<img class="img-fluid" width="70%" src="images/pediatrics_700x700.jpg" alt="tab-image">
</td>
<td><br><br>
<h3 class="h4-md" style="color: #281E78;font-family:'Lato'; font-weight:bolder;"><B>SELAMAT DATANG DI MEDITRANS</B></h3><BR>
<p style="text-align:justify;">"Selamat datang di Meditrans. Sebuah perusahaan kesehatan yang kami dirikan sejak 2012 di Surabaya yang sampai saat ini masih terus mengembangkan dirinya. Bersama tim yang berpengalaman di bidangnya, sejak awal dikembangkan, Meditrans telah melayani banyak rumah sakit dalam hal kebutuhan layanan kesehatan.</p>

<p style="text-align:justify;">Kami tidak hanya membantu rumah sakit untuk memenuhi kebutuhan peralatan kesehatan, perusahaan kami juga bergerak di bidang kerjasama operasional (KSO). Yakni berupa KSO CT Scan dan KSO Cathlab. Kami juga melayani kebutuhan renovasi dan pekerjaan konstruksi rumah sakit.</p>

<p style="text-align:justify;">Dengan banyak pengalaman yang kami miliki, Anda tidak perlu ragu untuk bermitra dan bekerjasama dengan kami. Kami selalu siap memberikan yang terbaik untuk Anda."</p>

    <br><a href="#" class="btn btn-md btn-blue blue-hover">Selengkapnya</a>
</td>
<td width="5%"></td>
</table>			
</div>

<div class="mySlides">

<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">
<tr><td width="50%"  class="text-center align-center">
<img class="img-fluid" width="70%" src="images/pediatrics_700x700.jpg" alt="tab-image">
</td>
<td><br><br>
<h3 class="h4-md" style="color: #281E78;font-weight:bolder;">Advancing in Healthcare Everyday</h3>	
<p style="text-align:justify;">Selamat datang di Meditrans. Sebuah perusahaan kesehatan 
                            yang kami dirikan sejak 2012 di Surabaya yang sampai saat ini masih terus 
                            mengembangkan dirinya. Bersama tim yang berpengalaman di bidangnya, sejak 
                            awal dikembangkan, Meditrans telah melayani banyak rumah sakit dalam hal 
                            kebutuhan layanan kesehatan.</p>

<p style="text-align:justify;">Kami tidak hanya membantu rumah sakit untuk memenuhi kebutuhan peralatan 
                            kesehatan, perusahaan kami juga bergerak di bidang kerjasama operasional (KSO). 
                            Yakni berupa KSO CT Scan dan KSO Cathlab. Kami juga melayani kebutuhan renovasi 
                            dan pekerjaan konstruksi rumah sakit.</p>

<p style="text-align:justify;">Dengan banyak pengalaman yang kami miliki, Anda tidak perlu ragu untuk bermitra 
                            dan bekerjasama dengan kami. Kami selalu siap memberikan yang terbaik untuk Anda.</p>										
    <br><a href="#" class="btn btn-md btn-blue blue-hover">Selengkapnya</a>
</td>
<td width="5%"></td>
</table>			
</div>

<div class="mySlides">

<table class="table" width="90%" style="border:none; margin-bottom:0; margin-right:5%;">
<tr><td width="50%"  class="text-center align-center">
<img class="img-fluid" width="70%" src="images/pediatrics_700x700.jpg" alt="tab-image">
</td>
<td><br><br>
<h3 class="h4-md" style="color: #281E78;font-weight:bolder;">SELAMAT DATANG DI MTGLOBAL</h3>	
<p style="text-align:justify;">PT. Meditrans Global (PT. MTG) berdiri sejak tahun 2012 di Surabaya, berawal dari bisnis penyedia barang dan jasa dan seiring waktu kami terus mengembangkan perusahaan ini ke bidang bidang bisnis lainnya.</p>

<p style="text-align:justify;">Berlatar belakang pendiri perusahaan yang memiliki pengalaman dibidang peralatan penunjang kesehatan, Saat ini kami memfokuskan pengembangan perusahaan dalam hal pelayanan Barang dan Jasa penunjang kesehatan. 
    Kami memiliki team yang solid untuk bekerjasama dengan Rumah Sakit ataupun perusahaan penyedia peralatan kesehatan baik principal ataupun pihak KSO untuk memberikan konsultasi dan pelaksanaan pekerjaan Pra Instalasi peralatan kesehatan seperti instalasi X-Ray, CT-Scan, MRI dan Cathlab.</p>
    <br><a href="#" class="btn btn-md btn-blue blue-hover">Selengkapnya</a>
</td>
<td width="5%"></td>


</table>			
</div>

<button class="w3-button w3-display-left w3-red" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-red" onclick="plusDivs(1)">&#10095;</button>
<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

    <span class="w3-badge demo w3-border w3-red w3-hover-red" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-red w3-hover-red" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-red w3-hover-red" onclick="currentDiv(3)"></span>
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
