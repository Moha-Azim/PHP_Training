<?php
//

$directroy = "(65)direc";

if (is_dir($directroy)){
    echo "the ".$directroy." Directroy is alreday exist ";
}else{
    mkdir($directroy);
    echo 'the directory '.$directroy.' created';
}

echo "<hr>";

$remove = "(65)redir";

if(is_dir($remove)){
    rmdir($remove);   // rmdir()  can't delete the dir  unless the directory  is empty 
    echo 'the directory '.$remove.'  removed' ;
}else{
    echo "there is no Directroy  named ".$remove." ";
}