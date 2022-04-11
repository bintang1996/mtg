<?php
include "koneksi.php";
$a=$_POST['name']; 
$b=$_POST['email']; 
$c=$_POST['phone']; 
$d=$_POST['instansi']; 
$e=$_POST['alamat']; 
$f=$_POST['message']; 




				$query="INSERT INTO contact_us (name, email, phone, instansi, alamat, message)values('$a', '$b', '$c', '$d', '$e', '$f')";
				$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);	
    
        if($result)
        {
            echo "<script>alert('Terkirim')</script>";
           echo "<meta http-equiv='refresh' content='1 url=contact-us.php";
       
           echo "'>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
           echo "<meta http-equiv='refresh' content='1 url=contact-us.php";
      
           echo "'>";
        }


    
?>