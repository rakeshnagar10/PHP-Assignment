<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a program in PHP to print Fibonacci series.</h3>
    <form action="" method="POST">
        <input type="text" name="num"><br><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>
<?php
error_reporting(0);
$num = $_POST['num'];  
echo "<br>";  
if(isset($_POST['btn'])){
    function series($num){  
        if($num == 0){  
            return 0;  
        }else if( $num == 1){  
            return 1;  
        }  else {  
            return (series($num-1) + series($num-2));  
        }   
    }  
    for ($i = 0; $i < $num; $i++){  
        echo series($i);  
        echo "\n";  
    }  
}
?>