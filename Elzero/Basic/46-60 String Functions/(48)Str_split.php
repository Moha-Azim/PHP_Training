<?php

/*

    str_split(string, length [default value is 1]); =====> turn string to array and split it

    chunk_split(string , length[default value is 76] , End [default value \r\n]); =====> string stay string but it's split it 

 */


$str1 = "hello world we learing PHP";

echo $str1."<br>";
$to = str_split($str1,3);

echo "<pre>";
print_r($to);
echo "</pre>";

echo "<hr>";

$str2 = "hello world we learing PHP";
echo $str2."<br>";

$to2 = chunk_split($str2 ,2,"^^ ");

echo $to2;