<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
    
    $arrAdmin = array('mohammad' , 'hiam' , 'yahea');

        if(in_array($_POST['username'] , $arrAdmin , true)){
            echo "hello ".$_POST['username']. " you are in admin site";
        }else{
            echo "that's wrong usrer name !!!";
        }
}else{
    echo "this is wrong action";
}