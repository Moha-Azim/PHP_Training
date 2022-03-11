<?php

$connection = new mysqli("localhost" , "root" , "123456789", "newlife");

if($connection -> connect_error){
    echo "somthing Wrong".$connection ->connect_error;
}else{
    echo "Successfully connected <br>";
}

$delete = "DELETE FROM personalinfo WHERE Id='15'";

if($connection->multi_query($delete)){
    echo "data DELETED successfully";
}else{
    echo "Error Nothing happened";
}