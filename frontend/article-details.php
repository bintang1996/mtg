<?php include "header.php";?>

	<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class="breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								    	<li class="breadcrumb-item"><a href="blog-listing.html">Our Blog</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Blog Post</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">5 Benefits of ...</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	





			<!-- BLOG PAGE CONTENT
			============================================= -->
			<div id="single-blog-page" class="wide-100 blog-page-section division" style="background-color:white;">
				<div class="container">
				 	<div class="row">


				 		<!-- SINGLE POST -->
				 		<div class="col-lg-8">
					 		<div class="single-blog-post pr-30">

				 			
					 			<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img mb-40">
                                 <?php include "image-artikel.php"?>		
								</div>	

                                <?php 
                  $id = $_GET['id'];      
                  $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                  while($d=mysqli_fetch_array($sql)){
                            
                ?> 
								<!-- BLOG POST TEXT -->
								<div class="sblog-post-txt">
              
									<!-- Post Title -->
									<h4 class="h4-lg steelblue-color"><?php echo $d['p_name']; ?></h4>

									<!-- Post Data -->
									<span>Posted <?php echo $d['warranty']; ?> by <span>Meditrans Admin</span></span>

									<!-- Post Text -->
									<p class="mt-30"><?php echo $d['p_desc']; ?>
									</p>

							<?php } ?>

									<!-- BLOG POST SHARE LINKS -->
									<div class="post-share-links">


										<!-- POST SHARE ICONS -->
										<div class="post-share-list">
											<ul class="share-social-icons clearfix">	
												<li><a href="#" class="share-ico ico-like"><i class="far fa-thumbs-up"></i> Like</a></li>										
												<li><a href="#" class="share-ico ico-facebook"><i class="fab fa-facebook-f"></i> Share</a></li>
												<li><a href="#" class="share-ico ico-twitter"><i class="fab fa-twitter"></i> Tweet</a></li>	
												<li><a href="#" class="share-ico ico-google-plus"><i class="fab fa-pinterest-p"></i> Pin It</a></li>					
												<li><a href="#" class="share-ico ico-google-plus"><i class="fab fa-google-plus-g"></i> Share</a></li>
											</ul>
										</div>

									</div>	<!-- END BLOG POST SHARE -->
									
                               
								</div>	<!-- END BLOG POST TEXT -->


<br><br>
								<!-- RELATED POSTS -->
								<div class="related-posts">

									<!-- Title -->	
									<h5 class="h5-md steelblue-color">Related Posts</h5>	


									<div class="row">
									
                                    
                                    <?php 
                  $id = $_GET['id'];      
                  $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a where p_id='$id' limit 2") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                  while($d=mysqli_fetch_array($sql)){
                        
                    $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                    while($d1=mysqli_fetch_array($sql1)){
                            
                ?> 
										<!-- BLOG POST #1 -->
								 		<div class="col-md-6">
								 			<div class="blog-post">

								 				<!-- BLOG POST IMAGE -->
									 			<div class="blog-post-img">
													<img class="img-fluid" src="images/blog/post-2-img.jpg" alt="blog-post-image" />	
												</div>

								 				<!-- BLOG POST TEXT -->
												<div class="blog-post-txt">

													<!-- Post Title -->
													<h5 class="h5-sm steelblue-color"><a href="single-post.html"><?php echo $d1['p_name']; ?></a></h5>

													<!-- Post Data -->
													<span><?php echo $d1['warranty']; ?> <span class="blue-color">Meditrans Admin</span></span>

													<!-- Post Text -->
													<p><?php $rt=$d1['p_desc']; echo substr("$rt", 0, 100); ?><br><a style="font-size: 1em; color:blue;" href="article-details.php?id=<?php echo $d1['id']; ?>">Read more.</a></p>

												</div>

											</div>
								 		</div>	<!-- END  BLOG POST #1 -->
<?php }} ?>

						

									</div>	<!-- End row -->

								</div>	<!-- END RELATED POSTS -->


								

				 			</div>
				 		</div>	 <!-- END SINGLE POST -->				 		


				 		<!-- SIDEBAR -->
						<aside id="sidebar" class="col-lg-4">


							<!-- SEARCH FIELD --> 
							<div id="search-field" class="sidebar-div mb-50">								
								<div class="input-group mb-3">
								  	<input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
								 	<div class="input-group-append">
								    	<button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
								 	</div>
								</div>
							</div>
							


							<!-- TAGS CLOUD -->
							<div class="tags-cloud sidebar-div mb-50">
									
								<!-- Title -->
								<h5 class="h5-sm steelblue-color">Tags Cloud</h5>
                                <?php 
                  $id = $_GET['id'];      
                  $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections_a where p_id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                  while($d=mysqli_fetch_array($sql)){
                            
                ?> 
								<span class="badge"><a href="#"><?php echo $d['cat_name']; ?></a></span>
								
                                
                                <?php } ?>
							</div>


						</aside>	<!-- END SIDEBAR -->

				 		
				 	</div>	<!-- End row -->	
				 </div>	 <!-- End container -->
			</div>	<!-- END BLOG PAGE CONTENT -->






<?php include "footer.php";?>