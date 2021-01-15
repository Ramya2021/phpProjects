<?php include "db.php"; ?>
<br>
<?php include "function1.php"; ?>
   
 <?php UpdateTable(); ?>
     
 <?php include "includes/header.php"; ?>
   
    <div class="container">
        <div class="col-sm-6">
           <h2 class="text-center">UPDATE</h2>
            <form action="login_update3.php" method="post">
                <div class="form-group">
                 <label for="usernmae">username</label> 
                 <input type="text" name="username" class="form-control">  
                </div>
               <br>
                <div class="form-group">
                 <label for="password">password</label> 
                 <input type="password" name="password" class="form-control"> 
                </div>
                    <br>
                     <div class="form-group">
                     <select name=""id="">
                     <?php
                         ShowAlldata();
                         ?>
                     </select>
                     </div>
                     <br>
                <input class="btn btn-primary" type ="submit"name ="submit"value="UPDATE">
            </form>
        </div> 
              
  <?php include "includes/footer.php";?>

