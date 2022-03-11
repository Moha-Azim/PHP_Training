<?php

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
       $carry *= $item;

    return   $item;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

// print_r(array_reduce($a, "sum")); // int(15)
 print_r(array_reduce($a, "product",10)); // int(1200), because: 10*1*2*3*4*5
//  print_r(array_reduce($x, "sum")); // string(17) "No data to reduce"
?>