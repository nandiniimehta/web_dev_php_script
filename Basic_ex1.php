<?php
//Program 1

echo "Hello, PHP!";


//Program 2

$a= "My name is John,";
$b="and I am a PHP developer.";
$c=$a."".$b;

echo nl2br("\n\n$c ");

//program 3

$answer=42;

echo nl2br("\n\n $answer is answer to everything.");

//program 4

$firstname= "Nandini";
$lastname= "Mehta";

$message= $firstname." ".$lastname;
echo nl2br("\n\nHello, $message!");

//program 5
 
$num=42;
$text= "Hello!";

$msg1="The number is:$num,";
$msg2="and the text is:$text";

$msg3=$msg1."".$msg2;
echo nl2br("\n\n $msg3 ");

//Program 6

$x=24;
//echo "$x \n";

$x=26;
echo nl2br("\n\n$x ");

//Program 7

$word1="This";
$word2="is a";
$word3="sentence.";

$sentence=$word1." ".$word2." ".$word3;

echo nl2br("\n\n$sentence ");

//Program 8

$name=(string)readline("Your name: ");

echo nl2br("\n$name ");

//Program 9

echo "<br>";
$text="Helloo";

echo nl2br("'$text' length is: \n"), strlen($text);

//Program 10


$name="Nandini!";
$age=21;

$msg1="Hello $name";
$msg2="You are $age years old.";

$msg3=$msg1." ".$msg2;

echo nl2br("\n\n$msg3 ");

//Program 11

$num1=42;
$str="Hello";

$msg1="The value of num1 is $num1";
$msg2="and str is $str.";

$msg3=$msg1." ".$msg2;

echo nl2br("\n\n$msg3 ");

//Program 12

echo "<html>";
echo "<ul>";
echo"<li style='color:red;'>BOOK</li>";
echo "<li style='color:blue;'>BAG</li>";
echo"<li style='color:green;'>LAPTOP</li>";
echo "</ul>";
echo "</html>";

//Program 13

echo "<br><html>";
echo "<a href='https://www.example.com'>Click Here</a>";
echo "</html>";

//Program 14

echo nl2br("<br><br>Line 1 \n&nbsp&nbsp&nbspLine 2 \n&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLine 3");


?> 