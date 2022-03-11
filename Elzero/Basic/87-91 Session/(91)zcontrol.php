<?php
session_start();
if(isset($_SESSION['name'])){

echo 'welcom '.$_SESSION['name'].' in control panel';

echo '<pre>';
print_r ($_SESSION);
echo '</pre>';

}else{
    echo "can't access this site go to login page first  222 <a href='(91)zlog.php'>LogIn</a>";
}