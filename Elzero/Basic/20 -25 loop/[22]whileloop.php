<?php

$i=1;

while($i<=20){
    echo $i++ ."<br>";
}

/* Another Syntax  */
$e=1;
while($e <= 20):
    echo $e ."<br>";
    $e++;
endwhile;