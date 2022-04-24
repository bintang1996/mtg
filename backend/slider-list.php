<?php 

if(isset($_POST['submit1'])){
$link_slider=$_POST['link_slider']; 	
$atas_judul=$_POST['atas_judul'];
$judul=$_POST['judul'];
$deskripsi=$_POST['deskripsi'];

	$lokasi_file 	= $_FILES['P_ATTACHMENT']['tmp_name'];
	$tipe_file		= $_FILES['P_ATTACHMENT']['type'];
	$PATIENT_ATTACHMENT	= $_FILES['P_ATTACHMENT']['name'];

	$jumlah = count($_FILES['P_ATTACHMENT']['name']);
		if ($jumlah > 0) {
			for ($i=0; $i < $jumlah; $i++) { 
				

                $temp = explode(".", $_FILES["P_ATTACHMENT"]["name"][$i]);
                $newfilename = round(microtime(true)) . '.' . end($temp);

                $temp1 = $_FILES['P_ATTACHMENT']['type'][$i];


                move_uploaded_file($_FILES["P_ATTACHMENT"]["tmp_name"][$i], "../frontend/images/slider/" . $newfilename);
              

            

				$query1="INSERT INTO slider_top (type_file, link_slider, slider_img, atas_judul, judul, deskripsi)values('$temp1', '$link_slider', '$newfilename', '$atas_judul', '$judul', '$deskripsi' )";
				$result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	}
                
             
                

								
		}
    
        if($result1)
        {
       
           echo "<meta http-equiv='refresh' content='1 url=slider-page.php";
          
           echo "'>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
           echo "<meta http-equiv='refresh' content='1 url=slider-page.php";
        
           echo "'>";
        }


    }



    if(isset($_POST['submit7'])){


            
        $id = $_POST['p_id'];
            


        $a = count($_POST["gaulbanget"]);
for($i=0;$i<$a;$i++) { 
   

        $query1="UPDATE slider_top set urutan='" . $_POST["gaulbanget"][$i] . "' WHERE id_slider='" . $_POST["gaul"][$i] . "'";
        $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
}
        if($result1)
        {
      
           echo "<meta http-equiv='refresh' content='1 url=slider-page.php";
   
           echo "'>";
        }
        else
        {
           echo "<script>alert('Failed')</script>";
           echo "<meta http-equiv='refresh' content='1 url=slider-page.php";
        
           echo "'>";
        }

    }
        ?>

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



</script>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<section class="content-main">
    <div class="row">
        <div class="col-12">
            <div class="content-header">
                <h2 class="content-title">Slider</h2>                           
            </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgaul" data-bs-whatever="@mdo">+ Add Slider</button>
                <br><br>



            <div class="modal fade" id="exampleModalgaul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">     
                         <h4>Upload Slider</h4><br>
                            <form id="form1" name="form1" method="post" action="slider-page.php" enctype="multipart/form-data">                            
                                
                            
                            <div class="tes">


                                    <input type="hidden" class="form-control" value="<?php echo $d1['id'];?>" name="id" id="id" />
                                    <input type="text" name="atas_judul" placeholder="Atas Judul" class="form-control"/><br>
                                    <input type="text" name="judul" placeholder="Judul" class="form-control"/><br>
                                    <textarea type="text" name="deskripsi" placeholder="Deskripsi" class="form-control"></textarea><br> 
                                    <input type="text" name="link_slider" placeholder="Slider Url" class="form-control"/><br>
                                    <input type="file" name="P_ATTACHMENT[]" id="P_ATTACHMENT" class="form-control" multiple />
                                </div>
                                <br>
                                <button type="submit" name="submit1" class="btn btn-md rounded font-sm hover-up">Upload Slider</button>
                       
                            </form>

                        </div>
                    </div>
                </div>
            </div>















                    <form id="formgaul" name="form1" method="post" action="slider-page.php">
                    <div class="card mb-4">
                             <div class="card-header">
                                <h4>Slider </h4>(png, jpg, jpeg, mp4, webm, ogg)
                            </div>
                        <div class="card-body">
                            <div class="card card-product-grid" id="image-container">
                                <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6" id="image-list">
                         
                                                    <?php $no=0;  $sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM slider_top ORDER BY urutan"); 
                                                    
                                                    while($d3=mysqli_fetch_array($sql3)){ $no++;
                                                    $format_gg=$d3['type_file'];
                                                    if ($format_gg=='image/jpeg' || $format_gg=='image/png'){
                                                    
                                                    
                                                    ?>
                                       
                        
                                            <div class="col" >
                                            
                                            
                                            <input type="hidden"  value="<?php echo $d3['id_slider'];?>" name="p_id" /> 
                                            <input type="hidden"  value="<?php echo $no;?>" name="gaulbanget[]"/>

                                            <div class="card card-product-grid" draggable="true" style="cursor:move;" id="ggbanget">
                                            
                                            <input type="hidden"  value="<?php echo $d3['id_slider'];?>" name="gaul[]" /> 

                                                    <img src='../frontend/images/slider/<?php echo $d3['slider_img'];?>' draggable='false'  /> 
                                                        <div class="info-wrap">
                                                            <p class="title text-truncate"><?php echo $d3['link_slider'];?></p>
                                                            <div class="price mb-2"><?php $urutan1=$d3['urutan']; if($urutan1==1){echo "Default";}?></div>
                                                            <!-- price.// -->
                                                        
                                                            <a href="delete-slider.php?id=<?php echo $d3['id_slider'];?>&nama=<?php echo $d3['slider_img'];?>" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                                            </div>
                                                    </div>
                                                    <!-- card-product  end// -->
                                                </div>             <!-- col  end// -->    
                                       
                                       
                                                            <?php } else{?>
                            
                                                    <div class="col">
                                                        <input type="hidden"  value="<?php echo $d3['id_slider'];?>" name="p_id" /> 
                                                                <input type="hidden"  value="<?php echo $no;?>" name="gaulbanget[]"/>

                                                            <div class="card card-product-grid" draggable="true" style="cursor:move;" >
                                                                <input type="hidden"  value="<?php echo $d3['id_slider'];?>" name="gaul[]" /> 
                                                                    <video draggable='false' controls> <source src='../frontend/images/slider/<?php echo $d3['slider_img'];?>'/> </video>
                                                                    <div class="info-wrap">
                                                                        <p class="title text-truncate"><?php echo $d3['link_slider'];?></p>
                                                                        <div class="price mb-2"><?php $urutan1=$d3['urutan']; if($urutan1==1){echo "Default";}?></div>
                                                                        <!-- price.// -->                                                                        
                                                                        <a href="delete-slider.php?id=<?php echo $d3['id_slider'];?>&nama=<?php echo $d3['slider_img'];?>" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                                                    </div>
                                                            </div>
                                                                <!-- card-product  end// -->
                                                     </div>   
                                                     <?php }}?>  
                                </div>
                                 <br><br>                               
                            </div><!-- card-product-grid  end// -->
                              <button type="submit" name="submit7" class="btn btn-sm font-sm rounded btn-brand">Save Slider Sorting</button>
                              </form>
                        </div>
                    </div>
                    


        </div>
    </div> 

</section>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>

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


let formChanged = false;
myForm.addEventListener('change', () => formChanged = true);
window.addEventListener('beforeunload', (event) => {
  if (formChanged) {
    event.returnValue = 'You have unfinished changes!';
  }
});
</script>    
			




  
