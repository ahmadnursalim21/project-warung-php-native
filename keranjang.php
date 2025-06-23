<?php
require_once "middleware/auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang | Page</title>
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
</head>

<body>
    <?php require "layouts/header.php" ?>

    <div class="container my-5">
        <h2 class="mb-4">🛒 Keranjang Belanja</h2>

        <!-- Tabel Keranjang -->
        <div class="table-responsive">
            <table class="table align-middle table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/60" class="me-3" alt="Produk 1" />
                                <span>Nama Produk 1</span>
                            </div>
                        </td>
                        <td>Rp50.000</td>
                        <td>
                            <input type="number" class="form-control" value="2" min="1" style="width: 80px;" />
                        </td>
                        <td>Rp100.000</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/60" class="me-3" alt="Produk 2" />
                                <span>Nama Produk 2</span>
                            </div>
                        </td>
                        <td>Rp75.000</td>
                        <td>
                            <input type="number" class="form-control" value="1" min="1" style="width: 80px;" />
                        </td>
                        <td>Rp75.000</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Total & Tombol Checkout -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h4>Total: <span class="text-success">Rp175.000</span></h4>
            <a href="pembayaran.php" class="btn btn-primary btn-lg">Bayar</a>
        </div>
    </div>

    <?php require "layouts/footer.php" ?>

    <script src="public/bootstrap/js/bootstrap.js"></script>
</body>

</html>