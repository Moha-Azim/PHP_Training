<?php 

$table = 
"<table style= 'text-align:center;width:30%' border='1'>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
</tr>
";

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
        
        $table=$table."
    <tr style='color:red'>
        <td> ".$row["Id"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["Phone"]."</td>
        <td>".$row["email"]."</td>
    </tr>";
        
    echo "<br>";
        //echo $row["Id"] . " " . $row["Name"]. " " . $row["Phone"] ." " . $row["email"] ."<br>";
    }
}else{
    echo "no Data found";
}
$table = $table."</table>";

echo $table;


$connection->close;
?>