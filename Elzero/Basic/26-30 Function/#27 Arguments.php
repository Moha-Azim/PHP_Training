<?php


function ageCalcInDays($name,$age){

    echo "Hello ".$name." Your Age In Days Is :";
    echo ($age * 365) ."<br>";
}
ageCalcInDays("MOhammad","22");

ageCalcInDays("hia","23");


function yearList($start , $end){

    echo "<select>";

    for ($i=$start; $start <= $end;$start++){
        echo "<option value= $start>". $start ."</option>";
    }
    echo "</select>";
}

yearList("1999","2021");