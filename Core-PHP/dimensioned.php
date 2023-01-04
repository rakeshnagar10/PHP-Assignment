<?php
echo "Declare a Multi Dimensioned array of floats called balances having Three rows and five columns: <br> <br>";
error_reporting(0);
$students = array( array( 'No', 'Name','Eng','Mat','Sci' ),
array( 11, 'Rakesh',65,80,70),
array( 12, 'Mahesh',74,20,40),
array( 13, 'roshan',80,90,50) );
for ( $row = 0; $row < 5; $row++ )
{
 for ( $column = 0; $column < 5; $column++ )
 {
  echo ' | '.$students[$row][$column];
 }
 echo ' | <br />';
}
?>