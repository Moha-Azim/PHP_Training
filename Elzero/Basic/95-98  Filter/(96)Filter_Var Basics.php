<?php

echo "<h1> <a target='_block' href='https://www.php.net/manual/en/filter.filters.php'> Types of filters </a> </h1>";

?>



<?php


$name =  $_POST['username'];

if(filter_var($name,FILTER_SANITIZE_STRING) !== FALSE){

    echo "Good this is String<br>";
}else{
    echo "<p style='background-color:red'>this is not String</p>";
}



$email=  $_POST['email'];

if(filter_var($email,FILTER_VALIDATE_EMAIL) !== FALSE){

    echo "Good this is an Email<br>";
}else{
    echo "<p style='background-color:red'>this is not an Email</p>";
}




$url =  $_POST['url'];

if(filter_var($url,FILTER_VALIDATE_URL) !== FALSE){

    echo "Good this is a URL<br>";
}else{
    echo "<p style='background-color:red'>this is not a  URL </p>";
}


/*

    FILTER_VALIDATE_IP

    FILTER_VALIDATE_INT

    FILTER_VALIDATE_FLOAT


*/