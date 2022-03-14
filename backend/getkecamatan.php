<?php
if(isset($_POST['get_option']))
{
include "koneksi.php";
 $q = $_POST['get_option'];
 $find=mysqli_query($GLOBALS["___mysqli_ston"], "select * from kecamatan where id_kab='$q'");
 while($row=mysqli_fetch_array($find))
 {
  echo "<option value='".$row['id_kec']."'>".$row['nama']."</option>";
 }
 exit;
}
?>