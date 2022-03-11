<?php

$siteMode = "Dark";

if ($siteMode == "Dark"){
$modeColor="black";
$color = "white";
}elseif($modeColor == "white"){
$modeColor = "#EEE";
$color = "black";
}else{
    $modeColor = "red";
    $color = "black";
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?php echo $modeColor ?> ; color:<?php echo $color ?>">
    <h1>hi in this site</h1>
</body>

</html>