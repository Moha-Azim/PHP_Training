<?php

$ticketPrice  = 500;

if($ticketPrice >= 0 && $ticketPrice < 500){

    echo "Your ticket price is " . $ticketPrice ." there is no discount";

}elseif($ticketPrice >= 500 && $ticketPrice <= 1000){

    echo "Your ticket price is " . $ticketPrice . " your discount is 20%";

}else{

    echo "Your ticket price is " . $ticketPrice . " your discount  is  30%";
}

$pow = 5 ** 2;
echo $pow;

