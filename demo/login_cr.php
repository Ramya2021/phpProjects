

  <?php include "includes/header.php"; ?>
   
    <div class="container">
        <div class="col-sm-6" >
           <h2 class="text-center">CREATE</h2>
            <form action="login_cr.php" method="post">
                <div class="form-group">
                 <label for="username">username</label> 
                 <input type="text"name="username" class="form-control">  
                </div>
               <br>
                <div class="form-group">
                 <label for="password">password</label> 
                 <input type="password" name="password" class="form-control">  
                </div>
               <br>
                <input class="btn btn-primary" type ="submit"name ="submit"value="CREATE">
            </form>
        </div>
        
  <?php include "includes/footer.php"; ?>
  
<?php
   if (isset($_POST['submit'])){ 
        $username=$_POST['username'];
        $password=$_POST['password'];

    $connection=mysqli_connect('localhost','root','root','talevent','3307');     
    
    if ($connection){
        echo "we are connected";
     }else{
         die ("database connection failed");
        }
    echo "<br>";      
    $query = "INSERT INTO user ".
             '(username,password)'.
             "VALUES ('".$username."','".$password."')";

    $result=mysqli_query($connection,$query);
      if(!$result){
        die('QUERY FAILED'. mysqli_error());
       }else{
          echo "Record Created";
      }
   }
?>
 
    