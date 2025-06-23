<?php
require_once "middleware/auth.php";
// Contoh total (biasanya dari session atau keranjang)
$totalBayar = 175000;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page | Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <?php require "layouts/header.php" ?>

    <!-- Halaman Pembayaran -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="mb-4 text-center">🧾 Pembayaran</h4>

                        <!-- Rangkuman Total -->
                        <div class="mb-3">
                            <h5>Total yang harus dibayar:</h5>
                            <div class="alert alert-success fs-4">
                                Rp<?= number_format($totalBayar, 0, ',', '.') ?>
                            </div>
                        </div>

                        <!-- Form Pembayaran -->
                        <form action="prosesPembayaran.php" method="POST">
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email (Opsional)</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Pengiriman</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>

                            <!-- Metode Pembayaran -->
                            <div class="mb-4">
                                <label for="metode" class="form-label">Metode Pembayaran</label>
                                <select class="form-select" id="metode" name="metode" required>
                                    <option value="">Pilih Metode...</option>
                                    <option value="transfer">Transfer Bank</option>
                                    <option value="cod">Bayar di Tempat (COD)</option>
                                    <option value="ewallet">E-Wallet (OVO, Dana, Gopay)</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">💳 Bayar Sekarang</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require "layouts/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>