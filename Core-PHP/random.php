<?php
 echo "Get random values from array: <br> <br> ";
$arr = array( "a"=>"21", "b"=>"31", "c"=>"7", "d"=>"20" );
 
$key = array_rand($arr);
 
echo $arr[$key];
 
?>