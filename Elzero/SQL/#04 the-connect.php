<?php

$dsn = 'mysql:host=localhost;dbname=products';
$user ='root';
$password= '123456789';
$options= array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');


try{

    $dbCon =  new PDO($dsn,$user,$password,$options);

    $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'you are connected';

    $q1="INSERT INTO items (name)VALUES('محمد')";

    //$dbCon -> exec($q1);
        
}catch(PDOException $e){
    echo 'Faild '. $e->getMessage();
}