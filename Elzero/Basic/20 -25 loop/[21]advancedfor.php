<?php

$i=0;
for(;;){
    if($i > 10){
        break;
    }
    echo "$i"."<br>";
    $i++;
}

echo "<h1>Make urder list using Advanced for loop</h1>";

$lang = array("HTML","Css","JavaScript","PHP","React","Angolar");

$e=0;

echo "<ul>";
for(;;){
    if($e >= count($lang)){
        break;
    }
echo "<li>". $lang[$e]."</li>";
$e++;
}
echo "</ul>";

?>