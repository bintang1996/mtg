<?php
if(isset($_POST['get_option']))
{
include "koneksi.php";
 $q = $_POST['get_option'];
 $find=mysqli_query($GLOBALS["___mysqli_ston"], "select * from kelurahan where id_kec='$q'");
 while($row=mysqli_fetch_array($find))
 {
  echo "<option value='".$row['id_kel']."'>".$row['nama']."</option>";
 }
 exit;
}
?>