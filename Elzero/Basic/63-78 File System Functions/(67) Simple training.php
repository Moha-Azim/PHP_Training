<?php

/*
[1]Check if the Directory Is Exist or No 
[2]Make The Directroy
[3]Assing Tis directory To Variable 
[4] Crete A File inside this directrory
[5]Assing this file to variable
[6]change mode of this file to be read only
[7]Check if this File is Writable
[8]change Mode of this file And Make It Writable
[9]Include This File
*/

if(is_dir('(67)PHP')){
    echo 'sorry this dir is already exists';
}else{
    mkdir( __DIR__ . '/(67)PHP');
}
$directory = __DIR__ . '/(67)PHP/';

file_put_contents($directory.'text.php' , 'hellow man');

$file = $directory.'text.php';

chmod($file , 0444);

if (is_writeable($file)){
    echo 'this is writeable file';
}else{
    chmod($file,0755);
    file_put_contents($file , '<?php echo " Congratulations  we finsh it";');
}

require($file);