<?php 

if(isset($_POST['submit1'])){
$id=$_POST['id']; 	

	$lokasi_file 	= $_FILES['P_ATTACHMENT']['tmp_name'];
	$tipe_file		= $_FILES['P_ATTACHMENT']['type'];
	$PATIENT_ATTACHMENT	= $_FILES['P_ATTACHMENT']['name'];

	$jumlah = count($_FILES['P_ATTACHMENT']['name']);
		if ($jumlah > 0) {







            
			for ($i=0; $i < $jumlah; $i++) { 
				

                $temp = $_FILES["P_ATTACHMENT"]["name"][$i];
       
                 $newfilename = md5(rand()) . '.' . $temp;
                $temp1 = $_FILES['P_ATTACHMENT']['type'][$i];


                move_uploaded_file($_FILES["P_ATTACHMENT"]["tmp_name"][$i], "../frontend/assets/imgs/shop/" . $newfilename);
                $ii=$i+1;
                if($temp1=='image/jpeg' || $temp1 == 'image/png'){
            

				$query1="INSERT INTO p_image (p_id, img_name, urutan, tipe_file)values('$id', '$newfilename', '$ii', '$temp1')";
				$result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	}
                
                else {

                    $query1="INSERT INTO p_image (p_id, img_name, urutan, tipe_file)values('$id', '$newfilename', '$ii', '$temp1')";
                    $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);


                }

								
		}
    
        if($result1)
        {
       
           echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
           echo $id;
           echo "'>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
           echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
           echo $id;
           echo "'>";
        }


    }}


        if(isset($_POST['submit2'])){
            $id=$_POST['id']; 
            $id1=$_POST['id1']; 
            $target=$_POST['nama'];
            $data = mysqli_query($GLOBALS["___mysqli_ston"], "delete from p_image where img_id = '$id'");
            unlink($target);

            if($data)
            {
           
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $id1;
               echo "'>";
            }
            else
            {
                echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $id1;
               echo "'>";
            }

        }






        if(isset($_POST['submit3'])){
	 
            $id=$_POST['id']; 
            $id1=$_POST['id1'];
            mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE p_image set default1='' where p_id='$id1'");
            $query1="UPDATE p_image set default1='Default' where img_id='$id'";
            $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);
             
             if($result1)
             {
           
                echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
                echo $id1;
                echo "'>";
             }
             else
             {
                 echo "<script>alert('Failed')</script>";
                echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
                echo $id1;
                echo "'>";
             }
            
            }



            if(isset($_POST['submit4'])){
                $id = $_POST['id'];
                $category = $_POST['category']; 

               $a = addslashes($_POST['p_name']);
            
               $g = addslashes($_POST['p_desc']);
            
               $p = $_POST['warranty'];
          


                $jumlah_dipilih = count($category);
                mysqli_query($GLOBALS["___mysqli_ston"], "DELETE from collections_a where p_id='$id'");
                for($x=0;$x<$jumlah_dipilih;$x++){
                mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO collections_a (p_id, cat_name) values('$id', '$category[$x]')");} 
                     
                $query = "update artikel set
                p_name = '$a',
               
                p_desc = '$g',
                warranty = '$p'
              
                where id='$id'"; 
        
                $result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
                 
                 
                if($result)
                {
              
                   echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
                   echo $id;
                   echo "'>";
                }
                else
                {
                   echo "<script>alert('Failed')</script>";
                   echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
                   echo $id;
                   echo "'>";
                }
                }


        if(isset($_POST['submit5'])){

            $a = $_POST['p_id'];
            $b = $_POST['variant_title'];
            $c = $_POST['variant_name'];
            $d = $_POST['surcharge'];
            $e = $_POST['additional_weight'];
           
            $query1="INSERT INTO variant (p_id, variant_title, variant_name, surcharge, additional_weight) values('$a', '$b', '$c', '$d', '$e')";
            $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
             
            if($result1)
            {
          
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $a;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $a;
               echo "'>";
            }

        }


        if(isset($_POST['submit6'])){
            $aa = $_POST['p_id'];
            $a = $_POST['v_id'];
            $b = $_POST['variant_title'];
            $c = $_POST['variant_name'];
            $d = $_POST['surcharge'];
            $e = $_POST['additional_weight'];
           
            $query1="update variant set  variant_title='$b', variant_name='$c', surcharge='$d', additional_weight='$a' where variant_id='$a'";
            $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
             
            if($result1)
            {
          
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $aa;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $aa;
               echo "'>";
            }

        }

        if(isset($_POST['submit7'])){


            
            $id = $_POST['p_id'];
                


            $a = count($_POST["gaulbanget"]);
	for($i=0;$i<$a;$i++) { 
       
    
            $query1="UPDATE p_image set urutan='" . $_POST["gaulbanget"][$i] . "' WHERE img_id='" . $_POST["gaul"][$i] . "'";
            $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
    }
            if($result1)
            {
          
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $id;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $id;
               echo "'>";
            }

        }


        if(isset($_POST['submit8'])){
            $id=$_POST['p_id']; 	
            $id1=$_POST['id']; 
                $lokasi_file 	= $_FILES['P_ATTACHMENT']['tmp_name'];
                $tipe_file		= $_FILES['P_ATTACHMENT']['type'];
                $PATIENT_ATTACHMENT	= $_FILES['P_ATTACHMENT']['name'];
            
                $jumlah = count($_FILES['P_ATTACHMENT']['name']);
                    if ($jumlah > 0) {
            
            
            
            
            
            
            
                        
                        for ($i=0; $i < $jumlah; $i++) { 
                            
            
                            $temp = $_FILES["P_ATTACHMENT"]["name"][$i];
                   
                             $newfilename = md5(rand()) . '.' . $temp;
                            $temp1 = $_FILES['P_ATTACHMENT']['type'][$i];
            
            
                            move_uploaded_file($_FILES["P_ATTACHMENT"]["tmp_name"][$i], "../frontend/assets/imgs/shop/" . $newfilename);
                          
                    
            
                            $query1="UPDATE variant set P_ATTACHMENT='$newfilename' where variant_id='$id1' ";
                            $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	}
                        
            
                                            
                    }
                
                    if($result1)
                    {
                   
                       echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
                       echo $id;
                       echo "'>";
                    }
                    else
                    {
                        echo "<script>alert('Failed')</script>";
                       echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
                       echo $id;
                       echo "'>";
                    }
            
            
                }













        ?>
<script src="//cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script>
<script>


document.addEventListener('DOMContentLoaded', (event) => {

var dragSrcEl = null;

function handleDragStart(e) {
  this.style.opacity = '0.4';
  
  dragSrcEl = this;

  e.dataTransfer.effectAllowed = 'move';
  e.dataTransfer.setData('text/html', this.innerHTML);
}

function handleDragOver(e) {
  if (e.preventDefault) {
    e.preventDefault();
  }

  e.dataTransfer.dropEffect = 'move';
  
  return false;
}

function handleDragEnter(e) {
  this.classList.add('over');
}

function handleDragLeave(e) {
  this.classList.remove('over');
}

function handleDrop(e) {
  if (e.stopPropagation) {
    e.stopPropagation(); // stops the browser from redirecting.
  }
  
  if (dragSrcEl != this) {
    dragSrcEl.innerHTML = this.innerHTML;
    this.innerHTML = e.dataTransfer.getData('text/html');
  }
  
  return false;
}

function handleDragEnd(e) {
  this.style.opacity = '1';
  
  items.forEach(function (item) {
    item.classList.remove('over');
  });
}


let items = document.querySelectorAll('.col .card-product-grid');
items.forEach(function(item) {
  item.addEventListener('dragstart', handleDragStart, false);
  item.addEventListener('dragenter', handleDragEnter, false);
  item.addEventListener('dragover', handleDragOver, false);
  item.addEventListener('dragleave', handleDragLeave, false);
  item.addEventListener('drop', handleDrop, false);
  item.addEventListener('dragend', handleDragEnd, false);
});
});



document.getElementById("ggbanget").onchange = function() {
    document.getElementById("formgaul").submit();
};

$(document).ready(function() {
  $('.variable-field').on("input", function() {
    var $row = $(this).closest('tr');
    var qty = $row.find('.quantity').val() || 0;
    var costprice = $row.find('.costpriceunit').val() || 0;
    $row.find('.totalcostprice').val(qty * costprice);
  });
});
</script>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<?php $id=$_GET['id']; $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM artikel where id='$id'");  while($d1=mysqli_fetch_array($sql1)){ ?>


    <section class="content-main">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">
                            <h2 class="content-title">Article Details</h2>
                           
                        </div>



                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgaul" data-bs-whatever="@mdo">+ Add Media</button>
<br><br>



<div class="modal fade" id="exampleModalgaul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Media</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <h4>Upload Media</h4><br>
                                <form id="form1" name="form1" method="post" action="edit-article-page.php" enctype="multipart/form-data">
                             
                                    <div class="tes">
                                    <input type="hidden" class="form-control" value="<?php echo $d1['id'];?>" name="id" id="id" /> 
                                     <input type="file" name="P_ATTACHMENT[]" id="P_ATTACHMENT" class="form-control" multiple required>
                                    </div>


                                <br>
                                <button type="submit" name="submit1" class="btn btn-md rounded font-sm hover-up">Upload Media</button>
                       
                            </form>

      </div>
    </div>
  </div>
</div>















                        <form id="formgaul" name="form1" method="post" action="edit-article-page.php">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Media </h4>(png, jpg, jpeg, mp4, webm, ogg)
                            </div>
                            <div class="card-body">
                          <div class="card card-product-grid" id="image-container">
                          <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6" id="image-list">
                         
                                    <?php $no=0;  $sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$id' and img_name LIKE '%.webm%' or p_id='$id' and img_name LIKE '%.mp4%' or p_id='$id' and img_name LIKE '%.ogg%' or p_id='$id' and img_name LIKE '%.png%' or p_id='$id' and img_name LIKE '%.jpg%' or p_id='$id' and img_name LIKE '%.jpeg%' ORDER BY urutan"); 
                                    
                                    while($d3=mysqli_fetch_array($sql3)){ $no++;
                                    $format_gg=$d3['tipe_file'];
                                    if ($format_gg=='image/jpeg' || $format_gg=='image/png'){
                                    
                                    
                                    ?>
                                       
                        
                           <div class="col" >
                          
                          
                          <input type="hidden"  value="<?php echo $d3['p_id'];?>" name="p_id" /> 
                          <input type="hidden"  value="<?php echo $no;?>" name="gaulbanget[]"/>

                          <div class="card card-product-grid" draggable="true" style="cursor:move;" id="ggbanget">
                         
                          <input type="hidden"  value="<?php echo $d3['img_id'];?>" name="gaul[]" /> 

                                  <img src='../frontend/assets/imgs/shop/<?php echo $d3['img_name'];?>' draggable='false'  /> 
                                    <div class="info-wrap">
                                        <p class="title text-truncate"><?php echo $d3['img_name'];?></p>
                                        <div class="price mb-2"><?php $urutan1=$d3['urutan']; if($urutan1==1){echo "Foto Sampul";}?></div>
                                        <!-- price.// -->
                                    
                                        <a href="delete-pimage.php?id=<?php echo $d3['img_id'];?>&id2=<?php echo $d3['p_id'];?>&nama=<?php echo $d3['img_name'];?>" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                        <input type="button" value="Copy Url" onclick="Copy();" />
                                      </div>
                                </div>
                                <!-- card-product  end// -->
                            </div>             
                                       
                                       
                                <?php } else{?>
                            
                                 <div class="col">
                                 <input type="hidden"  value="<?php echo $d3['p_id'];?>" name="p_id" /> 
                          <input type="hidden"  value="<?php echo $no;?>" name="gaulbanget[]"/>

                                <div class="card card-product-grid" draggable="true" style="cursor:move;" >
                                <input type="hidden"  value="<?php echo $d3['img_id'];?>" name="gaul[]" /> 
                                    <video draggable='false' controls> <source src='../frontend/assets/imgs/shop/<?php echo $d3['img_name'];?>'/> </video>
                                    <div class="info-wrap">
                                        <p class="title text-truncate"><?php echo $d3['img_name'];?></p>
                                        <div class="price mb-2"><?php echo $d3['default'];?></div>
                                        <!-- price.// -->
                                        
                                        <a href="delete-pimage.php?id=<?php echo $d3['img_id'];?>&id2=<?php echo $d3['p_id'];?>&nama=<?php echo $d3['img_name'];?>" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                
                                        <input type="text" value="https://bisabos.com/blog/cara-membuat-animasi-mengetik-teks-dengan-css-dan-javascript" id="copyText" readonly>
        <!-- The button used to copy the text -->
        <button id="copyBtn">Copy text</button>
        <!--using sweetalert via CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            const copyBtn = document.getElementById('copyBtn')
            const copyText = document.getElementById('copyText')
            
            copyBtn.onclick = () => {
                copyText.select();    // Selects the text inside the input
                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                 Swal.fire({         //displays a pop up with sweetalert
                    icon: 'success',
                    title: 'Text copied to clipboard',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        </script>
                                      
                                      
                                      </div>
                                </div>
                                <!-- card-product  end// -->
                            </div>   
                                <?php }}?>
                            
                            
                            </div>

                         
<script>
  function Copy() {
  var Url = document.getElementById("url");
  Url.innerHTML = window.location.href;
  console.log(Url.innerHTML)
  Url.select();
  document.execCommand("copy");
}
</script>


                          <br><br>

                         

                                    
                                </div>


                                <button type="submit" name="submit7" class="btn btn-sm font-sm rounded btn-brand">Save Image Sorting</button>
                          
                          </form>
                          </div>
                    </div>
                    





                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Basic Information</h4>
                            </div>
                            <div class="card-body">
                            <form name="form" method="post" action="edit-article-page.php">
                            <input type="hidden" name="id" value="<?php echo $d1['id'] ?>" id="product_name" />
                                   
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Category (Collection)</label><br>
                                        <select class="form-control" name="category[]" id="REFERRAL_DOCTOR_NAME" multiple>
                                        <?php 
                                            $data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from collections where p_id='$id'");
                                            while($d4 = mysqli_fetch_array($data)){
                                            ?>
                                            <option value="<?php echo $d4['cat_name'];?>" selected><?php echo $d4['cat_name'];?></option>
                                            <?php } ?>
                                           <?php 
                                           
                                           $data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from category");
                                            while($d4 = mysqli_fetch_array($data)){
                                            ?>
                                            <option value="<?php echo $d4['cat_name'];?>"><?php echo $d4['cat_name'];?></option>
                                            <?php } ?>
                                            
                                            </select>
                                   </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Article title</label>
                                        <input type="text" value="<?php echo $d1['p_name'] ?>" name="p_name" placeholder="Type here" class="form-control" id="product_name" />
                                    </div>
                                   
                                    <div class="mb-4">
                                        <label class="form-label">Full description</label>
                                        <textarea placeholder="Type here" class="form-control" name="p_desc" id="p_desc" rows="4"><?php echo $d1['p_desc'] ?></textarea>
                                    </div>
                              


                                    <script>
                   CKEDITOR.replace( 'spec' );
                CKEDITOR.replace( 'p_desc' );
            </script>
                                 
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Last Update</label>
                                        <input type="text" name="warranty" value="<?php echo date('l, d-m-Y'); ?>" placeholder="Type here" class="form-control datepicker" id="product_name" readonly />
                                    </div>



                                    <div class="row">

                                    <script>
                                        $(document).ready(function() {
                                    $('.variable-field').on("input", function() {
                                        var $row = $(this).closest('tr');
                                        var salesfee = $row.find('.salesfee').val() || 0;
                                        var qty = $row.find('.quantity').val() || 0;
                                        var costprice = $row.find('.costpriceunit').val() || 0;
                                    
                                       
                                        $row.find('.totalcostprice1').val(qty * costprice / 100);
                                        $row.find('.totalcostprice2').val((qty - (qty * costprice / 100)) + ((qty - (qty * costprice / 100)) * 10 / 100) + (qty * salesfee/100));
                                    });
                                    });
                                    </script>


                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 

                                    </div>



                                    <label class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" name="status" value="checked" <?php echo $d1['status'] ?> />
                                        <span class="form-check-label"> Show Online </span>
                                    </label>
                                    <button type="submit" name="submit4" class="btn btn-md rounded font-sm hover-up">Save</button>
      </form>
                                
                            </div>
                        </div>
                        <!-- card end// -->
                        
                    </div>
                   
          
                        <!-- card end// -->
               




                <div class="col-12">

               
<br>




                    <div class="card mb-8">
                                <div class="card-header">
                                <h4>Variants</h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+ Add Variant</button>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                        </th>
                                  
                                        <th>Title</th>
                                        <th>Variant</th>
                                 
                                        <th>Surcharge</th>
                                        <th>Additional Weight</th>
                                  
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php
                                $halaman = 10;
                                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                                $a=$mulai+1;
                                $b=1+$a;			
                                $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM variant where p_id='$id");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total/$halaman); 
                                $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM variant where p_id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d=mysqli_fetch_array($sql)){ $id_title=$d['variant_title']; ?>

   
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                        </td>
                                      <td><?php echo $d['variant_title']  ?></td>
                                        <td><b><?php echo $d['variant_name']  ?></b></td>
                                      

                                        <td>Rp <?php echo $d['surcharge']  ?></td>
                                        <td><?php echo $d['additional_weight']  ?> Kg</td>
                          

                                      
                                        <td class="text-end">
                                          
                                            <div class="dropdown">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                <div class="dropdown-menu" style="z-index:1;">
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalImage<?php echo $d['variant_id']?>" href="#">Add Variant Image</a>
                                                    
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $d['variant_id']?>" href="#">Edit info</a>
                                                    
                                                   
                                                    <a class="dropdown-item text-danger" href="delete-variant.php?id=<?php echo $d['variant_id'];?>&id2=<?php echo $d['p_id'];?>&name=<?php echo $d['P_ATTACHMENT'];?>">Delete</a>


                                                </div>
                                            </div>
                                            <!-- dropdown //end -->
                                        </td>
                                    </tr>
                                 <?php } ?>
                               <br><br>
                                    
                                </tbody>
                            </table>
                            
                         </div>
                        </div>
                        </div>


                 

                

  

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Variant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name="form" method="post" action="edit-article-page.php">
          <div class="mb-3">    
          <input type="hidden" value="<?php echo $d1['id'] ?>" name="p_id" class="form-control" id="product_name" />
                          
                          <label for="product_name" class="form-label">Variant Title</label>
                          <select name="variant_title" class="form-select">
                          <option value="">Pilih Judul Variant</option>
                             <option value="ukuran">Size/Ukuran</option>
                              <option value="warna">Warna</option>
                              <option value="tipe">Tipe</option>
                              <option value="berat">Berat</option>
                          </select>
          </div>
          <div class="mb-3">
  
                                       
            <label for="product_name" class="form-label">Nama Variant</label>
             <input type="text" name="variant_name" placeholder="Contoh: Large, Medium, Small / Merah, Kuning, Hijau" class="form-control" id="product_name" />
                                </div>
             <div class="mb-3">

             <label for="product_name" class="form-label">Surcharge (Additional Price)</label>
              <input type="number" name="surcharge" placeholder="Contoh: 30000" class="form-control" id="product_name" />
                                </div>
              <div class="mb-3">
              <label for="product_name" class="form-label">Additional Weight (Kg)</label>
            <input type="number" name="additional_weight" placeholder="Contoh: 5" class="form-control" id="product_name" />
                                     
          </div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="submit5" class="btn btn-md rounded font-sm hover-up">Add</button>
      </form>
      </div>
    </div>
  </div>
</div>



<?php
                       
                                $sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM variant where p_id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
                                while($d=mysqli_fetch_array($sql)){ $id_title=$d['variant_title']; ?>  


<div class="modal fade" id="exampleModalImage<?php echo $d['variant_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Variant Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <h4>Upload Variant Image</h4><br>
                                <form id="form1" name="form1" method="post" action="edit-product-page.php" enctype="multipart/form-data">
                             
                                    <div class="tes">
                                    <input type="hidden" class="form-control" value="<?php echo $d['p_id'];?>" name="p_id" id="id" /> 
                                    <input type="hidden" class="form-control" value="<?php echo $d['variant_id'];?>" name="id" id="id" /> 
                                     <input type="file" name="P_ATTACHMENT[]" id="P_ATTACHMENT" class="form-control" required>
                                    </div>


                                <br>
                                <button type="submit" name="submit8" class="btn btn-md rounded font-sm hover-up">Upload Variant Image</button>
                       
                            </form>

      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="exampleModal<?php echo $d['variant_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Variant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name="form" method="post" action="edit-product-page.php">
          <div class="mb-3">    
          <input type="hidden" value="<?php echo $d['p_id'] ?>" name="p_id" class="form-control" id="product_name" />
           
          <input type="hidden" value="<?php echo $d['variant_id'] ?>" name="v_id" class="form-control" id="product_name" />
                          
                          <label for="product_name" class="form-label">Variant Title</label>
                          <select name="variant_title" class="form-select">
                          <option value="<?php echo $d['variant_title']?>" selected><?php echo $d['variant_title']?></option>
                             <option value="ukuran">Size/Ukuran</option>
                              <option value="warna">Warna</option>
                              <option value="tipe">Tipe</option>
                              <option value="berat">Berat</option>
                          </select>
          </div>
          <div class="mb-3">
  
                                       
            <label for="product_name" class="form-label">Nama Variant</label>
             <input type="text" name="variant_name" placeholder="Contoh: Large, Medium, Small / Merah, Kuning, Hijau" value="<?php echo $d['variant_name']?>" class="form-control" id="product_name" />
                                </div>
             <div class="mb-3">

             <label for="product_name" class="form-label">Surcharge (Additional Price)</label>
              <input type="number" name="surcharge" placeholder="Contoh: 30000" value="<?php echo $d['surcharge']?>" class="form-control" id="product_name" />
                                </div>
              <div class="mb-3">
              <label for="product_name" class="form-label">Additional Weight (Kg)</label>
            <input type="number" name="additional_weight" placeholder="Contoh: 5" value="<?php echo $d['additional_weight']?>" class="form-control" id="product_name" />
                                     
          </div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="submit6" class="btn btn-md rounded font-sm hover-up">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>


<?php } ?>































                </div>
            </section>

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

    placeholder: "Pilih Provinsi"

});

});
$(document).ready(function () {

$("#kota").select2({

    placeholder: "Pilih Kabupaten"

});

});
$(document).ready(function () {

$("#kec").select2({

    placeholder: "Pilih Kecamatan"

});

});
$(document).ready(function () {

$("#kel").select2({

    placeholder: "Pilih Kelurahan"

});

});



    $(document).ready(function () {

        $("#REFERRAL_DOCTOR_NAME").select2({

            placeholder: "Category"

        });


        $("#WAREHOUSE_LOCATION").select2({

placeholder: "Warehoue Location"

});

    });



var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})

function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'getkabupaten.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("kota").innerHTML=response; 
 }
 });

}	
	
	
 function fetch_select1(val)
{
 $.ajax({
 type: 'post',
 url: 'getkecamatan.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("kec").innerHTML=response; 
 }
 });

}		
	
 function fetch_select2(val)
{
 $.ajax({
 type: 'post',
 url: 'getkelurahan.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("kel").innerHTML=response; 
 }
 });

}	



</script>    
			




  




<?php } ?>