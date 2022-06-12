

<style>
/* Timeline */
.timeline,
.timeline-horizontal {
  list-style: none;
  padding: 20px;
  position: relative;
}
.timeline:before {
  top: 40px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline .timeline-item {
  margin-bottom: 20px;
  position: relative;
}
.timeline .timeline-item:before,
.timeline .timeline-item:after {
  content: "";
  display: table;
}
.timeline .timeline-item:after {
  clear: both;
}
.timeline .timeline-item .timeline-badge {
  color: #fff;
  width: 54px;
  height: 54px;
  line-height: 52px;
  font-size: 14px;
  text-align: center;
  position: absolute;
  top: 18px;
  left: 50%;
  margin-left: -25px;
  background-color: #7c7c7c;
  border: 3px solid #ffffff;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline .timeline-item .timeline-badge i,
.timeline .timeline-item .timeline-badge .fa,
.timeline .timeline-item .timeline-badge .glyphicon {
  top: 2px;
  left: 0px;
}
.timeline .timeline-item .timeline-badge.primary {
  background-color: #214068;
}
.timeline .timeline-item .timeline-badge.info {
  background-color: #5bc0de;
}
.timeline .timeline-item .timeline-badge.success {
  background-color: #59ba1f;
}
.timeline .timeline-item .timeline-badge.warning {
  background-color: #d1bd10;
}
.timeline .timeline-item .timeline-badge.danger {
  background-color: #ba1f1f;
}
.timeline .timeline-item .timeline-panel {
  position: relative;
  width: 46%;
  float: left;
  right: 16px;
  border: 1px solid #c0c0c0;
  background: #ffffff;
  border-radius: 20px;
  padding: 0px;
  margin-top: 50px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline .timeline-item .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -16px;
  display: inline-block;
  border-top: 16px solid transparent;
  border-left: 16px solid #c0c0c0;
  border-right: 0 solid #c0c0c0;
  border-bottom: 16px solid transparent;
  content: " ";
}
.timeline .timeline-item .timeline-panel .timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline .timeline-item .timeline-panel .timeline-body > p,
.timeline .timeline-item .timeline-panel .timeline-body > ul {
  margin-bottom: 0;
}
.timeline .timeline-item .timeline-panel .timeline-body > p + p {
  margin-top: 5px;
}
.timeline .timeline-item:last-child:nth-child(even) {
  float: right;
}
.timeline .timeline-item:nth-child(even) .timeline-panel {
  float: right;
  left: 16px;
}
.timeline .timeline-item:nth-child(even) .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline-horizontal {
  list-style: none;
  position: relative;
  padding: 20px 0px 20px 0px;
  display: inline-block;
}
.timeline-horizontal:before {
  height: 3px;
  top: auto;
  bottom: 26px;
  left: 56px;
  right: 0;
  width: 100%;
  margin-bottom: 20px;
}
.timeline-horizontal .timeline-item {
  display: table-cell;
  height: 280px;
  width: 20%;
  min-width: 320px;
  float: none !important;
  padding-left: 0px;
  padding-right: 20px;
  margin: 0 auto;
  vertical-align: bottom;
}
.timeline-horizontal .timeline-item .timeline-panel {
  top: auto;
  bottom: 64px;
  display: inline-block;
  float: none !important;
  left: 0 !important;
  right: 0 !important;
  width: 100%;
  margin-bottom: 20px;
}
.timeline-horizontal .timeline-item .timeline-panel:before {
  top: auto;
  bottom: -16px;
  left: 28px !important;
  right: auto;
  border-right: 16px solid transparent !important;
  border-top: 16px solid #c0c0c0 !important;
  border-bottom: 0 solid #c0c0c0 !important;
  border-left: 16px solid transparent !important;
}
.timeline-horizontal .timeline-item:before,
.timeline-horizontal .timeline-item:after {
  display: none;
}
.timeline-horizontal .timeline-item .timeline-badge {
  top: auto;
  bottom: 0px;
  left: 43px;
}
.timeline-badge, .primary:hover, .orange-hover:hover{
  background-color: #e86845;
}
</style>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    		<div class="row">
				<div class="col-md-12">
			
					<div style="display:inline-block;width:100%;overflow-y: hidden;">




					<ul class="timeline timeline-horizontal">



						<li class="timeline-item">
							<div class="timeline-badge primary orange-hover">2012</div>
							<div class="timeline-panel">
              <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" class="img-fluid" src="images/Milestone/2012.JPG" alt="doctor-foto">	
              	<!-- Icon -->
								<br>	<br>
											
								<div class="timeline-heading" style="padding: 20px;">
               
									<h4 class="timeline-title">2012</h4>
                  <p>Meditrans berdiri di Surabaya sebagai perusahaan  jasa konstruksi dan renovasi ruang Radiologi dan Kardiologi</p>
					
</div>
							</div>
						</li>


						<li class="timeline-item">
							<div class="timeline-badge primary orange-hover">2016</div>
							<div class="timeline-panel">
              <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" class="img-fluid" src="images/Milestone/2016.webp" alt="doctor-foto">	
              	<!-- Icon -->
								<br>	<br>
											
								<div class="timeline-heading" style="padding: 20px;">
               
									<h4 class="timeline-title">2016</h4>
					
									<p>Proyek Kemitraan Layanan Cathlab Pertama</p><br><br><br>
								</div>
							</div>
						</li>

            <li class="timeline-item">
							<div class="timeline-badge primary orange-hover">2018</div>
							<div class="timeline-panel">
              <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" class="img-fluid" src="images/Milestone/2018.JPG" alt="doctor-foto">	
              	<!-- Icon -->
								<br>	<br>
											
								<div class="timeline-heading" style="padding: 20px;">
               
									<h4 class="timeline-title">2018</h4>
					
									<p>Perpindahkan Kantor Pusat Jakarta </p><br><br><br>
								</div>
							</div>
						</li>




            <li class="timeline-item">
							<div class="timeline-badge primary orange-hover">2019</div>
							<div class="timeline-panel">
              <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" class="img-fluid" src="images/Milestone/2019.webp" alt="doctor-foto">	
              	<!-- Icon -->
								<br>	<br>
											
								<div class="timeline-heading" style="padding: 20px;">
               
									<h4 class="timeline-title">2019</h4>
					
									<p>Proyek Kemitraan Layanan CT Scan Pertama </p><br><br><br>
								</div>
							</div>
						</li>



            <li class="timeline-item">
							<div class="timeline-badge primary orange-hover">2020</div>
							<div class="timeline-panel">
              <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" class="img-fluid" src="images/Milestone/2020.webp" alt="doctor-foto">	
              	<!-- Icon -->
								<br>	<br>
											
								<div class="timeline-heading" style="padding: 20px;">
               
									<h4 class="timeline-title">2020</h4>
					
									<p>Proyek Vyaire : distribusi 1000 ventilator donasi USAID untuk KEMENKES</p><br>
							</div>
						</li>


            <li class="timeline-item">
							<div class="timeline-badge primary orange-hover">2021</div>
							<div class="timeline-panel">
              <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" class="img-fluid" src="images/head/legal.jpg" alt="doctor-foto">	
              	<!-- Icon -->
								<br>	<br>
											
								<div class="timeline-heading" style="padding: 20px;">
               
									<h4 class="timeline-title">2021</h4>
					
									<p>Kerjasama distribusi dengan Invamed dan Samsung Healthcare  </p><br><br><br><br>
								</div>
							</div>
						</li>









            <li class="timeline-item">
							<div class="timeline-badge primary orange-hover">2022</div>
							<div class="timeline-panel">
              <img style="border-top-left-radius: 20px; border-top-right-radius: 20px;" class="img-fluid" src="images/Milestone/2022.jpg" alt="doctor-foto">	
              	<!-- Icon -->
								<br>	<br>
											
								<div class="timeline-heading" style="padding: 20px;">
               
									<h4 class="timeline-title">2022</h4>
					
									<p>Kerjasama disribusi dengan Elixir Medical dan Yokogawa</p><br><br><br><br>
								</div>
							</div>
						</li>






            
					</ul>
				</div>
				</div>
			</div>
		
		</div>