<?php
/*Write a PHP script to swap the values of two variables $x and $y using a temporary variable. Display the swapped values using the echo statement.*/

$x=10;
$y=5;
echo "x=".$x;
echo "y=".$y;
$c=$x;
$x=$y; 
$y=$c;

echo "After swapping:<br>";
echo "x= ".$x. " y=".$y;

 
?>