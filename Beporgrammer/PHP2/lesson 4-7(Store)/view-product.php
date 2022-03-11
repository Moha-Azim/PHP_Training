<?php
$server ="localhost";
$name ="root";
$password = "123456789";
$dbase ="dbweb";

$connect = new mysqli("localhost" ,"root", "123456789","dbweb");


$idk= $_POST["idk"];
 $selc = "SELECT * FROM products  WHERE Id ='$idk'";
 $doing = $connect->query($selc);
 $row = $doing -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='css/view-product.css' />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js	' />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css	' />

    <title>View Product</title>
</head>

<body>
    <div class='container mt-5 mb-5'>
        <div class='card'>
            <div class='row g-0'>
                <div class='col-md-6 border-end'>
                    <div class='d-flex flex-column justify-content-center'>
                        <div class='main_image'>
                            <img src="<?php echo $row['image'] ?>" id='main_product_image' width='550' />
                        </div>
                        <div class='thumbnail_images'>
                            <ul id='thumbnail'>
                                <li>
                                    <img onclick='changeImage(this)'
                                        src='https://dummyimage.com/450x300/dee2e6/6c757d.jpg' width='70' />
                                </li>
                                <li>
                                    <img onclick='changeImage(this)' src="<?php echo $row['image'] ?>" width='70' />
                                </li>
                                <li>
                                    <img onclick='changeImage(this)'
                                        src='https://dummyimage.com/450x300/dee2e6/6c757d.jpg' width='70' />
                                </li>
                                <li>
                                    <img onclick='changeImage(this)'
                                        src='https://dummyimage.com/450x300/dee2e6/6c757d.jpg' width='70' />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='p-3 right-side'>
                        <div class='d-flex justify-content-between align-items-center'>
                            <h3> <?php echo $row['Name'] ?></h3>
                            <span class='heart'><i class='bx bx-heart'></i></span>
                        </div>
                        <div class='mt-2 pr-3 content'>
                            <p>
                                Description : <?php echo $row['Description'] ?>

                            </p>
                            <p>Product Id : <?php echo $row['Id'] ?></p>
                        </div>
                        <h3>$<?php echo $row['Price'] ?></h3>
                        <div class='ratings d-flex flex-row align-items-center'>
                            <div class='d-flex flex-row'>
                                <i class='bx bxs-star'></i> <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i> <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <span>441 reviews </span>

                        </div>
                        <div class='mt-5'>
                            <span class='fw-bold'>Color</span>
                            <div class='colors'>
                                <ul id='marker'>
                                    <li id='marker-1'></li>
                                    <li id='marker-2'></li>
                                    <li id='marker-3'></li>
                                    <li id='marker-4'></li>
                                    <li id='marker-5'></li>
                                </ul>
                            </div>
                        </div>
                        <div class='buttons d-flex flex-row mt-5 gap-3'>
                            <button class='btn btn-outline-dark'>Buy Now</button>
                            <button class='btn btn-dark'>Add to Basket</button>
                        </div>
                        <div class='search-option'>
                            <i class='bx bx-search-alt-2 first-search'></i>
                            <div class='inputs'><input type='text' name='' /></div>
                            <i class='bx bx-share-alt share'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function changeImage(element) {
        var main_prodcut_image = document.getElementById('main_product_image');
        main_prodcut_image.src = element.src;
    }
    </script>
</body>

</html>