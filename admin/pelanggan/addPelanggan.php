<?php
require_once "../../middleware/admin.php";
require_once "../../database/database.php";
if (isset($_POST["submit"])) {
    $nama = $_POST["nama_pelanggan"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $password = $_POST["password"];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $alamat = $_POST["alamat"];

    $sql = "INSERT INTO pelanggan (nama_pelanggan, email, no_hp, password, alamat ) VALUES ('$nama', '$email', '$no_hp', '$hash_password', '$alamat')";
    $result = mysqli_query($conn, query: $sql);
    if (!$result) {
        echo "data tidak berhasil dikirim";
    } else {
        echo "data berhasil dikirim";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php require "../../layouts/header.php" ?>

    <div class="container mt-4">
        <h2 class="mb-4">Tambah Pelanggan Baru</h2>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>