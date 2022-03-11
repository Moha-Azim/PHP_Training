<?php 
$lessonTitle = "Connnection";
$welcome="welcom to ";
$thisis="this is lesson talk about".$lessonTitle."and how to use it.";
$languages="<ul>";
$languages .= "<li>PHP</li>";
$languages .= "<li>Java</li>";
$languages .= "<li>Css</li>";
$languages .= "<li>Python</li>";
$languages .="</ul>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1> $welcome  $lessonTitle </h1>";
    echo $thisis;
    ?>
    <h2>the languages i love</h2>

    <?php echo $languages;  ?>
</body>
</html>