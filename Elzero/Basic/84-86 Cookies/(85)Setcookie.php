<?php

/*

setcookie(name , value , Expire , Path , domain , secure, httponly );



just the name is required

name => cookie name 

value => Content of the cookie

Expire => Expiration Date 

path => where cookie set 

domain =>  if you want the cookie in main domanin  and the sub-domain of just in sub-domain

secure => to use only https  => true if any of https or http use false  (any connection)

httponly => accessible to script  if  true of false

*/


setcookie('Haaay' , 'third' , time() + (3600 * 24 * 30) , '/' , 'localhost' , TRUE  );

echo '<pre>';

print_r($_COOKIE);

echo '</pre>';