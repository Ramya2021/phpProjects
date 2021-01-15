<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    echo "+++++++++++++++++++++++";  
    echo "<br>";
    echo "IF ELSE STATEMENT"; 
    echo "<br>";
    echo "+++++++++++++++++++++++";  
    echo "<br>";
        
    if(8 == 9 && 5<10){
        echo "it is true";
    }else{
        echo "it is false";
    }
    echo "<br>";
    echo "+++++++++++++++++++++++";  
   echo "<br>";
    echo "SWITCH STATEMENT";
     echo "<br>";
    echo "+++++++++++++++++++++++"; 
     echo "<br>";
    $number = 50;
    switch ($number){
        case 45:
            echo "it is 45";
            break;
          case 32:
            echo "it is 32";
            break;
        case 50:
            echo "hello everyone";
            break;
            case 29:
            echo "it is 15";
            break;
            case 60:
            echo "it is 60";
            break;
        default:
                echo "we could not find anything";
            break;
    }
    echo "<br>";
    echo "+++++++++++++++++++++++"; 
     echo "<br>";
    echo "WHILE LOOP";
     echo "<br>";
    echo "+++++++++++++++++++++++"; 
     echo "<br>";
    
            $i = 0;
            while($i<10){
                echo "GOOD MORNING" . "<br>";
                $i = $i+1;   
            }
    echo "+++++++++++++++++++++++"; 
    echo "<br>"; 
     echo "FOR LOOP";
     echo "<br>";
     echo "+++++++++++++++++++++++"; 
    echo "<br>"; 
    for ($i = 0; $i<10; $i++){
        echo "$i" ;
         echo "<br>"; 
    }
    echo "+++++++++++++++++++++++"; 
     echo "<br>";
     echo "FOR EACH LOOP";
    echo "<br>";
     echo "+++++++++++++++++++++++"; 
     echo "<br>";
        $numbers = [10, 20, 77, 30, 40, 50, 60,];
            
            foreach($numbers as $variable){
                echo "$variable" . "<br>";
            }
     echo "+++++++++++++++++++++++"; 
     echo "<br>";
     echo "FUNCTION";
     echo "<br>";
     echo "+++++++++++++++++++++++"; 
     echo "<br>";
        function knowledge(){
        echo "hello guys, how was your day";
    }
    knowledge();
    
?>
    
</body>
</html>