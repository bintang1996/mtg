
<section class="content-main">







                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Categories</h2>
                        <p>Add, edit or delete a category</p>
                    </div>
                    <div>
                        <input type="text" placeholder="Search Categories" class="form-control bg-white" />
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form name="form1" method="post" action="edit-category-act.php" enctype="multipart/form-data">
                                    <?php
                                    $a=$_GET['cat_id'];
                                    $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM category where cat_id='$a'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($d=mysqli_fetch_array($sql)){ ?>
                                    <div class="mb-4">

                                       <input name="cat_id" type="hidden" value="<?php echo $d['cat_id'];?>" placeholder="Type here" class="form-control" id="product_name" />
                                        <label for="product_name" class="form-label">Name</label>
                                        <input name="cat_name" type="text" value="<?php echo $d['cat_name'];?>" placeholder="Type here" class="form-control" id="product_name" />
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Category Level</label>
                                        <select name="cat_desc" class="form-select">
                                        <option value="<?php echo $d['cat_desc'];?>" selected><?php echo $d['cat_desc'];?></option>
                                           <option value="Brand">Brand</option>
                                           <option value="Category Poli">Category Poli</option>
                                            <option value="Category Level 1">Category Level 1</option>
                                            <option value="ategory Level 2">Category Level 2</option>
                                            <option value="Category Level 3">Category Level 3</option>
                                        </select>
                                    </div>
                                 
                                    <div class="mb-4">
                                    <label class="form-label">Logo</label><br>
                                    <img src='../frontend/assets/imgs/vendor/<?php echo $d['logo'];?>' draggable='false' style="max-width:150px;" /><br>
                                    <br><button type="button" class="btn btn-secondary" style="padding:5px;" data-bs-toggle="modal" data-bs-target="#exampleModalgaul" data-bs-whatever="@mdo">Change Image</button>
<br><br>  </div>
                                    <br><br>
                                        <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                                    
                                </form>
                            </div>
                            <!-- .col// -->
                        </div>
                        <!-- .row // -->
                    </div>
                    <!-- card body .// -->
                </div>
                <!-- card .// -->


                <div class="modal fade" id="exampleModalgaul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Media</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <h4>Upload Media</h4><br>
                                <form id="form1" name="form1" method="post" action="edit-media-cat-act.php" enctype="multipart/form-data">
                             
                                    <div class="tes">
                                    <input type="hidden" class="form-control" value="<?php echo $d['cat_id'];?>" name="cat_id" id="id" /> 
                                     <input type="file" name="P_ATTACHMENT[]" id="P_ATTACHMENT" class="form-control" multiple />
                                    </div>


                                <br>
                                <button type="submit" name="submit1" class="btn btn-md rounded font-sm hover-up">Upload Media</button>
                       
                            </form>

      </div>
    </div>
  </div>
</div>



<?php } ?>


            </section>
            <!-- content-main end// -->


