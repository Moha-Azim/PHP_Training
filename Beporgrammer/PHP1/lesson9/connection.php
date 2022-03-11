<?php

$servername="localhost";
$username="root";
$password="123456789";

$connection= new mysqli($servername,$username,$password);

if($connection -> connect_error){
    die ("not connected with the server".$connection -> connect_error);
}else{
    echo "connected successfully ........";
}
?>