<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>find odd / even</h5>
    <form action="" method="POST">
        <input type="text" name="num"><br><br>
        <input type="submit" namespace="btn"><br><br>
    </form>
</body>
</html>
<?php
error_reporting(0);
$arr = ["Even", "Odd"];
$num = $_POST['num'];  
$input = $num;
echo ($arr[$input % 2]);
 
?>