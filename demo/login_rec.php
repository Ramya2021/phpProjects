  

  <?php include "includes/header.php"; ?>
   
    <div class="container">
        <div class="col-sm-6" >
           <h2 class="text-center">CREATE</h2>
            <form action="login_rec.php" method="post">
                <div class="form-group">
                 <label for="day">day</label> 
                 <input type="text"name="day" class="form-control">  
                </div>
               <br>
                <div class="form-group">
                 <label for="month">month</label> 
                 <input type="month" name="month" class="form-control">  
                </div>
               <br>
                <input class="btn btn-primary" type ="submit"name ="submit"value="CREATE">
            </form>
        </div>
        
<?php include "includes/footer.php"; ?>
      
   
 <?php
   if (isset($_POST['submit'])){ 
        $day=$_POST['day'];
        $month=$_POST['month'];
      $connection=mysqli_connect('localhost','root','root','talevent','3307');     
   if ($connection){
     echo "we are connected";
     }else{
         die ("database connection failed");
        }
       echo "<br>";
   }
        $query = "INSERT INTO record ". 
            '(day,month)'.
            "VALUES ('".$day."','".$month."')";

        $result=mysqli_query($connection,$query);
      if(!$result){
        die('QUERY FAILED'. mysqli_error($connection));
       }else{
          echo "Record Created";
      }
?>
    