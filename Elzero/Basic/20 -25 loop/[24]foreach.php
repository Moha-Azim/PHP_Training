<?php

$pal = array("nablis", "khalil","gaza","alquds","ramallah","yafa","akaa");

foreach( $pal as $value){
    echo $value. "<br>";
}

echo "<hr> <hr>";

$moha = array(
    "na" =>"nablis",
     "kh" => "khalil",
     "ga" => "gaza",
     "aq" => "alquds",
     "ra" => "ramallah",
     "ya"=> "yafa",
     "ak" => "akaa");

     foreach($moha as $key => $val ){
         echo $key ." => ".$val."<br>";
     }