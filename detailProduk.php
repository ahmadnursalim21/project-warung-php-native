<?php
require_once "middleware/auth.php";
require_once "database/database.php";
// Simulasi data produk (bisa ambil dari database berdasarkan $_GET['id'])
$produk = [
    'id' => 1,
    'nama' => 'Lanyard Tali Paragon - Lanyard Tactical',
    'harga' => 262500,
    'deskripsi' => 'Tali lanyard kuat dan stylish, cocok untuk ID card, kunci, atau kebutuhan taktis.',
    'lokasi' => 'Kota Depok',
    'rating' => 5.0,
    'terjual' => 11,
    'estimasi' => '25 - 28 Jun',
    'gambar' => 'https://via.placeholder.com/600x400'
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php require_once "layouts/header.php" ?>

    <div class="container my-5">
        <div class="row g-4">

            <!-- Gambar Produk -->
            <div class="col-md-6">
                <img src="<?= $produk['gambar'] ?>" alt="<?= htmlspecialchars($produk['nama']) ?>"
                    class="img-fluid rounded shadow">
            </div>

            <!-- Detail Produk -->
            <div class="col-md-6">
                <h3><?= htmlspecialchars($produk['nama']) ?></h3>
                <p class="text-danger fs-4 fw-bold">Rp<?= number_format($produk['harga'], 0, ',', '.') ?></p>

                <p>
                    <i class="bi bi-geo-alt-fill text-success"></i> <?= $produk['lokasi'] ?> &nbsp;
                    <i class="bi bi-star-fill text-warning"></i> <?= $produk['rating'] ?> | <?= $produk['terjual'] ?>
                    terjual
                </p>

                <p class="text-muted">Estimasi Tiba: <?= $produk['estimasi'] ?></p>

                <hr>

                <p><?= $produk['deskripsi'] ?></p>

                <div class="d-flex gap-2 mt-4">
                    <a href="pembayaran.php?id=<?= $produk['id'] ?>" class="btn btn-primary btn-lg">
                        <i class="bi bi-cart-plus-fill me-1"></i> Beli Sekarang
                    </a>
                    <a href="index.php" class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php require_once "layouts/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>