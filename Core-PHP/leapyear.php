<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>find leap year</h5>
    <form action="" method="POST">
        <input type="text" name="year">
        <input type="submit" name="search">
    </form>
</body>
</html>
<?php
error_reporting(0);
$year=$_POST['year'];
echo $year."<br>";
if(isset($_POST['search'])){
    function year_check($year){
        if ($year % 400 == 0)
           print("It is a leap year");
        else if ($year % 100 == 0)
           print("It is not a leap year");
        else if ($year % 4 == 0)
           print("It is a leap year");
        else
           print("It is not a leap year");
     }
     year_check($year);
}
?>