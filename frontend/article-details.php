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
									<img class="img-fluid" src="images/blog/post-4-img.jpg" alt="blog-post-image" />		
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



								<!-- RELATED POSTS -->
								<div class="related-posts">

									<!-- Title -->	
									<h5 class="h5-md steelblue-color">Related Posts</h5>	


									<div class="row">
										
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
													<h5 class="h5-sm steelblue-color"><a href="single-post.html">Your Health Is In Your Hands</a></h5>

													<!-- Post Data -->
													<span>Apr 28, 2019 by <span class="blue-color">Dr.Jonathan Barnes</span></span>

													<!-- Post Text -->
													<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
													   gravida donec ipsum, at porta justo...
													</p>

												</div>

											</div>
								 		</div>	<!-- END  BLOG POST #1 -->


								 		<!-- BLOG POST #2 -->
								 		<div class="col-md-6">
								 			<div class="blog-post">

								 				<!-- BLOG POST IMAGE -->
									 			<div class="blog-post-img">
													<img class="img-fluid" src="images/blog/post-3-img.jpg" alt="blog-post-image" />	
												</div>

								 				<!-- BLOG POST TEXT -->
												<div class="blog-post-txt">

													<!-- Post Title -->
													<h5 class="h5-sm steelblue-color"><a href="single-post.html">How Weather Impacts Your Health</a></h5>

													<!-- Post Data -->
													<span>Apr 17, 2019 by <span class="blue-color">Dr.Megan Coleman</span></span>

													<!-- Post Text -->
													<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
													   gravida donec ipsum, at porta justo...
													</p>

												</div>

											</div>
								 		</div>	<!-- END  BLOG POST #2 -->

									</div>	<!-- End row -->

								</div>	<!-- END RELATED POSTS -->


								<!-- POST COMMENTS -->
								<div class="single-post-comments">


									<!-- Title -->	
									<h5 class="h5-md steelblue-color">4 Comments</h5>	


									<!-- COMMENT #1 -->
									<div class="media mt-50">

										<!-- Comment-1 Avatar -->
									  	<img class="mr-3" src="images/post-author-1.jpg" alt="comment-avatar">

									 	<div class="media-body">

									 		<!-- Comment-1 Meta -->
									 		<div class="comment-meta">
									 			<h5 class="h5-xs mt-0 steelblue-color">Jeffrey</h5>											   		
										   		<span class="comment-date">April 20, 2019 at 7:14 PM - </span>
												<span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i> Reply</a></span>
											</div>
											
											<!-- Comment-1 Text -->	
									   		<p>Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium neque id viverra
									   		   suscipit egestas magna porta ratione, mollis risus lectus porta rutrum arcu aenean
									   		   primis in augue luctus neque purus ipsum neque dolor primis suscipit in magna dignissim,
									   		   porttitor hendrerit diam. Nunc gravida ultrices felis
									   		</p>

									   		<hr />

									   		<!-- COMMENT #2 -->
										    <div class="media mt-3">

										    	<!-- Comment-2 Avatar -->
										      	<a href="#" class="pr-3">
										        	<img src="images/post-author-2.jpg" alt="comment-avatar">
										      	</a>

										      	<div class="media-body">

										      		<!-- Comment-2 Meta -->
											 		<div class="comment-meta">
												   		<h5 class="h5-xs mt-0 steelblue-color">Jeremy</h5>
												   		<span class="comment-date">April 20, 2019 at 11:35 PM - </span>
														<span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i> Reply</a></span>
													</div>

										        	<!-- Comment-2 Text -->	
											   		<p>Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium neque id
											   		   viverra suscipit porta ratione, mollis risus lectus porta aliquet lorem purus, 
											   		   quis mollis nisi laoreet vitae
											   		</p>

										     	 </div>											      
										    </div>	<!-- END COMMENT #2 -->

									  	</div>
									</div>	<!-- END COMMENT #1 -->


									<hr />


									<!-- COMMENT #3 -->
									<div class="media mt-40">

										<!-- Comment-4 Avatar -->
									  	<img class="mr-3" src="images/post-author-3.jpg" alt="comment-avatar">

									 	<div class="media-body">

									 		<!-- Comment-4 Meta -->
									 		<div class="comment-meta">
										   		<h5 class="h5-xs mt-0 steelblue-color">Samantha</h5>
										   		<span class="comment-date">April 29, 2018 at 5:41 PM - </span>
												<span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i> Reply</a></span>
											</div>
											
											<!-- Comment-4 Text -->	
									   		<p>Porta ratione, mollis risus lectus porta rutrum arcu aenean primis in augue luctus
									   		   neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius
									   		   impedit enim tempor vitae pulvinar congue augue egestas. Praesent aliquet lorem purus,
									   		   quis mollis nisi laoreet vitae. Mauris nec consequat tortor. Duis fermentum a massa
									   		   in convallis. Quisque eu ultrices enim, et interdum augue
									   		</p>

									   </div>
									</div>	<!-- END COMMENT #3 -->	


									<hr />


									<!-- COMMENT #4 -->
									<div class="media mt-40">

										<!-- Comment-4 Avatar -->
									  	<img class="mr-3" src="images/post-author-4.jpg" alt="comment-avatar">

									 	<div class="media-body">

									 		<!-- Comment-4 Meta -->
									 		<div class="comment-meta">
										   		<h5 class="h5-xs mt-0 steelblue-color">Robert Peterson</h5>
										   		<span class="comment-date">June 11, 2018 at 11:19 AM - </span>
												<span class="btn-reply"><a href="#leave-comment" class="internal-link"><i class="fas fa-reply"></i> Reply</a></span>
											</div>
											
											<!-- Comment-4 Text -->	
									   		<p>Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium neque id viverra
									   		   suscipit egestas magna porta ratione, mollis risus lectus porta rutrum arcu aenean
									   		   primis in augue auctor integer congue
									   		</p>

									   </div>
									</div>	<!-- END COMMENT #4 -->	


									<hr />	


								</div>	<!--END POST COMMENTS -->


								<!-- COMMENT FORM -->
								<div id="leave-comment">
									
									<!-- Title -->
									<h5 class="h5-md steelblue-color">Leave a Comment</h5>
									
									<!-- Text -->
									<p class="grey-color">Your email address will not be published. Required fields are marked *</p>

									<form name="commentForm" class="row comment-form">

										<div id="input-message" class="col-md-12 input-message">
						                	<p>Add Comment *</p>
						                	<textarea class="form-control message" name="message" rows="6" placeholder="Enter Your Comment Here* ..." required></textarea>
						                </div> 
				                                            
						                <div id="input-name" class="col-md-12">
						                	<p>Name*</p>
						                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
						                </div>
						                        
						                <div id="input-email" class="col-md-12">
						                	<p>Email*</p>
						                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
						                </div>
						                                 
						                <!-- Contact Form Button -->
						                <div class="col-lg-12 mt-15 form-btn"> 						                 
						                	<button type="submit" class="btn btn-blue blue-hover submit">Post Comment</button> 
						                </div>
						                                                              
						                <!-- Contact Form Message -->
						                <div class="col-md-12 comment-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>  
					                                              
					                </form>									
								
								</div>	<!-- END COMMENT FORM -->


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