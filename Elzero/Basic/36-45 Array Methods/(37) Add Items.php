<?php

/* 
    array_push(arrayName, Value1 , Value2 ,...);   To add in the end
 
    array_Unshift(arrayName, Value1 , Value2 ,...); To add in the front

*/


$langs = array(
    "Html",
    "Js",
    "Css",
    "PHP",
    "C++"
);
echo "<pre>";
print_r($langs);
echo "</pre>";

array_push($langs, "Python","Java","xml");
echo "<pre>";
print_r($langs);
echo "</pre>";

echo "<hr>";


$front = array(
    "Html",
    "Js",
    "Css",
    "PHP",
    "C++"
);
echo "<pre>";
print_r($front);
echo "</pre>";

array_unshift($front, "Python","Java","xml");
echo "<pre>";
print_r($front);
echo "</pre>";