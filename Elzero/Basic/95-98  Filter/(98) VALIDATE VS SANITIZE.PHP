<?php
/*

Validate => اما تقبل النتيجة او ترفض

Sanitize => تصفي النتيجة لتصبح مقبولة

 */


$input0 = $_POST['Email'];

$input1= filter_var($input0 , FILTER_SANITIZE_EMAIL);

echo $input1."<br>";

if(filter_var($input1,FILTER_VALIDATE_EMAIL) !== FALSE){

    echo 'this Email expected';
}else {
    echo 'try again email not expected';
}