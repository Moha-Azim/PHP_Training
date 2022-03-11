<?php

/* There is three methods to search 

    1- in_array(Needl, hystack,type);
    2- array_search(Needl , hystack, type); ==> give you the index for the needl
    3- array_key_exsist(Needl, hystack);


    if type was (true)  => mean the value should be (identical)

*/

/* this is  in_array() */

$workers = array("Ahmad","Khaled","Samy","hadi","motaseem","Sameer");

if(in_array("Khaled",$workers,true)){
    echo " Welcom Khaled";
}else{
    echo"There is no Khaled";
}

echo "<hr>";
echo "<hr>";
/* 


    this is  search_array()


*/


$langs = array("Html","Js","Css","PHP","Python","React","C++");





$tre= array_search("Css",$langs,true);
echo $tre."<br>";
echo $langs[$tre]."<br>";



$days1 = array(
    "dayone" => array("fish","meat","dainasor"),
    "daytwo" => array("rice","salamon","cat" ),
    "daythree" => array("hi","see","bug")

);

$seri = array_search("fish",$days1["dayone"],true);
echo "the Index for this value is ". $seri;



echo "<hr>";
echo "<hr>";




/* 


    this is  array_key_exsist()


*/


$languages = array(
    "Html" => "90%",
    "Css" => "80%",
    "Javascript" => "60%",
    "PHP" => "45%",
    "Sql" => "60%"
);

if(array_key_exists("Html",$languages)){
    echo "It's here and the value is ".$languages["Html"];
};