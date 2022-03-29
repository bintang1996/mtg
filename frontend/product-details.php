<?php 
include "header.php";
$id=$_GET['id'];

?>

            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index.php" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <?php $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections where p_id='$id'");
                        while($d=mysqli_fetch_array($sql)){?>
                        <span></span> <a href="shop-grid-right.html"><?php echo $d['cat_name'];?></a> 
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="container mb-30">
                <div class="row">
                    <div class="col-xl-11 col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="product-detail accordion-detail">
                                    <div class="row mb-50 mt-30">
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                            <div class="detail-gallery">
                                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                                <!-- MAIN SLIDES -->
                                                <div class="product-image-slider">

                                                    <?php $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$id' order by urutan");
                                                     while($d=mysqli_fetch_array($sql)){?>

                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/<?php echo $d['img_name'];?>" alt="product image" />
                                                    </figure>
                                                   
                                                    <?php } ?>

                                                    <?php $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM variant where p_id='$id'");
                                                     while($d=mysqli_fetch_array($sql)){?>

                                                    <figure class="border-radius-10">
                                                        <img src="assets/imgs/shop/<?php echo $d['P_ATTACHMENT'];?>" alt="product image" /><BR>
                                                        <P class="text-center"><?php echo $d['variant_name'];?><P>
                                                    </figure>
                                                    
                                                    <?php } ?>

                                                </div>
                                                <!-- THUMBNAILS -->
                                                <div class="slider-nav-thumbnails">
                                                <?php $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$id' order by urutan");
                                                     while($d=mysqli_fetch_array($sql)){?>

                                                    <div><img src="assets/imgs/shop/<?php echo $d['img_name'];?>" alt="product image" /></div>
                                                    <?php } ?>

                                                    <?php $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM variant where p_id='$id'");
                                                     while($d=mysqli_fetch_array($sql)){?>

                                                    <div><img src="assets/imgs/shop/<?php echo $d['P_ATTACHMENT'];?>" alt="product image" /></div>
                                                   
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <!-- End Gallery -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail-info pr-30 pl-30">
                                            <?php $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id' limit 1");
                                                     while($d=mysqli_fetch_array($sql)){?>
                                                <span class="stock-status in-stock"> Sale <?php echo $d['discount'];?>% Off</span>
                                                <h2 class="title-detai shop-item-title"><?php echo $d['p_name'];?></h2>
                                                <div class="product-detail-rating">
                                                    <div class="product-rate-cover text-end">
                                                        <div class="product-rate d-inline-block">
                                                            <div class="product-rating" style="width: 90%"></div>
                                                        </div>
                                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                                    </div>
                                                </div>


                                                <div class="clearfix product-price-cover">
                                                    <div class="product-price primary-color float-left">
                                                        <span class="current-price" style="color:#0a666c; font-size:35px;"><?php $angka=$d['price_in_ppn']; echo "Rp " . number_format($angka, 0, ".", ".");?></span>
                                                        <span>
                                                            <span class="save-price font-md color3 ml-15"><?php echo $d['discount'];?>% Off</span>
                                                            <span class="old-price font-md ml-15"><?php $satu=$d['price_ex_ppn']; $dua=$satu/10; $hasil=$satu+$dua; echo "Rp " . number_format($hasil, 0, ".", ".");?></span>
                                                        </span>
                                                    </div>
                                                </div>

                                                


                                                
                                                <div class="short-desc mb-30">
                                                    <p class="font-lg"><?php $desc=$d['p_desc']; $cetak = substr($desc, 0, 200);  echo $cetak; ?> ....</p>
                                                </div>
                                                

                                                <?php } ?>

                    


                                                <div class="detail-extralink mb-50">
       
                                                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                                                            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

                                                                                                                <div class="row">

                                                            <script>
                                                                $(document).ready(function() {
                                                            $('.variable-field').on("input change select", function() {
                                                                var $row = $(this).closest('tr');
                                                            
                                                                var qty = $row.find('.quantity').val() || 0;
                                                                var costprice = $row.find('.costpriceunit').val() || 0;
                                                                var costprice1 = $row.find('.costpriceunit1').val() || 0;

                                                            
                                                                $row.find('.totalcostprice1').val((qty * costprice) + (costprice1 * costprice));
                                                            });
                                                            });
                                                            </script>


                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                            <table class="table proposal-table" id="proposal-table">

                                                            <tbody>
                                                            <tr>
                                                            <?php $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id' limit 1");
                                                              while($d=mysqli_fetch_array($sql)){?>
                                                            <input type="hidden" placeholder="Rp" name="price_ex_ppn" value="<?php echo $d['price_in_ppn'] ?>" class="form-control variable-field quantity" />
                                                           
                                                           
                                                           
                                                            <td style="width:37%;" ><select class="form-control variable-field costpriceunit1" name="qty" id="prop" required >    
                                                                <option>Select Variant</option>
                                                                
                                                                <?php 
                                                                $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM variant where p_id='$id' ");
                                                                while($d=mysqli_fetch_array($result)){
                                                                ?>

                                                                <option value="<?php if ($result>0){echo $d['surcharge'];}else{}?>"><?php if ($result>0){echo $d['variant_name'];}else{echo "No Variant";}?></option>
                                                            
                                                                <?php } ?></select></td>
                                        






                                                            
                                                                <td style="width:23%;"><input type="number"   placeholder="Qty" value="" class="form-control variable-field costpriceunit" name="qty" required /></td>
                                        
                                                                <td style="width:40%;">IDR : <input type="number" style="border:none; width:60%;" class="totalcostprice1" id="rupiah" name="sub_total" readonly /></td>
                                                            <?php } ?>
                                                                </tr>

                                                            </tbody>
                                                            </table>

                                                            </div>







                                                    <div class="product-extra-link2">
                                                        <button type="submit" class="button button-add-to-cart shop-item-button"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <!-- Detail Info -->
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="tab-style3">
                                            <ul class="nav nav-tabs text-uppercase">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info">Specification</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab" href="#Vendor-info">Brand</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content shop_info_tab entry-main-content">
                                                <div class="tab-pane fade show active" id="Description">
                                                    <div class="">
                                                        tes
                                                    <?php 
                                                    $id=$_GET['id'];

                                                                $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id' limit 1");
                                                                while($d=mysqli_fetch_array($result)){ echo $d['p_desc']; }
                                                                ?>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="Additional-info">
                                                <?php 
                                                $id=$_GET['id'];

                                                $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id' limit 1");
                                                                while($d=mysqli_fetch_array($result)){ echo $d['spec']; }
                                                                ?>
                                                </div>
                    
                                                <div class="tab-pane fade" id="Vendor-info">
                                                <?php
                                                $id=$_GET['id'];

                                                $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM collections where p_id='$id'");
                        while($d=mysqli_fetch_array($sql)){ $catnama=$d['cat_name'];

                            $sql7 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM category where cat_name='$catnama' and cat_desc='brand' limit 1");
                        while($d7=mysqli_fetch_array($sql7)){
                            
                            
                            
                            ?>
                                                    <div class="vendor-logo d-flex mb-30">
                                                   <img src="assets/imgs/vendor/<?php echo $d7['logo'];?>" alt="" />
                                                        <div class="vendor-name ml-15">
                                                            <h6>
                                                      
                                                                <a href="vendor-details-2.html"><?php echo $d['cat_name'];?></a>

                                                               
                                                            </h6>
                                                           
                                                        </div>
                                                    </div>
                                                    <?php }} ?>
                                                     </div>

                                                
                                                <div class="tab-pane fade" id="Reviews">
                                                    <!--Comments-->
                                                    <div class="comments-area">
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <h4 class="mb-30">Customer questions & answers</h4>
                                                                <div class="comment-list">
                                                                    <div class="single-comment justify-content-between d-flex mb-30">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="assets/imgs/blog/author-2.png" alt="" />
                                                                                <a href="#" class="font-heading text-brand">Sienna</a>
                                                                            </div>
                                                                            <div class="desc">
                                                                                <div class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <span class="font-xs text-muted">December 4, 2021 at 3:12 pm </span>
                                                                                    </div>
                                                                                    <div class="product-rate d-inline-block">
                                                                                        <div class="product-rating" style="width: 100%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="assets/imgs/blog/author-3.png" alt="" />
                                                                                <a href="#" class="font-heading text-brand">Brenna</a>
                                                                            </div>
                                                                            <div class="desc">
                                                                                <div class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <span class="font-xs text-muted">December 4, 2021 at 3:12 pm </span>
                                                                                    </div>
                                                                                    <div class="product-rate d-inline-block">
                                                                                        <div class="product-rating" style="width: 80%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="single-comment justify-content-between d-flex">
                                                                        <div class="user justify-content-between d-flex">
                                                                            <div class="thumb text-center">
                                                                                <img src="assets/imgs/blog/author-4.png" alt="" />
                                                                                <a href="#" class="font-heading text-brand">Gemma</a>
                                                                            </div>
                                                                            <div class="desc">
                                                                                <div class="d-flex justify-content-between mb-10">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <span class="font-xs text-muted">December 4, 2021 at 3:12 pm </span>
                                                                                    </div>
                                                                                    <div class="product-rate d-inline-block">
                                                                                        <div class="product-rating" style="width: 80%"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi repudiandae minus ab deleniti totam officia id incidunt? <a href="#" class="reply">Reply</a></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <h4 class="mb-30">Customer reviews</h4>
                                                                <div class="d-flex mb-30">
                                                                    <div class="product-rate d-inline-block mr-15">
                                                                        <div class="product-rating" style="width: 90%"></div>
                                                                    </div>
                                                                    <h6>4.8 out of 5</h6>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>5 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>4 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>3 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                                </div>
                                                                <div class="progress">
                                                                    <span>2 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                                </div>
                                                                <div class="progress mb-30">
                                                                    <span>1 star</span>
                                                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                                </div>
                                                                <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--comment form-->
                                                    <div class="comment-form">
                                                        <h4 class="mb-15">Add a review</h4>
                                                        <div class="product-rate d-inline-block mb-30"></div>
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-12">
                                                                <form class="form-contact comment_form" action="#" id="commentForm">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <input class="form-control" name="website" id="website" type="text" placeholder="Website" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" class="button button-contactForm">Submit Review</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-60">
                                        <div class="col-12">
                                            <h2 class="section-title style-1 mb-30">Related products</h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row related-products">
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="shop-product-right.html" tabindex="0">Ulstra Bass Headphone</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$238.85 </span>
                                                                <span class="old-price">$245.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="sale">-12%</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="shop-product-right.html" tabindex="0">Smart Bluetooth Speaker</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$138.85 </span>
                                                                <span class="old-price">$145.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="new">New</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="shop-product-right.html" tabindex="0">HomeSpeak 12UEA Goole</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$738.85 </span>
                                                                <span class="old-price">$1245.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6 d-lg-block d-none">
                                                    <div class="product-cart-wrap hover-up mb-0">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="shop-product-right.html" tabindex="0">
                                                                    <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                                    <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                                            </div>
                                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="shop-product-right.html" tabindex="0">Dadua Camera 4K 2021EF</a></h2>
                                                            <div class="rating-result" title="90%">
                                                                <span> </span>
                                                            </div>
                                                            <div class="product-price">
                                                                <span>$89.8 </span>
                                                                <span class="old-price">$98.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
                                <div class="sidebar-widget widget-delivery mb-30 bg-grey-9 box-shadow-none">
                                    <h5 class="section-title style-3 mb-20">Delivery</h5>
                                    <ul>
                                        <li>Dikirim Dari:</li>
                                        <li>
                                            <i style="color:#0a666c;" class="fi fi-rs-marker mr-10"></i>

                                            <?php	
                                            $id=$_GET['id'];

                                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from product where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                            while($d=mysqli_fetch_array($sql)){         
                                            $t1= $d['PROVINSI'];				
                                            $sql4 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from provinsi where id_prov='$t1'");
                                            while($r=mysqli_fetch_array($sql4)){
                                            ?>
                                                <span><?php echo $r['nama'];?></span>
                                             <?php }} ?>

                                             <?php	
       
                                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from product where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                            while($d=mysqli_fetch_array($sql)){         
                                            $t= $d['KABUPATEN'];				
                                            $sql4 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from kabupaten where id_kab='$t'");
                                            while($r=mysqli_fetch_array($sql4)){
                                            ?>
                                            <span><?php echo $r['nama'];?></span>
                                            <?php }} ?>

                                            <?php	
    
                                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from product where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                            while($d=mysqli_fetch_array($sql)){         
                                            $f= $d['KECAMATAN'];				
                                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from kecamatan where id_kec='$f'");
                                            while($a=mysqli_fetch_array($sql)){
                                            ?>
                                            <span><?php echo $a['nama'];?></span>
                                            <?php }} ?>
                                            <?php	
                                            
                                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from product where id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                            while($d=mysqli_fetch_array($sql)){         
                                            $p= $d['KELURAHAN'];				
                                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "select * from kelurahan where id_kel='$p'");
                                            while($a=mysqli_fetch_array($sql)){
                                            ?>
                                            <span><?php echo $a['nama'];?></span>
                                            <?php }} ?>
                                        </li>
                                        <li class="hr"><span></span></li>
                                    </ul>
                                    <h5 class="section-title style-3 mb-20">Return & Warranty</h5>
                                    <ul>
                                        <li>
                                            <i style="color:#0a666c;" class="fi fi-rs-shield-check mr-10"></i>
                                            <span> 100% Authentic </span>
                                        </li>
                                        <li>
                                            <i style="color:#0a666c;" class="fi fi-rs-time-forward-ten mr-10"></i>
                                            <span> 10 Days Return </span>
                                        </li>

                                        <?php 
                                        $id=$_GET['id'];
                                        $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id'");
                                        while($d=mysqli_fetch_array($sql)){ $fr=$d['warranty']; if($fr>0){?>
                                        <li>
                                            <i style="color:#0a666c;" class="fi fi-rs-diploma mr-10"></i>
                                            <span> Product Guarantee <?php echo $d['warranty'];?></span>
                                        </li>
                                        <?php }else{}}?>

                                    </ul>
                                </div>
                                <div class="sidebar-widget widget-vendor mb-30 bg-grey-9 box-shadow-none">
                                    <h5 class="section-title style-3 mb-20">Vendor</h5>
                                    <div class="vendor-logo d-flex mb-30">
                                        <img src="assets/imgs/vendor/vendor-18.svg" alt="" />
                                        <div class="vendor-name ml-15">
                                            <h6>
                                                <a href="vendor-details-2.html">Noodles Co.</a>
                                            </h6>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="contact-infor">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Contact Seller:</strong><span>(+91) - 540-025-553</span></li>
                                        <li class="hr"><span></span></li>
                                    </ul>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="text-brand font-xs">Rating</p>
                                            <h4 class="mb-0">92%</h4>
                                        </div>
                                        <div>
                                            <p class="text-brand font-xs">Ship on time</p>
                                            <h4 class="mb-0">100%</h4>
                                        </div>
                                        <div>
                                            <p class="text-brand font-xs">Chat response</p>
                                            <h4 class="mb-0">89%</h4>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="hr"><span></span></li>
                                    </ul>
                                    <p>Become a Vendor? <a href="page-register.html"> Register now</a></p>
                                </div>
                                <div class="sidebar-widget widget-category-2 mb-30">
                                    <h5 class="section-title style-1 mb-30">Category</h5>
                                    <ul>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Milks & Dairies</a><span class="count">30</span>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-2.svg" alt="" />Clothing</a><span class="count">35</span>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods </a><span class="count">42</span>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a><span class="count">68</span>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a><span class="count">87</span>
                                        </li>
                                    </ul>
                                </div>
                    
                                <!-- Product sidebar Widget -->
                                <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                                    <h5 class="section-title style-1 mb-30">New products</h5>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="assets/imgs/shop/thumbnail-3.jpg" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="shop-product-detail.html">Chen Cardigan</a></h5>
                                            <p class="price mb-0 mt-5">$99.50</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="assets/imgs/shop/thumbnail-4.jpg" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h6><a href="shop-product-detail.html">Chen Sweater</a></h6>
                                            <p class="price mb-0 mt-5">$89.50</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 80%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="assets/imgs/shop/thumbnail-5.jpg" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h6><a href="shop-product-detail.html">Colorful Jacket</a></h6>
                                            <p class="price mb-0 mt-5">$25</p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>




<!-- CSS Bootstrap Datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Javascript Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js">
</script>
<!-- Javascript Bootstrap Datepicker -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js">
</script>


<script type="text/javascript">
$('.datepicker').datepicker();
</script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



<script>





$(document).ready(function () {

$("#prop").select2({

   

});</script>

<?php include "footer.php";?>