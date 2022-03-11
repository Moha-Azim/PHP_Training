<?php
echo"the Name:".$_POST['userName']."<br>";
echo"the Phone:".$_POST['phone']."<br>";
echo"the Password:".$_POST['password']."<br><br><br><br>";

$var_name="mohammad";

if($var_name==$_POST['userName']){
    echo"welcom in Php mohammad";
}
else{
    echo"the user was not mohammad";
}
;
?>