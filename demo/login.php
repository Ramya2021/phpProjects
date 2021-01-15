<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mysql</title>
    <link rel="stylesheet/"
     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="POST">
                <div class="form-group">
                 <label for="username">username</label> 
                 <input type="text" name="username" class="form-control">  
                </div>
               <br>
                <div class="form-group">
                 <label for="password">password</label> 
                 <input type="password" name="password" class="form-control">  
                </div>
               <br>
                <input type ="submit"name ="submit"value="submit">
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username && $password){
        echo $username . "<br>";
        echo $password;
            echo "<br>";
        }else{
            echo "this field cannot be blank" . "<br>";
        }
        $connection=mysqli_connect('localhost','root','root','talevent','3307');
        if ($connection){
            echo "we are connected";
        }else{
            die ("database connection failed");
        }
    }
    ?>
</body>
</html>