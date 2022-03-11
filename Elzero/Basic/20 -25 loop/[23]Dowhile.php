<?php

$i=0;

do{
echo $i . "<br>";

$i++;
}while($i < 10);


$a = array("mohammad","hiam","azem","hammad");


$m=0;
echo "<ol>";
do{
    echo "<li>".$a[$m]."</li>";
    $m++;
}while($m < count($a));

echo "</ol>";