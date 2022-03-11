<?php


/* Make loop in a Mutlidimenesionl Array */

$days1 = array(
    "dayone" => array("fish","meat","dainasor"),
    "daytwo" => array("rice","salamon","cat" ),
    "daythree" => array("hi","see","bug")

);

echo "<pre>";
print_r($days1);
echo "</pre>";

foreach($days1 as $key => $val ){
    echo "<h2> in the " .$key ." :</h2>";
    foreach($val as $food){
        echo "<h4>-".$food."</h4> ";
    }
};