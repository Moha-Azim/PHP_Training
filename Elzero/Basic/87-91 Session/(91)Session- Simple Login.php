<?php
session_start();
$admin = array('mohammad' , 'ahmad', 'ali' , 'sami');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $user = $_POST['username'];

    if( in_array($user,$admin)){
        $_SESSION['name'] = $user;
        echo "welcom admin ".$_SESSION['name']." check the control panel here <br>";
        echo " <a href='(91)zcontrol.php'> go to z1 </a>";
     }else{
        echo "you are'nt an admin sorry";
    } 
}else{
    echo "can't access this site go to login page first";
}
?>