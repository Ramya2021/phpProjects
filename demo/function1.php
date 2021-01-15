<?php include "db.php"; ?>
   
   <?php
    
    function UpdateTable(){
         if (isset($_POST['submit'])){
        global $connection;
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['id'];
    
        $query="UPDATE user SET ";   
        $query="username='$username', ";
        $query="password='$password', ";
        $query="WHERE id='$id', "; 
             
         $result=mysqli_query($connection,$query);
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
   }else{
   echo "Record updated";
   }
 }
}
?>
  
 <?php
function ShowAlldata(){
    
    global $connection;
    $query="SELECT * FROM user";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die ('Query Failed'. mysqli_error());
    }
    while($row= mysqli_fetch_assoc($result)){
       $id=$row['id'];
        echo"<option value='$id'>$id</option>";
    }
}
?>

