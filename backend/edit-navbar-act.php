<?PHP
include "header.php";
$a=$_POST['cat_name'];
$b=$_POST['cat_desc'];
$c=$_POST['cat_id'];
$d=$_POST['cat_parent'];


$query="update navbar set cat_name='$a', cat_desc='$b', cat_parent='$d' where cat_id='$c'";
$result= mysqli_query($GLOBALS["___mysqli_ston"], $query);


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