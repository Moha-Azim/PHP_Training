<?php

/*

    scandir(dir , sort type , context);
                    sort types=>1- default Alphabet
                                2- SCANDIR_SORT_DESCENDING
                                3- SCANDIR_SORT_NONE
*/


$link = __DIR__."/(73)Scandir test/";

$files = scandir($link , SCANDIR_SORT_NONE);

echo "<pre>";

print_r($files);

echo "</pre>";

echo "<hr>";



foreach($files as $delet ){
    if ( is_file($link. $delet)){
        unlink($link. $delet);
}
}


// rmdir(__DIR__."/(73)Scandir test"); //  if Not Empty => Error