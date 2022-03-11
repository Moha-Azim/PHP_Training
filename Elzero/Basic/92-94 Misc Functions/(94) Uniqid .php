<?php

/*

    uniqid(Prefix , More_Entropy =>true of false);

*/


$uniqid = uniqid();

echo $uniqid . "<br>";

var_dump($uniqid). "<br>";

echo "<hr>";

$uniqid2 =uniqid("server_2/" , TRUE);


echo $uniqid2 . "<br>";

var_dump($uniqid2). "<br>";