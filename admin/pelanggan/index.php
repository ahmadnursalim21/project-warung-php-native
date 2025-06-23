<?php
require_once "../../middleware/admin.php";
require_once "../../database/database.php";


$sql = "SELECT * FROM pelanggan";
$result = mysqli_query($conn, $sql);



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
    <?php require "../sidebar.php" ?>

    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col">Id Pelanggan</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($result as $r): ?>
            <tr>
                <td scope="row"><?= $r['id_pelanggan'] ?></td>
                <td scope="row"><?= $r['nama_pelanggan'] ?></td>
                <td scope="row"><?= $r['email'] ?></td>
                <td scope="row"><?= $r['no_hp'] ?></td>
                <td scope="row"><?= $r['alamat'] ?></td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>

        </tbody>
    </table>


    <p>test ini admin Pelanggan</p>
    <?php require "../../layouts/footer.php" ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>