<?php

$var1=
        "
        <head>
        <style>
        body{
            background-color:#2228B4; 
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        header{
            background-color: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center; 
            padding:10px;
        }
        ul{
            display: flex; list-style-type: none; width: 500px; justify-content: space-between; font-weight:300;
        }
        li{
            background-color: #E26F1F; padding: 10px; border-radius: 10px;
        }
        div{
            margin-top: 200px; display: flex; flex-wrap: wrap; color: #E26F1F; font-size: 20px;
        }
        .orange{
            width: 40%;border-radius: 20px; display: inline; margin-right: 30px;
        }
        </style>
        </head>
        <body>
            <header>
            <img src='LOGO.png' style='width: 60px;'>

                <ul>
                    <li>HOME</li>
                    <li>Services</li>
                    <li>Video</li>
                    <li>Contact Us</li>
                </ul>
            </header>
            <div>
                <img class='orange' src='orange.jpg'>
                <p>  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero voluptates eos nulla vel <br> sed rerum sint, exercitationem, iure omnis veritatis, 
                    doloribus quaerat consequatur?<br> Pariatur facilis tempora dolores  officia consequuntur velit!</p>
            </div>
        ";

echo $var1;
?>