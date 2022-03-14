<?php
include "header.php";
$cat_id=$_GET['cat_id'];

$data = mysqli_query($GLOBALS["___mysqli_ston"], "delete from category where cat_id='$cat_id'");


if($data)
 {
 	echo "<script>alert('Success')</script>";
	echo "<meta http-equiv='refresh' content='1 url=category-page.php'>";
 }
 else
 {
 	echo "<script>alert('Failed')</script>";
	echo "<meta http-equiv='refresh' content='1 url=category-page.php'>";
 }

 include "footer.php";

?>