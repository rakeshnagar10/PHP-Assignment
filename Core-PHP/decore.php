<?php
echo "Write a PHP script which decodes the following JSON string. <br> <br>"; 
function decoreData($value,$key)
{
echo "$key : $value"."<br>";
}
$a = '{
    "Title": "Php Class",
    "Author": "Tops",
    "Detail":
    { 
    "Publisher": "Tops techonology"
    }
  }';
$json = json_decode($a,true);
array_walk_recursive($json,"decoreData");
?>