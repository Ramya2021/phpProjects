<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    function calculate($n1,$n2){
        $sum = $n1 + $n2;
        echo $sum;
    }
    calculate (300,921);
    echo "<br>";
    function add($number1 , $number2){
        $calculate = $number1 + $number2;
        return "$calculate";
    }
    $result = add(20 , 30);
    echo $result;
    echo "<br>";
    $result = add($result,400);
    echo $result;
    echo "<br>";
    $result = add(200,$result);
    echo $result;
   ?> 
</body>
</html>