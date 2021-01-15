       <html>
<head>
    <title>FORM</title>
</head>
   <body>
            <body style="background-color:white">
           <form action="form.php" method="POST">
              <input type="text" name="username" placeholder="USERNAME"> 
              <br>
              <br>
            <input type="password" name="password" placeholder="PASSWORD">
              <br> 
              <br>
            <input type="Submit"name="Enter"value="Enter">
               </form>
               
               <?php
       if(isset($_POST["Enter"])){
        $name=["Maria","Hema","Preeta","Prachi","Alia","Swetha","Disha","Pragya"];
            $minimum=5;
           $maximum=12;
        $username=$_POST["username"];
           
           $password=$_POST["password"];
           if(strlen($username)<$minimum){
               echo  "username has to be longer than 5" . "<br>" . "<br>";
           }
           if(strlen($username)>$maximum){
               echo "username cannot be longer than 12" . "<br>" ."<br>";
           }
           if(!in_array($username,$name)){
               echo  "SORRY YOU ARE NOT ALLOWED" . "<br>";
          }else{
            echo  "WELCOME" . "<br>";
           }
        
           //echo "HELLO . $username" . "<br>";
           //echo "YOUR PASSWORD IS . $password";
       }

       ?>
                
   </body>
</html>