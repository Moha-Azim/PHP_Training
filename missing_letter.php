<?php


echo "<h1> Hi letters </h1>";

function find_missing_letter($thestr)
{
    $all_letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    $num1 = array_search($thestr[0], $all_letters);

    $num2 = array_search($thestr[(strlen($thestr) - 1)], $all_letters);

    $correct =  array_slice($all_letters, $num1, (1 + $num2 - $num1));

    $correct = implode("", $correct);

    if ($correct == $thestr) {
        return 'there is no letter missing';
    } else {
        for ($i = 0; $i <= strlen($thestr) - 1; $i++) {

            if ($thestr[$i] != $correct[$i]) {
                return $correct[$i];
                exit();
            }
        }
    }
}


echo  find_missing_letter('hijklmnoq');