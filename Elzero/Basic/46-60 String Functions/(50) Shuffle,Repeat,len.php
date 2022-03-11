<?php
/*

    str_repeat(String , Repeat);

    str_shuffle(string);

    strlen(string);
    */

    $str = "Moha<br>";
    $rep = str_repeat($str , 13) ;
    
    echo $rep;
    
    echo "<hr>";

    $str2="A B C D E F G H I";

    $shuffle = str_shuffle($str2);
    
    echo $shuffle; 

    echo "<hr>";
    
    $userName = "Mhammad";

    $lenght = strlen($userName);  // [count spaces]

    if($lenght < 10){
    echo $lenght;
    }else{
        echo "sorry choose name less than 15 character";
    }