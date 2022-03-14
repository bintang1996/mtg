<?php
include "header.php";
$cat_id=$_GET['id'];

$loc='../frontend/assets/imgs/banner';
$nama=$_GET['nama'];
$target=$loc . '/' . $nama;
$data = mysqli_query($GLOBALS["___mysqli_ston"], "delete from banner3col where id_slider='$cat_id'");
unlink($target);

if($data)
{

   echo "<meta http-equiv='refresh' content='1 url=banner3col-page.php";
 
   echo "'>";
}
else
{
    echo "<script>alert('Failed')</script>";
   echo "<meta http-equiv='refresh' content='1 url=banner3col-page.php";

   echo "'>";
}

 include "footer.php";

?>