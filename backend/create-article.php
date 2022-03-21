<?php

$a = $_GET['id'];
        if(isset($_GET['id'])){
            $a = $_GET['id'];
            
            $b=$a+1;
           
            $query1="INSERT INTO product (p_name, inven) values ('Untitled Product', 'alert-warning')";
            $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
             
            if($result1)
            {
          
               echo "<meta http-equiv='refresh' content='1 url=edit-product-page.php?id=";
               echo $b;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=product-page.php";
           
               echo "'>";
            }

        }



?>