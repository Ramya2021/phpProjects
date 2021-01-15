<?php
       if(isset($_POST["SUBMIT"])){
           $name=["maria","hema","preeta","prachi","alia","swetha","disha","pragya"];
           
            $minimum=5;
           $maximum=12;
           
        $username=$_POST["username"];
           $password=$_POST["password"];
           
           if(strlen($username)<$minimum){
               echo "username has to be longer than 5" . "<br>";
           }
           if(strlen($username)>$maximum){
               echo "username cannot be longer than 12" . "<br>";
           }
        
           if(!in_array($username,$name)){
               echo "SORRY YOU ARE NOT ALLOWED" . "<br>";
           }else{
               echo "WELCOME" . "<br>";
           }
          // echo "HELLO . $username" . "<br>";
           //echo "YOUR PASSWORD IS . $password";
       }
              // echo "hello" . $username;
              // echo "your password is" . $password;
       
       ?>