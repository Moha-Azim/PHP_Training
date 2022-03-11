<?php

session_start();


if($_SERVER['REQUEST_METHOD'] === 'POST'){

 
    
    
    $emailR= $_POST["EmailR"];
    $passwordR= $_POST["PasswordR"];
    
    $connect = new mysqli("localhost" ,"root", "123456789","dbweb");
    
    $selc = "SELECT * FROM persoinfo WHERE Email='$emailR' AND Password='$passwordR' ";
    
    $doing = $connect->query($selc);
    

    if($doing -> num_rows > 0){

        $_SESSION['email'] = $emailR;
        $_SESSION['password'] = $passwordR;
    
        echo "Welcom your Email is : ".$_SESSION['email']." and your password is : ".$_SESSION["password"] . "<br>";
        echo "check the control panel here <br>";
        echo " <a href='control.php'> Control Panle </a>";
        echo "<hr> <hr>  <a href='logout.php'>LogOut</a> ";
    }else{
    echo"Your Email or Password Wrong Pleas try again";
    }
}else {
    echo "you can't reach this page with out login  go to log in page <a href='singin.html'>LOGIN page</a> ";
}