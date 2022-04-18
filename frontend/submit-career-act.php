<?php
include "koneksi.php";
$a=$_POST['name']; 
$b=$_POST['email']; 
$c=$_POST['phone']; 
$d=$_POST['address']; 
$e=$_POST['linkedin']; 
$f=$_POST['current_company']; 
$g=$_POST['current_position']; 
$h=$_POST['desired_position']; 
$i=$_POST['ket']; 

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
           

				$query1="INSERT INTO p_image (cv_id, img_name, urutan, tipe_file)values('$b', '$newfilename', '$ii', '$temp1')";
				$result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
           
								
		}}


				$query="INSERT INTO lowongan_masuk (nama, email, phone, address, linkedin_profile, current_company, current_position, desired_position, ket)values('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')";
				$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);	
    
        if($result1)
        {
            echo "<script>alert('Terkirim')</script>";
           echo "<meta http-equiv='refresh' content='1 url=career.php";
       
           echo "'>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
           echo "<meta http-equiv='refresh' content='1 url=career.php";
      
           echo "'>";
        }


    
?>