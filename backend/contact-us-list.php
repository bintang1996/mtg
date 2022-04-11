<section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">List Contact</h2>
                     
                    </div>
                    <div>
<?php
                    $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM contact_us LIMIT 1") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
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
                          
                            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                            <form action="article-page.php" method="get">
                            <div class="input-group">
                            
                            <input type="text" class="form-control" name="cari" type="search" placeholder="Search term" />
                            <button class="btn btn-light bg" type="submit" value="search"><i class="material-icons md-search"></i></button>
                            </div></form>
                            </div>
                 
                          
                        </div>
                    </header>

          

                    <!-- card-header end// -->
                    <div class="card-body">




                    <table class="table table-stripped">
               <tr>
             
                   <th>Nama</th>
                   <th>email</th>
                   <th>phone</th>
                   <th>Instansi</th>
             
                   <th>Pesan</th>
               </tr>




                    <?php 
                    	if(isset($_GET['cari'])){
                            $cari = $_GET['cari'];	
                    $halaman = 10;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $a=$mulai+1;
                    $b=1+$a;			
                    $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM contact_us where message like '%".$cari."%'");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total/$halaman); 
                    $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM contact_us where message like '%".$cari."%' LIMIT $mulai, $halaman") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                        }else{

                            $halaman = 10;
                            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                            $a=$mulai+1;
                            $b=1+$a;			
                            $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM contact_us");
                            $total = mysqli_num_rows($result);
                            $pages = ceil($total/$halaman); 
                            $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM contact_us LIMIT $mulai, $halaman") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                             

                        }

                    while($d=mysqli_fetch_array($sql)){
                    ?>
                   
                 
                             
                       
       
           
           
           
           <tr>
               
           
           
                                        
                                        
                                        <td>
                                            <h6 class="mb-0"><?php echo $d['name'];?></h6>
                                        </td>
                                            <td>
                                            <h6 class="mb-0"><?php echo $d['email'];?></h6>
                                        </td>
                                            
                                            <td>
                             
                                            <h6 class="mb-0"><?php echo $d['phone'];?></h6></td>
                                            
                             
                                    
                                            <td>
                             
                             <h6 class="mb-0"><?php echo $d['instansi'];?></h6></td>
                             <td>
                              <h6 class="mb-0"><?php echo $d['message'];?></h6></td><tr></table>
                                     
        
                      
                  

                        <?PHP } ?>

                    </div>
                    <!-- card-body end// -->
                </div>
                <!-- card end// -->
             <?php include "pagination.php";?>



            </section>
            <!-- content-main end// -->