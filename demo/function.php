<?php include "db.php"; ?>
<?php
function Createrows(){ 

 if (isset($_POST['submit'])){ 
       global $connection;
       
        $username=$_POST['username'];
        $password=$_POST['password'];
 
        $query = "INSERT INTO user ".
            '(username,password)'.
            "VALUES ('".$username."','".$password."')";

        $result=mysqli_query($connection,$query);
      if(!$result){
        die('QUERY FAILED'. mysqli_error($connection));
       }else{
       echo "Record created";
      }
}
}
?>

<?php
function Readrows(){
global $connection;
 $query="SELECT * FROM user";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die('QUERY FAILED' . mysqli_error($connection));
    }  
    while($row= mysqli_fetch_assoc($result)){ 
     print_r($row);
}
}
?> 

<?php
function Updatetable(){

   if (isset($_POST['submit'])){
    global $connection;
   
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
 
    $query =" UPDATE user SET username='".$username."' , password='".$password."' WHERE id='".$id."' ";
     $result=mysqli_query($connection,$query);
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
   }else{
   echo "Record Updated";
   }
 }
}
?> 

 <?php 
function Deleterows(){
    
if (isset($_POST['submit'])){
    global $connection;
       
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    
    $query="DELETE FROM user WHERE id='".$id."' ";
     $result=mysqli_query($connection,$query);
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
   }else{
   echo "Record Deleted";
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
        die ('Query Failed'. mysqli_error($connection));
    }
    while($row= mysqli_fetch_assoc($result)){
       $id=$row['id'];
        echo"<option value='$id'>$id</option>";
    }
}
?>
