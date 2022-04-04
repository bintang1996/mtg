<?PHP
include "header.php";
$a=$_POST['cat_name'];
$b=$_POST['cat_desc'];
$c=$_POST['cat_id'];



$query="update category_a set cat_name='$a', cat_desc='$b' where cat_id='$c'";
$result= mysqli_query($GLOBALS["___mysqli_ston"], $query);


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