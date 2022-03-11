<?php

$servername="localhost";
$username="root";
$password="123456789";
$db_name="newlife";

$connection= new mysqli($servername,$username,$password,$db_name);

if($connection -> connect_error){
    die ("not connected with the server".$connection -> connect_error)."<br>";
}else{
    echo "connected successfully ........"."<br>";
}

$sql="INSERT INTO personalinfo (Name ,Phone ,email ) VALUES ('odeh','077777788','odeh@yahoo.com')";


if($connection -> multi_query($sql)==TRUE)
{
    echo "data inserted successfully";
}else{
    echo "Erorr :".$sql."<br>".$connection->error;
}



$connection->close;
?>