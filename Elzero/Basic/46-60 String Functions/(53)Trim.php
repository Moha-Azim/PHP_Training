<?php

/*
 
    tirm(String, characters list);

     \0 NULL
     \t Tab
     \n New Line
     \r Carriage Return
     \x0B Vertical Tab
     " " Space
 */

 $str = "     I live this is PHP     ";
 echo var_dump($str) . "<br>";

 $str = trim($str);
 echo  var_dump($str) . "<br>";

 echo "<hr>";

 $str2 = "     I live this is PHP";
 echo var_dump($str2) . "<br>";

 $str2 = ltrim($str2); // left trim for spaces   
 echo var_dump($str2) . "<br>";

 echo "<hr>";

 $str3 = "I live this is PHP     ";
 echo var_dump($str3) . "<br>";

 $str3 = rtrim($str3); // left trim for spaces   
 echo var_dump($str3) . "<br>";


 echo "<hr> <hr>" ;
 
 $strr = "I live PHP So much  ";

 echo $strr ."<br>";

 $strr = trim($strr , "I lich");
 echo $strr;