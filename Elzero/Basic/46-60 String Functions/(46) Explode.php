<?php

/*
    explode(Seprator , String, Limit);
*/

$str = "hello my name is ahmad";

$exp = explode(" ",$str);

echo "<pre>";
print_r($exp);
echo "</pre>";


$str1 = "hello-my-name-is-ahmad-how-are you";

$exp1 = explode("-",$str1,-2);

echo "<pre>";
print_r($exp1);
echo "</pre>";


$cssf= "main,header,container,footer";

$cssl=explode("," ,$cssf);




for($la=0; $la < count($cssl); $la++){
    echo "<link rel='stylesheet' href='css/".$cssl[$la]."'/>"; //check the inspect cause it's links
}



$sspa ="hello|world|this|is|php|code";

$sss = explode("|",$sspa,3);

echo "<pre>";
print_r($sss);
echo "</pre>";

for($i=0;$i<count($sss); $i++){
    echo "<span>".$sss[$i]." </span>";
}