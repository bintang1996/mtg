<?php

$a = $_GET['id'];
        if(isset($_GET['id'])){
            $a = $_GET['id'];
            
            $b=$a+1;
           
            $query1="INSERT INTO artikel (p_name, inven) values ('Untitled', 'alert-warning')";
            $result1 = mysqli_query($GLOBALS["___mysqli_ston"], $query1);	
             
            if($result1)
            {
          
               echo "<meta http-equiv='refresh' content='1 url=edit-article-page.php?id=";
               echo $b;
               echo "'>";
            }
            else
            {
               echo "<script>alert('Failed')</script>";
               echo "<meta http-equiv='refresh' content='1 url=article-page.php";
           
               echo "'>";
            }

        }



?>