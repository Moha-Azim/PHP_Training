<?php
/* 
array_pop(Arrayname); to remove item from the end 

array_shift(Arrayname); to remove item from the first

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

$pop = array_pop($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $pop;



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

$shift = array_shift($front);
echo "<pre>";
print_r($front);
echo "</pre>";

echo $shift;