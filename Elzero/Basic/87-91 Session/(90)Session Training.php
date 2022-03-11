<?php




if (empty($_SESSION['cont'])){
    $_SESSION['cont'] = 1;
}else{
    $_SESSION['cont']++;
}


echo 'there is '.$_SESSION['cont']. ' views in this web site';