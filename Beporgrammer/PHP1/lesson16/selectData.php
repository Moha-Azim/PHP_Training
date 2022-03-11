<?php 



$connection= new mysqli ("localhost" , "root" , "123456789", "newlife");

if($connection->connect_error){
    die("connection with database failed".$connection->connect_error);
}else{
    echo "connected with database :)"."<br>";
}

$sql = "SELECT * FROM personalinfo"; 

$result =$connection->query($sql);

if($result->num_rows > 0 ){
    echo "some data selected"."<br>"."<br>" ;

    while($row = $result -> fetch_assoc()){
        echo $row["Id"] . " " . $row["Name"]. " " . $row["Phone"] ." " . $row["email"] ."<br>";
    }
}else{
    echo "no Data found";
}




$connection->close;
?>