<?php
include "koneksi.php";
$USER_NAME = $_POST['email'];
$USER_PASSWORD = $_POST['pass'];

session_start();
$login = mysqli_query($GLOBALS["___mysqli_ston"], "select * from user where email='$USER_NAME' and pass='$USER_PASSWORD'");
if (mysqli_num_rows($login) > 0){
$_SESSION['email'] = $USER_NAME;
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Kombinasi Salah')</script>";
echo "<meta http-equiv='refresh' content='1 url=sign-in.php'>";
}

?>