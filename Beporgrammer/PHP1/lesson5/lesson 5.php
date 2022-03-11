<?php
$var5="UserName";
$var6="00962";
$var1="<input id='user' name='user name' type='text' value= '$var5'></input>";
$var2="<input id='phone' name='phone' type='number' value='".$var6."'></input>";
$var3="<input id='password' type='passowrd'></input>";





?>
<html>
    <head>
        <title>
            Login page
        </title>
        <style>
            input{
                float:right;
            }
        </style>
    </head>
    <body>


    <div style=" height:100px; width: 300px; position:absolute; top:50%; left:50% ; transform: translate(-50% , -50%); ">
    <lable for="user"> User Name:</lable>     <?  echo $var1 ; ?> <br><br>
    <lable for="phone">Phone:</lable>    <? echo $var2 ; ?><br><br>
    <lable for='password'>PassWord:</lable>  <?echo $var3 ; ?> 
    </div>

    </body>

</html>























