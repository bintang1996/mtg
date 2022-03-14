<?php
include "header.php";
$cat_id=$_GET['id'];
$id=$_GET['id2'];
$loc='../frontend/assets/imgs/shop';
$nama=$_GET['nama'];
$target=$loc . '/' . $nama;
$data = mysqli_query($GLOBALS["___mysqli_ston"], "delete from p_image where img_id='$cat_id'");
unlink($target);

if($data)
{

   echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
   echo $id;
   echo "'>";
}
else
{
    echo "<script>alert('Failed')</script>";
   echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
   echo $id;
   echo "'>";
}

 include "footer.php";

?>