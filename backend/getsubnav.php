<?php
if(isset($_POST['get_option']))
{

include "koneksi.php";
 $q = $_POST['get_option'];
 $qq = $q-1;

 if ($qq>0){

 $find=mysqli_query($GLOBALS["___mysqli_ston"], "select * from navbar where cat_desc='$qq'");
 while($row=mysqli_fetch_array($find))
 {
    
  echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";

 }

 exit;}else{echo "<option value='Parent'>Parent</option>";}
}
?>

