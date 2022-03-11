<?php

echo  $_SERVER['SERVER_NAME'] ."<br>";

echo '<hr>';
echo "<hr>";


echo $_SERVER['QUERY_STRING']  ."<br>";  // WILL  print the string after the ?  in the link print this in link after ==>  ?

$str = $_SERVER['QUERY_STRING'];

parse_str($str);

echo $name. "<br>".$age. "<br>".$city. "<br>";

echo "<hr>";

$str2= "name=osama&age=25&city=amman&exp=12";

parse_str($str2 , $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";


echo "<hr>";
echo "<hr>";


 echo $_SERVER['HTTP_REFERER'] ."<br>";  // TELL YOU FROM ANY LINK  OR SITE you inter to this site   not all browser or operating system  it   support but  still awesome


 echo "<hr>";
echo "<hr>";


 echo $_SERVER['SERVER_PORT']  ."<br>";  //number of your port  


 echo "<hr>";
echo "<hr>";


echo $_SERVER['DOCUMENT_ROOT'] ."<br>"; // PRINT  THE ROOT OF SERVER  ==> Public html
echo  phpversion() ."<br>";
// echo  ."<br>";