<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Write a PHP program to find the largest of three numbers using ternary Operator:</h5>
    <form action="" method="POST">
        First num : <input type="text" name="first"> <br><br>
        second num : <input type="text" name="second"> <br><br>
        third num : <input type="text" name="third"> <br><br>
        <input type="submit" name="find"><br><br>
    </form>
</body>
</html>
<?php
error_reporting(0);
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
echo "First num:". $first. "<br>Second num:". $second."<br> Third num:". $third."<br>";
$max = ($first > $second) ? ($first > $third ? $first : $third) : ($second > $third ? $second : $third);
echo "max num:".$max;
?>