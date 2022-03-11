<?php

$table = 
"<table style= 'text-align:center;width:30%' border='1'>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    
</tr>
";
$emailR= $_POST["EmailR"];
$passwordR= $_POST["PasswordR"];

$connect = new mysqli("localhost" ,"root", "123456789","dbweb");

$selc = "SELECT * FROM persoinfo WHERE Email='$emailR' and Password='$passwordR' ";

$doing = $connect->query($selc);

if($doing -> num_rows > 0){
    echo "You are in your Account  <br> Your personal info in the table <br>"; 
    while($row = $doing -> fetch_assoc()){
        $table=$table."
        <tr style='color:red'>
            <td> ".$row["Id"]."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Email"]."</td>
            <td>".$row["Password"]."</td>
        </tr>";
    }
    echo $table;
    
}else{
echo"Your Email or Password Wrong Pleas try again";
}
?>