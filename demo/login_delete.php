<?php include "db.php"; ?>
<br>
<?php include "function.php"; ?>
<br>
<?php Deleterows(); ?>

<?php include "includes/header.php"; ?>
   
    <div class="container">
        <div class="col-sm-6">
           <h2 class="text-center">DELETE</h2>
            <form action="login_delete.php" method="POST">
                <div class="form-group">
                 <label for="username">username</label> 
                 <input type="text" name="username" class="form-control">  
                </div>
               <br>
                <div class="form-group">
                 <label for="password">password</label> 
                 <input type="password" name="password" class="form-control"> 
                </div>
                     <div class="form-group">
                     <select name="id"id="">
                       <?php
                         ShowAlldata();
                         ?>
                        
</select>
</div>
                <input class="btn btn-primary" type ="submit"name ="submit"value="DELETE">
            </form>
        </div> 
        
 <?php include "includes/footer.php"; ?>
 
 