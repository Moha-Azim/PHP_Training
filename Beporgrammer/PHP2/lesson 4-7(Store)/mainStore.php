<?php

$server ="localhost";
$name ="root";
$password = "123456789";
$dbase ="dbweb";

$connection = new mysqli($server , $name , $password , $dbase);

if ($connection -> connect_error){
    die ("Error not connected now");
}
$sql1 ="SELECT * FROM porductscategory";

$ddd= $connection -> query($sql1);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <div class="container">
        <h2>Add porduct to store</h2>



        <form action='mainStore.php' method='POST' enctype="multipart/form-data">
            <div class="form-group">
                <label for="usr">Product Name:</label>
                <input type="text" class="form-control" id="usr" name="Name" required>
            </div>
            <div class="form-group">
                <label for="price">Porduct price:</label>
                <input type="text" class="form-control" id="Price" name="Price">
            </div>
            <div class="form-group">
                <label for="desc">Porduct Description:</label>
                <textarea type="text" class="form-control" id="desc" rows="4" name="Description"> </textarea>
            </div>
            <div class="form-group">
                <label for="uploade">Upload Pictures:</label>
                <input type="file" class="form-control" id="uploade" name="fileToUpload"> </input>
            </div>
            <div class="form-group">
                <label for="category">Select Category:</label>
                <select id="category" name='ttype'>
                    <?php
                        while($selected = $ddd -> fetch_assoc()){
                        echo "<option  value='".$selected["Id"]."'>" . $selected["categoryName"]."</option>";
                        } 
                        ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Add Product" name="submit">
            </div>

            <?php
//////////////
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5100000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $NameFi= "uploads/".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


////////////
if(isset($_POST['submit'])) {
    $addName=$_POST['Name'];
    $addPrice=$_POST['Price'];
    $addDesc=$_POST['Description'];
    $addType=$_POST['ttype'];


    $query = "INSERT INTO products(Name,Price,Description,Image,categoryID) VALUES ('$addName','$addPrice','$addDesc','$NameFi','$addType')";
    $result = mysqli_query($connection,$query) ;
    echo "<div class='done'>Product inserted Successfully </div>";
}else{
        die("<div class='error'> Error No porduct inserted </div>");
    }


// $addName=$_POST['Name'];
// $addPrice=$_POST['Price'];
// $addDesc=$_POST['Description'];
// $addType=$_POST['ttype'];

// $inserting = "INSERT INTO products(Name,Price,Description,categoryID) VALUES('$addName','$addPrice','$addDesc','$addType')";

// if($connection-> multi_query($inserting ) == TRUE && $addPrice != NULL){
//     echo "<div class='done'>Product inserted Successfully </div>";
    
// }else{
//     die("<div class='error'> Error No porduct inserted </div>");
// }



?>
        </form>
    </div>

</body>

</html>