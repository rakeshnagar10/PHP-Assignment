<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Find Armstrong ro not</h4>
<form action="" method="POST">
        <input type="text" name="num"><br><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>
<?php  
error_reporting(0);
$num = $_POST['num'];  
if(isset($_POST['btn'])){
    $total=0;  
    $x=$num;  
    while($x!=0)  
    {  
    $rem=$x%10;  
    $total=$total+$rem*$rem*$rem;  
    $x=$x/10;  
    }  
    if($num==$total)  
    {  
    echo "Armstrong number";  
    }  
    else  
    {  
    echo "No armstrong number";  
    }  
}
?>  