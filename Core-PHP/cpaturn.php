<?php
echo "Write a program for C Pattern:<br> <br>";
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if (($column == 0 & ($row != 0 && $row != 0)) || (($row == 0 || $row == 6) && ($column > 0 && $column < 5)) || ($column == 5 && ($row == 0 || $row == 0)))
        {
            echo "*";    
        }   
        else{
            echo " ";     
        }  
	}        
  echo "<br>";
}
?>