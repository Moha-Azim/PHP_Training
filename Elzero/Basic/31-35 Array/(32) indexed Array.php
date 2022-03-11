<?php

$workers = array("Ahmad","Khaled","Samy","hadi","motaseem","Sameer");

echo "<pre>";
 
print_r($workers);

echo "</pre>";

echo $workers [2];

echo "<hr>";
/* And we can create array with this way  */

$workers2 []="ha";
$workers2 [3]="dss";
$workers2 []="gggd";
$workers2 []="asdfg";
echo "<pre>";
 
print_r($workers2);

echo "</pre>";


echo "<hr>";
/*  and you can replace index with another index */

$workers3 = array("Ahmad","Khaled","Samy","hadi","motaseem","Sameer");

$workers3[1]=100;  /* Replacing */
$workers3[]="addme"; /* Adding in the last */
echo "<pre>";

print_r($workers3);

echo "</pre>";


echo "<hr>";
/* Nested Array */

$nest=array("Asia","Africa","America",$isp=array("grmany","french","ispaniol"),"australia");

echo $nest[3][2];
echo "<pre>";
print_r ($isp);
print_r ($nest[3]);
echo "</pre>";


echo "<hr>";
/* Loop with array  */

$langs = array("Html","Js","Css","PHP","Python","React","C++");
echo "<ul>";
foreach($langs as $lan){
    echo "<li>".$lan."</li>";
}
echo "</ul>";

echo "<ul>";
for($lang = 0 ; $lang < count($langs); $lang++){
    echo "<li>".$langs[$lang]."</li>";
    }
    echo "</ul>";