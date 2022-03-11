<?php

/*
    parse_str(String , Array [optional]);

    nl2br(string , xhtml => true do close tage  false not support the xhtml); ==> change the \n to <br />


*/
$str= "name=osama&age=25&city=amman&exp=12";

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

$str3 = "I Love PHP \n also \n i LOVE JavaScript"; // check the code in inspect

echo $str3 . "<br>"; // check the code in inspect

$str3 = nl2br($str3 , TRUE);

echo $str3;