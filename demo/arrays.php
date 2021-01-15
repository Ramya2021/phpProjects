<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ARRAY</title>
        <link href ="stylesheet.css" rel ="stylesheet">
    </head>
       <body>
           <?php
           echo "ARRAY" . "<br>";
           $title ="ARRAY";
           //this function says hello
           echo "HELLO" . "<br>";
           $name = "RAMYA";
           $NUMBER = "100";
           $NAME ="<h1>HAI RAMYA</h1>";
           echo "$name" . " " . "$NUMBER" . " " . "$NAME";
           $add = 10+20;
           $sub = 100-19;
           $multiply = 50*20;
           $div = 30/2;
           echo "$add <br> $sub, $multiply, $div";
           $MATH = ((10+2)*3/2-5);
           echo "$MATH";
            echo "<br>";
           $number_List = array(10 ,20, 30, 40, 50,);
           print_r ($number_List);
           //echo "$number_List[2]";
            echo "<br>";
           $Names = array("AARTHI", "VIDHYA", "SWETHA", "DIVYA");
           print_r ($Names);
           //echo "$Names[3]";
           echo "<br>";
           if(50 != 50) {
               echo "fifty not equal fifty";
            }else{
               echo "it is false";
           }
          
           ?>
           </body>
        </head>
        </html>