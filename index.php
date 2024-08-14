<?php 
session_start();

if ( !isset($_SESSION["login"] ) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$item = query("SELECT * FROM item");

//tombol cari ditekan
if (isset($_POST["cari"])) {
    $item = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian...."
        autocomplete="off">
        <button type="submit" name="cari">Cari!</button>

    </form>

    <table border="1" cellpadding="10" cellspacing="0" >

        <tr>
            <th>No .</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            
        </tr>

        <?php $i = 1; ?> 
        <?php foreach( $item as $row ) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Data Akan Dihapus?');">hapus</a>
            </td>
            <td><img src="img/<?php echo $row ["gambar"]; ?>" width="50" height="50"></td>
            <td><?= $row ["nama"]; ?></td>
            <td>Rp. <?= $row ["harga"]; ?></td>
            
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>
    
</body>
</html>