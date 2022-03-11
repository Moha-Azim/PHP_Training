<?php


/*

filter_var(Variable , Filtre Type , options&flags);

*/


$num = $_POST['num'];

$option = array(
    'options'=>array(
        'min_range' => 1999,
        'max_range' => 2021)
    );

if(filter_var($num,FILTER_VALIDATE_FLOAT,$option) !== FALSE){

    echo "good one in the range 1999 - 2021 <br>";
}else{
    echo "bad one out the range 1999 - 2021 <br>";
}


echo "<hr><hr>";

$url = $_POST['IP'];

if(filter_var($url,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4) !== FALSE){
    echo "the ip is IPV4";
}else {
    echo 'the ip is not IPV4';
}