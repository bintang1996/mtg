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
       
           echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
           echo $id;
           echo "'>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
           echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
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
           
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
               echo $id1;
               echo "'>";
            }
            else
            {
                echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
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
           
                echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                echo $id1;
                echo "'>";
             }
             else
             {
                 echo "<script>alert('Failed')</script>";
                echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                echo $id1;
                echo "'>";
             }
            
            }



            if(isset($_POST['submit4'])){
                $id = $_POST['id'];
                $category = $_POST['category']; 

               $a = addslashes($_POST['p_name']);
               $b = $_POST['price_in_ppn'];
               $c = $_POST['inven'];
               $d = $_POST['p_code'];
               $e = $_POST['distributor_id'];
               $f = $_POST['contract_vp'];
               $g = addslashes($_POST['p_desc']);
               $h = addslashes($_POST['spec']);
               $i = $_POST['trf_price'];
               $j = $_POST['vendor_discount'];
               $k = $_POST['price_ex_ppn'];
               $l = $_POST['b2b_publish_price'];
               $m = $_POST['b2b_max_disc'];
               $n = $_POST['ecatalouge_price'];
               $o = $_POST['ecatalouge_disc'];
               $p = $_POST['warranty'];
               $q = $_POST['last_update_by'];
               $r = $_POST['qty'];
               $s = $_POST['warehouse_location_id'];
               $t = $_POST['length'];
               $u = $_POST['width'];
               $v = $_POST['height'];
               $w = $_POST['weight'];
               $x = $_POST['shipping_fees'];
               $y = $_POST['status'];
               $z = $_POST['discount'];
               $a1 = $_POST['discount_price'];
               $a2 = $_POST['salesfee'];
               $a3 = $_POST['add_id'];
              


                $jumlah_dipilih = count($category);
                mysqli_query($GLOBALS["___mysqli_ston"], "DELETE from collections where p_id='$id'");
                for($x=0;$x<$jumlah_dipilih;$x++){
                mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO collections (p_id, cat_name) values('$id', '$category[$x]')");} 
                     
                $query = "update product set
                p_name = '$a',
                price_in_ppn = '$b', 
                inven = '$c',
                p_code = '$d',
                distributor_id = '$e',
                contract_vp = '$f',
                p_desc = '$g',
                spec = '$h',
                trf_price = '$i',
                vendor_discount = '$j',
                price_ex_ppn = '$k',
                b2b_publish_price = '$l',
                b2b_max_disc = '$m',
                ecatalouge_price = '$n',
                ecatalouge_disc = '$o',
                warranty = '$p',
                last_update_by = '$q',
                qty = '$r',
                warehouse_location_id = '$s',
                length = '$t',
                width = '$u',
                height = '$v',
                weight = '$w',
                shipping_fees = '$x',
                status = '$y',
                discount = '$z',
                discount_price = '$a1',
                salesfee= '$a2',
                add_id= '$a3'
             
                where id='$id'"; 
        
                $result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
                 
                 
                if($result)
                {
              
                   echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                   echo $id;
                   echo "'>";
                }
                else
                {
                   echo "<script>alert('Failed')</script>";
                   echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
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
          
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
               echo $a;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
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
          
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
               echo $aa;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
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
          
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
               echo $id;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
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
                   
                       echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                       echo $id;
                       echo "'>";
                    }
                    else
                    {
                        echo "<script>alert('Failed')</script>";
                       echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                       echo $id;
                       echo "'>";
                    }
            
            
                }






                if(isset($_POST['submit9'])){
                    $id=$_POST['p_id']; 
                    $a1 = $_POST['u_id'];
                    $a = $_POST['address'];
                    $b = $_POST['PROVINSI'];
                    $c = $_POST['KABUPATEN'];
                    $d = $_POST['KECAMATAN'];
                    $e = $_POST['KELURAHAN'];
                   
                    $query1="INSERT INTO user_address (u_id, address, PROVINSI, KABUPATEN, KECAMATAN, KELURAHAN) values('$a1', '$a', '$b', '$c', '$d', '$e')";
                    $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
                     
                    if($result1)
                    {
                   
                       echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                       echo $id;
                       echo "'>";
                    }
                    else
                    {
                        echo "<script>alert('Failed')</script>";
                       echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                       echo $id;
                       echo "'>";
                    }
                
                }


                if(isset($_POST['submit10'])){
	 
                    $id=$_POST['id']; 
                    $id1=$_POST['id1'];
                    $a = $_POST['address'];
                    $b = $_POST['PROVINSI'];
                    $c = $_POST['KABUPATEN'];
                    $d = $_POST['KECAMATAN'];
                    $e = $_POST['KELURAHAN'];

                    mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE user_address set address='$a', provinsi='$b', kabupaten='$c', kecamatan='$d', kelurahan='$e' where ud_id='$id1'");
                    $query1="UPDATE p_image set default1='Default' where img_id='$id'";
                    $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);
                     
                     if($result1)
                     {
                   
                        echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                        echo $id;
                        echo "'>";
                     }
                     else
                     {
                         echo "<script>alert('Failed')</script>";
                        echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
                        echo $id;
                        echo "'>";
                     }
                    
                    }



        ?>
        <style>
div.ex3 {
border:1px solid #6c757d;
height: 100px;
width: 100%;  
overflow-y: auto; 
padding-left:2px; 
border-radius:10px;
}
</style>
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

<?php $id=$_GET['id']; $sql1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM product where id='$id'");  while($d1=mysqli_fetch_array($sql1)){ ?>


    <section class="content-main">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">
                            <h2 class="content-title">Product Details</h2>
                           
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
                                <form id="form1" name="form1" method="post" action="edit-product-page.php" enctype="multipart/form-data">
                             
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















                        <form id="formgaul" name="form1" method="post" action="edit-product-page.php">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Media </h4>(png, jpg, jpeg, mp4, webm, ogg, pdf)
                            </div>
                            <div class="card-body">
                          <div class="card card-product-grid" id="image-container">
                          <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6" id="image-list">
                         
                                    <?php $no=0;  $sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$id' and img_name LIKE '%.webm%' or p_id='$id' and img_name LIKE '%.mp4%' or p_id='$id' and img_name LIKE '%.ogg%' or p_id='$id' and img_name LIKE '%.png%' or p_id='$id' and img_name LIKE '%.jpg%' or p_id='$id' and img_name LIKE '%.jpeg%' or p_id='$id' and img_name LIKE '%.pdf%' ORDER BY urutan"); 
                                    
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
                                        </div>
                                </div>
                                <!-- card-product  end// -->
                            </div>   
                                <?php }}?>
                            
                            
                            </div>

                         



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
                            <form name="form" method="post" action="edit-product-page.php">
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
                                        <label for="product_name" class="form-label">Product title</label>
                                        <input type="text" value="<?php echo $d1['p_name'] ?>" name="p_name" placeholder="Type here" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Product code</label>
                                        <input type="text" value="<?php echo $d1['p_code'] ?>" name="p_code" placeholder="Type here" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Full description</label>
                                        <textarea placeholder="Type here" class="form-control" name="p_desc" id="p_desc" rows="4"><?php echo $d1['p_desc'] ?></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Spesification</label>
                                        <textarea placeholder="Type here" class="form-control" name="spec" id="spec" rows="4"><?php echo $d1['spec'] ?></textarea>
                                    </div>


                                    <script>
                   CKEDITOR.replace( 'spec' );
                CKEDITOR.replace( 'p_desc' );
            </script>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Distributor ID</label>
                                        <select name="distributor_id" class="form-select">
                                            <option value="<?php $dist=$d1['distributor_id']; echo $dist ?>" selected><?php $dist=$d1['distributor_id']; $sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM vendor where dist_id='$dist'");  while($d2=mysqli_fetch_array($sql2)){ echo $d2['distributor_name']; } ?></option>
                                            <?php $data7 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from vendor");
                                            while($d7 = mysqli_fetch_array($data7)){ ?>

                                            <option value="<?php echo $d7['dist_id'];?>"><?php echo $d7['distributor_name'];?></option>

                                           <?php } ?>

                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Warranty</label>
                                        <input type="text" name="warranty" value="<?php echo $d1['warranty'] ?>" placeholder="Type here" class="form-control datepicker" id="product_name" />
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
                                    <table class="table proposal-table" id="proposal-table">

                                    <tbody>
                                        <tr>
                                        <td><label class="form-label">Price (Exclude PPN)</label><input type="number" placeholder="Rp" name="price_ex_ppn" value="<?php echo $d1['price_ex_ppn'] ?>" class="form-control variable-field quantity" name="Quantity" /></td>
                                        <td><label class="form-label">Sales Fee (%)</label><input type="number" placeholder="%" value="<?php echo $d1['salesfee'] ?>" class="form-control variable-field salesfee" name="salesfee" /></td>
                                        
                                        <td><label class="form-label">Discount (%)</label><input type="number" placeholder="%" value="<?php echo $d1['discount'] ?>" class="form-control variable-field costpriceunit" name="discount" /></td>
                                        <td><label class="form-label">Discount (Rp)</label><input type="number" value="<?php echo $d1['discount_price'] ?>" class="form-control width-80 totalcostprice1" name="discount_price" readonly /></td>
                                     
                                         <td><label class="form-label">Final Price (Include PPN)</label><input type="number" value="<?php echo $d1['price_in_ppn'] ?>" class="form-control width-80 totalcostprice2" name="price_in_ppn" readonly /></td>
                                       
                                        </tr>

                                    </tbody>
                                    </table>

                                    </div>










                                     
                                            <div class="mb-4">
                                                <label class="form-label">Transfer price</label>
                                                <input placeholder="Rp" value="<?php echo $d1['trf_price'] ?>" name="trf_price" type="text" class="form-control" />
                                            </div>
                                       
                                            <div class="mb-4">
                                                <label class="form-label">Vendor Discount</label>
                                                <input placeholder="Rp" value="<?php echo $d1['vendor_discount'] ?>" name="vendor_discount" type="text" class="form-control" />
                                        </div>
                                  
                                
                                    
                                   
                                            <div class="mb-4">
                                                <label class="form-label">B2B Published Price</label>
                                                <input placeholder="Rp" value="<?php echo $d1['b2b_publish_price'] ?>" name="b2b_publish_price" type="text" class="form-control" />
                                            </div>
                                  
                                            <div class="mb-4">
                                                <label class="form-label">B2B Maximum Discount</label>
                                                <input placeholder="Rp" value="<?php echo $d1['b2b_max_disc'] ?>" name="b2b_max_disc" type="text" class="form-control" />
                                        </div>
                                


                          





                                    <div class="mb-4">
                                        <label class="form-label">Contract Vendor Price</label>
                                        <input type="text" value="<?php echo $d1['contract_vp'] ?>" name="contract_vp" placeholder="%" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">E Catalouge Price</label>
                                        <input type="text" value="<?php echo $d1['ecatalouge_price'] ?>" name="ecatalouge_price" placeholder="%" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">E Catalouge Discount</label>
                                        <input type="text" value="<?php echo $d1['ecatalouge_disc'] ?>" name="ecatalouge_disc" placeholder="%" class="form-control" id="product_name" />
                                    </div>
                                    <label class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" name="status" value="checked" <?php echo $d1['status'] ?> />
                                        <span class="form-check-label"> Show Online </span>
                                    </label>
                                
                            </div>
                        </div>
                        <!-- card end// -->
                        
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Inventory</h4>
                            </div>
                            <div class="card-body">
                                <div class="row gx-2">
                                    
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Inventory</label>
                                        <select name="inven" class="form-select">
                                            <option value="<?php echo $d1['inven'] ?>" selected><?php $gg=$d1['inven']; if($gg=='alert-success'){echo 'Instock';} else {echo 'Out of Stock';} ?></option>
                                            <option value="alert-success">In Stock</option>
                                            <option value="alert-danger">Out of Stock</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Qty</label>
                                        <input type="number" name="qty" value="<?php echo $d1['qty'] ?>" class="form-control" />
                                    </div>
                                </div>
                                <!-- row.// -->
                            </div>
                        </div>
                        <!-- card end// -->
                        <div class="card mb-12">
                            <div class="card-header">
                                <h4>Shipping Warehouse Location</h4>
                            </div>
                            <div class="card-body">
                                
    <div class="row">
    <div class="col-lg-12 mb-3">
                                                        <label class="form-label">Address <a style="color:green;" href="add-address-page-2.php?p_id=<?php echo $d1['id'];?>">+</a></label>
                                                        <div class="ex3">
                                                        <?php
                                                          $x=$d1['add_id'];
                                                         $a1=$_SESSION['email'];
                                                        $datau = mysqli_query($GLOBALS["___mysqli_ston"], "select * from user where email='$a1'");
                                                        while($du = mysqli_fetch_array($datau)){ $bu=$du['id_user'];}
                                                                        
                                                        $sql2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user_address where u_id='$bu'");
                                                        while($d2=mysqli_fetch_array($sql2)){ ?>
                                                        <label class="mb-2 form-check">

                                                        <input class="form-check-input" value="<?php echo $d2['ud_id'];?>" name="add_id" type="radio" <?php $r=$d2['ud_id']; if($x==$r){echo "checked";} ?> />

                                                        <span class="form-check-label">
                                                        <?php 
                                                        echo $d2['address']; echo "&nbsp;"; $q1=$d2['provinsi']; $q2=$d2['kabupaten']; $q3=$d2['kecamatan']; $q4=$d2['kelurahan']; 
                                                        $sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM provinsi where id_prov='$q1'");
                                                        while($d3=mysqli_fetch_array($sql3)){ echo "Provinsi"; echo "&nbsp;"; echo $d3['nama']; echo "&nbsp;";}
                                                        $sql4 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kabupaten where id_kab='$q2'");
                                                        while($d4=mysqli_fetch_array($sql4)){ echo "<br>"; echo $d4['nama']; echo "&nbsp;";}
                                                        $sql5 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kecamatan where id_kec='$q3'");
                                                        while($d5=mysqli_fetch_array($sql5)){ echo "Kecamatan"; echo "&nbsp;";  echo $d5['nama']; echo "&nbsp;";}
                                                        $sql6 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kelurahan where id_kel='$q4'");
                                                        while($d6=mysqli_fetch_array($sql6)){echo "Kelurahan"; echo "&nbsp;";  echo $d6['nama']; echo "&nbsp;"; }                                                        
                                                        ?> 
                                                        <a style="color:green;" href="edit-address.php?id=<?php echo $d2['ud_id'];?>&id2=<?php echo $d1['id'];?>">[EDIT]</a>
                                                        <a style="color:red;" href="delete-address.php?id=<?php echo $d2['ud_id'];?>?&id2=<?php echo $d1['id'];?>">[DELETE]</a>
                                                    </span>
                                                        </label>                                                       
                                                        <?php } ?>
                                                        </div>
                                                    </div>
                        <br><br>
                
                                      
                                        <div class="col-lg-6">
                                       
                                            <div class="mb-4">
                                                <label for="product_name" class="form-label">Length</label>
                                                <input type="text" name="length" value="<?php echo $d1['length'] ?>" placeholder="inch" class="form-control" id="product_name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="product_name" class="form-label">Width</label>
                                                <input type="text" name="width" value="<?php echo $d1['width'] ?>" placeholder="inch" class="form-control" id="product_name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Height</label>
                                        <input type="text" name="height" value="<?php echo $d1['height'] ?>" placeholder="gam" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Weight</label>
                                        <input type="text" name="weight" value="<?php echo $d1['weight'] ?>" placeholder="Rp" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Shipping fees</label>
                                        <input type="text" name="shipping_fees" value="<?php echo $d1['shipping_fees'] ?>" placeholder="Rp" class="form-control" id="product_name" />
                                    </div>
                                    <button type="submit" name="submit4" class="btn btn-md rounded font-sm hover-up">SAVE</button></form>
                            </div>
                           
                        </div>
                      
                        
                    </div>



                   




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
                                        <th>Image</th>
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
                                        <td><img src='../frontend/assets/imgs/shop/<?php echo $d['P_ATTACHMENT'];?>' draggable='false'  STYLE="max-width:100px;"/></td>
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
      <form name="form" method="post" action="edit-product-page.php">
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