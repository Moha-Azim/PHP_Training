<?php

/* array_unique(arrayName, sortingType) */

$arre = array("Ahmad","Ahmad","Khaleed","Khaleed","samy","go","go");

echo "<pre>";
print_r($arre);
echo "</pre>";

$unique = array_unique($arre);

echo "<pre>";
print_r($unique);
echo "</pre>";