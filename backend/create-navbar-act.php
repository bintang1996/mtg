<?php
include "header.php";

$a=$_POST['cat_name'];
$b=$_POST['cat_desc'];
$c=$_POST['cat_parent'];


$newfilename	= $_POST['P_ATTACHMENT'];

         

$query = "insert into navbar (cat_name, cat_desc, logo, cat_parent) values ('$a', '$b', '$newfilename', '$c')";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
if($result)
 {
 	echo "<script>alert('Success')</script>";
	echo "<meta http-equiv='refresh' content='1 url=navbar-page.php'>";
 }
 else
 {
 	echo "<script>alert('Failed')</script>";
	echo "<meta http-equiv='refresh' content='1 url=navbar-page.php'>";
 }


include "footer.php";
?>