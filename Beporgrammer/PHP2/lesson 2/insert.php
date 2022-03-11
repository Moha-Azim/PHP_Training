<?php
$Name= $_POST["Name"];
$Email= $_POST["Email"];
$Password= $_POST["Password"];

$connect = new mysqli("localhost" ,"root", "123456789","dbweb");

if($connect -> connect_error){
    echo "this is Erooor  not connected";
}else{
    echo "all good ";
}

$sqlInsert= "INSERT INTO persoinfo(Name ,Email ,Password ) VALUES ('$Name','$Email','$Password')" ;

if($connect ->multi_query($sqlInsert) == TRUE){
    echo "Data inserted ";
}else{
    echo "No Data ";
}