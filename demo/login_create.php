    <?php include "db.php"; ?>
    <br>
    <?php include "function.php"; ?>
    <br>
     <?php   Createrows(); ?> 
     
<?php include "includes/header.php"; ?>
   
    <div class="container">
        <div class="col-sm-6" >
           <h1 class="text-center">CREATE</h1>
            <form action="login_create.php" method="post">
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