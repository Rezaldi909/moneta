<?php 
include 'navbar.php';
include 'functions.php';


$id = $_GET['id'];
$product = query("SELECT * FROM item WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['nama']; ?> - Moneta Florist</title>
    <link href="http://localhost/phpdasar/moneta/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4"><?php echo $product['nama']; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <img src="img/<?php echo $product['gambar']; ?>" class="img-fluid" alt="<?php echo $product['nama']; ?>" width="300" height="300">
            </div>
            <div class="col-md-6">
                <h3>Price: Rp<?php echo $product['harga']; ?></h3>
                <p>Description: <?php echo $product['deskripsi']; ?></p>
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
