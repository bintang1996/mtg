
<section class="content-main">







                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Navbars</h2>
                        <p>Add, edit or delete a navbar</p>
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
                                    $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM navbar where cat_id='$a'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($d=mysqli_fetch_array($sql)){ ?>
                                    <div class="mb-4">

                                       <input name="cat_id" type="hidden" value="<?php echo $d['cat_id'];?>" placeholder="Type here" class="form-control" id="product_name" />
                                        <label for="product_name" class="form-label">Name</label>
                                        <input name="cat_name" type="text" value="<?php echo $d['cat_name'];?>" placeholder="Type here" class="form-control" id="product_name" />
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Navbar Level</label>
                                        <select name="cat_desc" class="form-select">
                                        <option value="<?php echo $d['cat_desc'];?>" selected><?php echo $d['cat_desc'];?></option>
                                        
                                            <option value="1">Category Level 1</option>
                                            <option value="2">Category Level 2</option>
                                            <option value="3">Category Level 3</option>
                                        </select>
                                    </div>
                                 

                                    <div class='mb-4 search-style-2'>
                                    <label class='control-label' for='KABUPATEN_KOTA'><b>Navbar Parent</b></label>
 
                                    <select name='cat_parent' class="form-control" id='kota'>
                                        <option value="Parent">Parent</option>
                                    </select>
                                    </div>












                                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
 
                            <script>

                            function myFunction() {
                            var x = document.getElementById("mySelect").value;
                            document.getElementById("demo").innerHTML = "Select Category Parent <br>" + x;
                            }




                            function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'getsubnav.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("kota").innerHTML=response; 
 }
 });

}	


$(document).ready(function () {

$("#kota").select2({

    

});

});
$(document).ready(function () {

$("#kota3").select2({

    

});

});

                            </script>


                                    <div class="mb-4">
                                    <label class="form-label">URL</label><br>
                                    <p><?php echo $d['logo'];?></p><br>
                                    <br><button type="button" class="btn btn-secondary" style="padding:5px;" data-bs-toggle="modal" data-bs-target="#exampleModalgaul" data-bs-whatever="@mdo">Change URL</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Change URL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <h4>Change URL</h4><br>
                                <form id="form1" name="form1" method="post" action="edit-url-nav-act.php" enctype="multipart/form-data">
                             
                                    <div class="tes">
                                    <input type="hidden" class="form-control" value="<?php echo $d['cat_id'];?>" name="cat_id" id="id" /> 
                                     <input type="text" name="P_ATTACHMENT" id="P_ATTACHMENT" class="form-control" multiple />
                                    </div>


                                <br>
                                <button type="submit" name="submit1" class="btn btn-md rounded font-sm hover-up">Change URL</button>
                       
                            </form>

      </div>
    </div>
  </div>
</div>



<?php } ?>


            </section>
            <!-- content-main end// -->


