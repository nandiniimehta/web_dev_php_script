<?php

/*14. Remove the email element from the associative array and display the updated array.*/

$info=array("name"=>'Nandini',"age"=>21,"email"=>'nandinii@gmail.com');
echo"before deleting the email<br/>=";
print_r($info);
echo"<br/>after deleting<br/>";
array_pop($info);
print_r($info);

/*output:
before deleting the email
=Array ( [name] => Nandini [age] => 21 [email] => nandinii@gmail.com )
after deleting
Array ( [name] => Nandini [age] => 21 )*/
?>
