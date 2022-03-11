<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['password'])){

echo "welcome in  <h1>control Panel </h1>";

echo "<hr> <hr>  <a href='logout.php'>LogOut</a> ";
}else{

    echo "you can't reach the <h1>control Panel </h1> with out login  go to log in page <a href='singin.html'>LOGIN page</a> ";
}