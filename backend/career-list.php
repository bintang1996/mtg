<section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Article List</h2>
                        <p>Create, edit, or delete article.</p>
                    </div>
                    <div>
<?php
                    $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel order by id DESC LIMIT 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                    $jumlah_barang = mysqli_num_rows($sql);
                    if ($jumlah_barang>0){
                    while($d=mysqli_fetch_array($sql)){
                        
                        ?>
                    
                        <a href="#" class="btn btn-light rounded font-md">Import</a>
                    
                        <?php }}else{?>


                            <a href="#" class="btn btn-light rounded font-md">Export</a>
                        <a href="#" class="btn btn-light rounded font-md">Import</a>
                        <a href="create-article-page.php?id=0" class="btn btn-primary btn-sm rounded">Create new</a>



                                <?php } ?>
                    </div>
                </div>
                <div class="card mb-4">
                    <header class="card-header">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                            <form action="article-page.php" method="get">
                            <div class="input-group">
                            
                            <input type="text" class="form-control" name="cari" type="search" placeholder="Search term" />
                            <button class="btn btn-light bg" type="submit" value="search"><i class="material-icons md-search"></i></button>
                            </div></form>
                            </div>
                            <div class="col-md-2 col-6">
                                <input type="date" value="02.05.2021" class="form-control" />
                            </div>
                            <div class="col-md-2 col-6">
                                <select class="form-select">
                                    <option selected>Status</option>
                                    <option>Active</option>
                                    <option>Disabled</option>
                                    <option>Show all</option>
                                </select>
                            </div>
                        </div>
                    </header>
                    <!-- card-header end// -->
                    <div class="card-body">
                    <?php 
                    	if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];	
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $a=$mulai+1;
                    $b=1+$a;			
                    $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM lowongan_masuk where desired_position like '%".$cari."%'");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total/$halaman); 
                    $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM lowongan_masuk where desired_position like '%".$cari."%' LIMIT $mulai, $halaman") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                        }else{

                            $halaman = 10;
                            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                            $a=$mulai+1;
                            $b=1+$a;			
                            $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM lowongan_masuk");
                            $total = mysqli_num_rows($result);
                            $pages = ceil($total/$halaman); 
                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM lowongan_masuk LIMIT $mulai, $halaman") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                             

                        }

                    while($d=mysqli_fetch_array($sql)){
                    ?>
                        <!-- itemlist  .// -->
                        <article class="itemlist">
                            <div class="row align-items-center">
                                <div class="col col-check flex-grow-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4 col-8 flex-grow-1 col-name">
                                    <a class="itemside" href="edit-article-page.php?id=<?php echo $d['id_lowongan']; $id=$d['id']; ?>">

                                 

                                        <div class="left">
                                        <?php $sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where a_id='$id' limit 1"); while($d3=mysqli_fetch_array($sql3)){?>
                                         <p><?php echo $d3['img_name']; ?><a target="_blank" href="../frontend/assets/imgs/shop/<?php echo $d3['img_name']; ?>" title="Download Document"><i class="glyphicon glyphicon-download-alt"></i></a></p>
                      <?php } ?>
                                        </div>
                                      

                                        <div class="info">
                                            <h6 class="mb-0"><?php echo $d['name'];?></h6>
                                        </div>
                                        <div class="info">
                                            <h6 class="mb-0"><?php echo $d['phone'];?></h6>
                                        </div>
                                        <div class="info">
                                            <h6 class="mb-0"><?php echo $d['linkedin_profile'];?></h6>
                                        </div>
                                    </a>
                                </div>
      
                         
                              
                            </div>
                            <!-- row .// -->
                        </article>
                        <!-- itemlist  .// -->

                        <?PHP } ?>

                    </div>
                    <!-- card-body end// -->
                </div>
                <!-- card end// -->
             <?php include "pagination.php";?>


           
  













            </section>
            <!-- content-main end// -->