<?php

/*

    strtolower(String); all letters to lower case
    strtoupper(String); all letters to upper case
    ucfirst(String); Firs letter of the string
    lcfirst(String); first letter of the string

    ucwords(String); first letter of every word in the string; 
 */

 $str = "Hi This IS MOHAMMAD";
 echo $str ."<br><br>";

 $str = strtolower($str);
 echo $str . "<br><br>";

 $str = strtoupper($str);
 echo $str . "<br><br>";

 echo "<hr>";

 $str2 = "hi this is moha";
 echo $str2 . "<br> <br>";

 $str2 = ucfirst($str2);
 echo $str2 . "<br> <br>";

 $str2 = lcfirst($str2);
 echo $str2 . "<br> <br>";

 echo "<hr>";

 $str3 = "hi this is all ucwords";
 echo $str3 . "<br> <br>";

 $str3 = ucwords($str3);
 echo $str3 . "<br> <br>";