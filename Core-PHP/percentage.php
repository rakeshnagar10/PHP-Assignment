<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Percentage, Grade and Day</h3>
    <form action="" method="POST">
        Physics:  <input type="number" name="physics"/></br></br>
        Chemistry:<input type="number" name="chemistry"/></br></br>
        Biology:  <input type="number" name="biology"/></br></br>
        Maths:    <input type="number" name="maths"/></br></br>
        Computer:  <input type="number" name="compter"/></br></br>
        <input type="submit" value="Calculate" name="subtn"/>
    </form>
    <?php
    error_reporting(0);
$physics=$_POST['physics'];
$chemistry=$_POST['chemistry'];
$maths=$_POST['maths'];
$biology=$_POST['biology'];
$compter=$_POST['compter'];
$percetage=0;
if(isset($_POST['subtn']))
 {
  $percetage=($physics + $chemistry + $maths + $biology + $compter)/5;
  echo"Percentage obtained by student is $percetage </br>";
  
  if($percetage>=90)
  {
   $percetage=1;
  }
  else if($percetage>=80)
  {
   $percetage=2;
  }
  else if($percetage>=70)
  {
   $percetage=3;
  }
  else if($percetage>=60)
  {
   $percetage=4;
  }
  else if($percetage>=40)
  {
   $percetage=5;
  }
  else if($percetage>=35)
  {
   $percetage=6;
  }
  else
  {
   $percetage=7;
  }
  
  switch($percetage)
  {
   case 1:
        echo "Grade : A <br>";
        echo "Monday";
   break;
   
   case 2:
        echo "Grade : B <br>";
        echo "Tuesday";
    break;
    
    case 3:
        echo "Grade : C <br>";
        echo "wednesday";
   break;
   
   case 4:
        echo "Grade : D <br>";
        echo "Thusday";
    break;
    
    case 5:
        echo "Grade : E <br>";
        echo "Friday";
        break;
    case 6:
        echo "Grade : F <br>";
        echo "Saturday";
    break;
        
    default:
        echo "Fail!! <br>";
        echo "Sunday";
   }
  
 }

?>
</body>
</html>
