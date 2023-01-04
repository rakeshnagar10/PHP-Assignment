<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total.</h5>
    <form action="" method="POST">
        <input type="number" name="a"><br><br>
        <input type="number" name="b"><br><br>
        <input type="number" name="c"><br><br>
        <input type="number" name="d"><br><br>
        <input type="number" name="e"><br><br>
        <input type="submit" name="btn"><br><br>
    </form>
</body>
</html>
<?php
error_reporting(0);
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$arr = array($a, $b, $c, $d, $e);   
$sum = 0;  
   
//Loop through the array to calculate sum of elements 

for ($i = 0; $i < count($arr); $i++) {   
   $sum = $sum + $arr[$i];  
}    
print("Sum of all the elements of an array: " . $sum);  
?>  