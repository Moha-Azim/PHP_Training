<?php


setcookie('Zima' , 'test' , time() + 3600 , '/' );

if (count($_COOKIE) > 0){
    echo 'the cookies is allowed ';
}else{
    echo 'the cookies not allowed';
}