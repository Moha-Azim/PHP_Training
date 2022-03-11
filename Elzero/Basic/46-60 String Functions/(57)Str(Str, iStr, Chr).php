<?php

/*

strstr(String[Req], SearchWord[Req], boolean [Optional]);

*/


$str= "Hello  I love PHP cuse it's awesome PHP the best";

$char =strstr($str , "PHP" , false); // ==> true  give you the befor the word in search 

echo $char . "<br>";

$str= "Hello  I love PHP cuse it's awesome PHP the best";

$char =strstr($str , "PHP" , true); 
echo $char. "<br>";

echo "<hr>";

$str = "mohammad@yaho.com";

$char = stristr($str ,"@");
echo $char. "<br>";
 
$char = stristr($str ,"@" , true);
echo $char. "<br>";


echo "<hr>";

$str= "Hello  I love PHP cuse it's awesome PHP the best";


$char =strchr($str , "PHP" , true);   // ==> do the same thing that strstr() doning
echo $char . "<br>";