<?php
/*
sort for index array

sort(arrayname, sortType => The defult is SORT_REGULER )

rsort(arrayname, sortType => The defult is SORT_REGULER) reverse 

*/


$sort = array(
    "Html",
    3,
    "Js",
    "Css",
    "PHP",
    10,
    15,
    "C++",
    30
);
echo "<pre>";
print_r($sort);
echo "</pre>";

sort($sort);   /* SORTING */

echo "<pre>";
print_r($sort);
echo "</pre>";

sort($sort , SORT_STRING); /* يعبر كل الداتا سترينج */
echo "<pre>";
print_r($sort);
echo "</pre>";

echo "<hr>";
echo "<hr>";


rsort($sort); /* عكس القيمة الافتراضية */

echo "<pre>";
print_r($sort);
echo "</pre>";


rsort($sort,SORT_STRING); 

echo "<pre>";
print_r($sort);
echo "</pre>";