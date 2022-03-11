<?php

/*

    substr_count(String , word , Strat , length);

    substr_compare(String 1 , String 2 , start, lenght , true / false insensitivity  false is the defult )

*/


$str ="this is first cours in PHP the best becuse in  PHP  learning how to create a web site PHP";

echo  substr_count($str , "PHP" , 0 ) . "<br>";

echo substr_count($str , "PHP" , 24) . "<br>";

echo substr_count($str , "PHP" , 47 , 3 ). "<br>";


echo "<hr>";

$str1  = "osama";
$str2 = "osamakk";


echo substr_compare( $str1 ,$str2 ,0 ) . "<br>";



$str1  = "osamakkkkk";
$str2 = "osama";


echo substr_compare( $str1 ,$str2 ,0). "<br>";


$str1  = "osama";
$str2 = "osamakk";


echo substr_compare( $str1 ,$str2 , -7,5 ). "<br>";

$str1  = "osama";
$str2 = "Osamaee";




echo substr_compare( $str1 ,$str2 ,0 , 7, true). "<br>";


?>