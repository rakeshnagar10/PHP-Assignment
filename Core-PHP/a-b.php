<?php
echo "What will be the values of 'a' and 'b' after the code below is executed? Explain your answer : <br>";
$a = '1'; // $a is a variable type of string with the value '1';
$b = &$a; // $b is the reference of the $a variable.
$b = "2$b"; // $b & $a have for value the string '2' concatenate with the value of the variable $a (string '1')
echo "So, the result is '21'"

?>