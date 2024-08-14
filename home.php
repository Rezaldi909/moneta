<?php 
include 'navbar.php';
include 'functions.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moneta Florist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Our Flowers</h1>
        <div class="row">
            <?php
            $products = query("SELECT * FROM item");
            foreach ($products as $product) {
                echo '
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img src="img/'.$product['gambar'].'" class="card-img-top" alt="'.$product['nama'].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$product['nama'].'</h5>
                            <p class="card-text">$'.$product['harga'].'</p>
                            <a href="detail.php?id='.$product['id'].'" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</body>
</html>
