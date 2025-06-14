<?php
require "../../database/database.php";


$sql = "SELECT * FROM produk";
$result = mysqli_query($conn, $sql)


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php require "../../layouts/header.php" ?>

    <div class="container mt-4">
        <h2 class="mb-4">Tambah Produk Baru</h2>
        <form action="addPelanggan.php" method="POST">
            <div class="mb-3">
                <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="namaPelanggan" placeholder="Masukan Nama anda"
                    name="nama_pelanggan" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukan email anda" name="email"
                    required>
            </div>
            <div class="mb-3">
                <label for="no-hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no-hp" placeholder="Masukan No HP" name="no_hp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukan Password anda"
                    name="password" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat anda" name="alamat">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php require "../../layouts/footer.php" ?>

</body>

</html>