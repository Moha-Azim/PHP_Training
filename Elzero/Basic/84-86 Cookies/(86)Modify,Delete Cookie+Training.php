<?php


$maincolor = '#CAC4C4';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $maincolor =  $_POST['background'];

     setcookie('colors',$maincolor , time() + 3600 , '/' );

} 
if(isset( $_COOKIE['colors'])){
    $body =  $_COOKIE['colors'];
}else{
    $body = $maincolor;
}


echo "<pre>";

print_r($_COOKIE);

echo "</pre>"


?>
<!DOCTYPE html>
<html lang="en">

<head> </head>

<body style='background-color:<?= $body; ?>'>
    <form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="color" name="background" />
        <input type="submit" value="choose" />
    </form>


</body>

</html>