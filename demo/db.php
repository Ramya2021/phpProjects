<?php
 $connection=mysqli_connect('localhost','root','root','talevent','3307');     
   if ($connection){
     echo "we are connected";
     }else{
         die ("database connection failed");
        }
?>