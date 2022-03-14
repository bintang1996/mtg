<?php
include "header.php";
$cat_id=$_GET['id'];
$id=$_GET['id2'];
$nama=$_GET['P_ATTACHMENT'];
$loc='../frontend/assets/imgs/shop';
$target=$loc . '/' . $nama;
$data = mysqli_query($GLOBALS["___mysqli_ston"], "delete from variant where variant_id='$cat_id'");
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