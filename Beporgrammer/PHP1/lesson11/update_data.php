<?php

$servername="localhost";
$username="root";
$password="123456789";
$db_name="looplesson11";

$connection= new mysqli($servername,$username,$password,$db_name);

if($connection -> connect_error){
    die ("not connected with the server".$connection -> connect_error);
}else{
    echo "connected successfully ........";
}

$sql="INSERT INTO goods (Name ,Expired ,Cost ) VALUES ('Chocolate','2021-10-11','15.00')";

for($x = 0; $x <= 10 ; $x++ ){
    $connection -> multi_query($sql);
}

 $sqlupdate="UPDATE goods SET Name='updateee' WHERE Id='1'";






 if($connection -> multi_query($sqlupdate)==TRUE)
{
     echo "data Updated successfully";
}else{
    echo "Erorr :".$sqlupdate."<br>".$connection->error;
 }



$connection->close;
?>

