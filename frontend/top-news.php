<!-- TOP-NEWS
			============================================= -->
			<?php
                    $r=$_GET['id'];
							$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a where cat_name = 'Default News Page' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d=mysqli_fetch_array($sql)){ $x=$d['p_id'];
                                $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$x'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d1=mysqli_fetch_array($sql1)){ 
							?> 
			<section id="info-9" class="bg-blue info-section division">

		
            <!-- TEXT BLOCK -->		
            <div class="container">
                <div class="row d-flex align-items-center">	
                    <div class="col-lg-6">
                       
						<?php
							$sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where a_id='$x' limit 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
							while($d2=mysqli_fetch_array($sql2)){
							?> 
										<div class="gambar" style="background-image: url('assets/imgs/shop/<?php echo $d2['img_name']; ?>');"></div>
		<?php } ?>
						
                    </div>	

                    <div class="col-md-6">
                        <div class="info-9-table white-color wow fadeInUp" data-wow-delay="0.4s">
						<p style="margin-bottom:1px; font-size:1em;"><?php echo $d['cat_name']; ?></p>
                            <!-- Title -->
                            <h4 class="h4-xs"><?php echo $d1['p_name']; ?></h4>

                            <!-- Text -->
                            <p><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 200); ?>
                                
                             
                            </p>

                            <!-- Button -->
								<a href="article-details.php?id=<?php echo $d1['id']; ?>" class="btn btn-tra-white white-hover mt-20">Find Out More</a>

                        </div>	
                    </div>
                </div>	  <!-- End row -->
            </div>	   <!-- END TEXT BLOCK -->	
<?php }} ?>

            </section>	<!-- END TOP-NEWS -->
