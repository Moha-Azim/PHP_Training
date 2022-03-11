<?php


function  loop($big){
    $sam = null;
for($i=0;$i < $big ; $i++){
    $sam.= $i."<br>";
}
return $sam;
}

echo loop(5);



function  heybro($name,  $age="18",  $edu="heigh school"){   // Defoult value in function

    return "Welcome ".$name." Your age is ".$age . " your education is ".$edu;
}

echo heybro("Khaleed",  "20");


echo "<hr> <hr>";

function getTicket($name, $age){
    $tcnum = rand(1000,10000);   //  you can use function inside another function
    if($age < 18){
       $msg = "sorry you can't tack a ticket because your age is ".$age;
    }else{
        $msg= "hello ".$name."<br>";
        $msg.= "your age is ".$age."<br>";
        $msg.="Your ticket number is <span> [".$tcnum."] </span> have fun :)";
    }
    return $msg;
}

$ticId= getTicket("mohammad",22);




function niceFrame($text){
    
    $frame = "<div class='nice1'>".$text."</div>";
    
    return $frame;
}
$ticket = niceFrame($ticId);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .nice1 {
        background-color: #EEE;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin: 50px auto;
        width: 400px;
        font-family: Tahoma, Arial;
        text-align: center;
    }

    .nice1 span {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php  echo $ticket  ?>
</body>

</html>