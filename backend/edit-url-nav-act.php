<?php 
include "header.php";
if(isset($_POST['submit1'])){
$c=$_POST['cat_id'];



                $newfilename = $_POST["P_ATTACHMENT"];

   


$query="update navbar set logo='$newfilename' where cat_id='$c'";
$result= mysqli_query($GLOBALS["___mysqli_ston"], $query);



			

if($result)
 {
    echo "<meta http-equiv='refresh' content='1 url=edit-navbar-page.php?cat_id=";
    echo $c;
    echo "'>";
 }
 else
 {
    echo "<meta http-equiv='refresh' content='1 url=edit-navbar-page.php?cat_id=";
    echo $c;
    echo "'>";
 }}



include "footer.php";

?>