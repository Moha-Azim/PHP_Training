<?php

/*
    str_wrod_count(String , Formmat[optional => 0] , Character List [optional]);
*/

$str = "this is test for & words % counting";
echo $str . "<br>";

echo  str_word_count($str);


echo "<hr>";

$count = str_word_count($str , 1);
echo "<pre>";
print_r($count);
echo "</pre>";


echo "<hr>";

$count = str_word_count($str , 2);  //=> Associative Arrays
echo "<pre>";
print_r($count);
echo "</pre>";


echo "<hr>";

$count2 = str_word_count($str , 1 , "&%");
echo "<pre>";
print_r($count2);
echo "</pre>";