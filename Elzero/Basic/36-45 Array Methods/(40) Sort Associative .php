<?php

/*

asort(array neme, sort type);   to sorting the values
arsort(array neme, sort type);  to sorting the values reversely

ksort(arrayName, sortingType); to sorting the keys
krsort(arrayName, sortingType); to sorting the keys reversely

*/


$arr = array(
    "Html" => 12,
    "Js" => 50,
    "Css"=>44,
    "PHP" => 95,
    "C++" => 83
);


echo "<pre>";
print_r($arr);
echo "</pre>";


asort($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

arsort($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";




echo"<hr>";



$arr2 = array(
    "Html" => 12,
    "Js" => 50,
    "Css"=>44,
    "PHP" => 95,
    "C++" => 83
);


echo "<pre>";
print_r($arr2);
echo "</pre>";



ksort($arr2);

echo "<pre>";
print_r($arr2);
echo "</pre>";


krsort($arr2);

echo "<pre>";
print_r($arr2);
echo "</pre>";