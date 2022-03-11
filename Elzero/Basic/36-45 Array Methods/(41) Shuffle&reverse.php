<?php



/*

    array_reverse(ArrayName , Preserv => if true reversed the index num );

    shuffle(Array Name);

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

$reverse = array_reverse($langs);

echo "<pre>";
print_r($reverse);
echo "</pre>";

$reverseT = array_reverse($langs,true);

echo "<pre>";
print_r($reverseT);
echo "</pre>";

echo "<hr>";

shuffle($langs);

echo "<pre>";
print_r($langs);
echo "</pre>";