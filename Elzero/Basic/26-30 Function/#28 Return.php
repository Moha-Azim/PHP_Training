<?php


function one(){
   
}

var_dump (one());

echo "<br>";

function two(){
    return;
}

var_dump (two());

echo "<br>";

function three(){
    return NULL;
}

var_dump (three());


echo "<br>";
echo "<br>";
echo "<br>";

function multinum($num){
    $result = $num * $num;
    return $result;
} 
echo multinum(10);