<?php
include "header.php";
$id=$_GET['id'];

$loc='../frontend/assets/imgs/shop';


$data = mysqli_query($GLOBALS["___mysqli_ston"], "delete from product where id='$id'");
$data1 = mysqli_query($GLOBALS["___mysqli_ston"], "delete from collections where p_id='$id'");
$data2 = mysqli_query($GLOBALS["___mysqli_ston"], "delete from variant where p_id='$id'");



$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM p_image where p_id='$id'") or die ("Query gagal dengan error: ".mysqli_error($GLOBALS["___mysqli_ston"]));
while($d=mysqli_fetch_array($sql)){ 
    $name=$d['img_name'];  

    $target=$loc . '/' . $name;

    unlink($target);
}




$data3 = mysqli_query($GLOBALS["___mysqli_ston"], "delete from p_image where p_id='$id'");







if($data)
{

   echo "<meta http-equiv='refresh' content='1 url=product-page.php'>";

}
else
{
    echo "<script>alert('Failed')</script>";
    echo "<meta http-equiv='refresh' content='1 url=product-page.php'>";

}

 include "footer.php";

?>