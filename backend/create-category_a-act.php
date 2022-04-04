<?php
include "header.php";

$a=$_POST['cat_name'];
$b=$_POST['cat_desc'];
$c=$_POST['cat_parent'];

$lokasi_file 	= $_FILES['P_ATTACHMENT']['tmp_name'];
	$tipe_file		= $_FILES['P_ATTACHMENT']['type'];
	$PATIENT_ATTACHMENT	= $_FILES['P_ATTACHMENT']['name'];

	$jumlah = count($_FILES['P_ATTACHMENT']['name']);
		if ($jumlah > 0) {
			for ($i=0; $i < $jumlah; $i++) { 
				

                $temp = explode(".", $_FILES["P_ATTACHMENT"]["name"][$i]);
                $newfilename = round(microtime(true)) . '.' . end($temp);

                $temp1 = $_FILES['P_ATTACHMENT']['type'][$i];


                move_uploaded_file($_FILES["P_ATTACHMENT"]["tmp_name"][$i], "../frontend/assets/imgs/vendor/" . $newfilename);
     

$query = "insert into category_a (cat_name, cat_desc, logo, cat_parent) values ('$a', '$b', '$newfilename', '$c')";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);}}
if($result)
 {
 	echo "<script>alert('Success')</script>";
	echo "<meta http-equiv='refresh' content='1 url=category_a-page.php'>";
 }
 else
 {
 	echo "<script>alert('Failed')</script>";
	echo "<meta http-equiv='refresh' content='1 url=category_a-page.php'>";
 }


include "footer.php";
?>