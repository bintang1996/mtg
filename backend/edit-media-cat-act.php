<?php 
include "header.php";
if(isset($_POST['submit1'])){
$c=$_POST['cat_id'];



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
     


$query="update category set logo='$newfilename' where cat_id='$c'";
$result= mysqli_query($GLOBALS["___mysqli_ston"], $query);




			

if($result)
 {
    echo "<meta http-equiv='refresh' content='1 url=edit-category-page.php?cat_id=";
    echo $c;
    echo "'>";
 }
 else
 {
    echo "<meta http-equiv='refresh' content='1 url=edit-category-page.php?cat_id=";
    echo $c;
    echo "'>";
 }}}
}



include "footer.php";

?>