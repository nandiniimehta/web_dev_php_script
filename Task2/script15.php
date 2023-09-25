<?php
$a=10;
$b=5;
$c=12;

if($a>$b && $a>$c)
	{
		echo " $a is a Big number. ";
	}
else
	if($b>$c && $b>$a)
	{
		echo " $b is a Big number. ";
	}
else
	if($c>$a && $c>$b)
	{
		echo " $c is a Big number. " ;
	}

?>