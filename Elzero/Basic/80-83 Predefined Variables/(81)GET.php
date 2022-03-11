<?php

$admins = array ('mohammad' , 'hiam' , 'yahea');

if (in_array($_GET['username'] , $admins) ){
    echo "welcom ".$_GET['username']." in the admin site";
}else{
    echo "the user name is wrong";
}