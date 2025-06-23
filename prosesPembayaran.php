<?php
session_start();
require_once "middleware//auth.php";
require_once 'database/database.php'; // file koneksi ke database

// Ambil data dari form
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];
$metode = $_POST['metode'];
$total  = 175000; // Bisa ambil dari session/keranjang

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO pembayaran (nama, email, alamat, metode, total, tanggal) VALUES (?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("ssssd", $nama, $email, $alamat, $metode, $total);
$stmt->execute();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Terima Kasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container text-center my-5">
        <h2>🎉 Terima kasih, <?= htmlspecialchars($nama) ?>!</h2>
        <p>Pembayaran Anda sebesar <strong>Rp<?= number_format($total, 0, ',', '.') ?></strong> sedang kami proses.</p>
        <p>Metode pembayaran: <strong><?= strtoupper($metode) ?></strong></p>

        <?php if ($metode === 'transfer'): ?>
        <div class="mt-4">
            <h5>Silakan transfer ke rekening berikut:</h5>
            <p><strong>BANK ABC</strong><br>No. Rekening: 123-456-789<br>Nama: PT Warung Digital</p>
        </div>
        <?php elseif ($metode === 'ewallet'): ?>
        <div class="mt-4">
            <h5>Scan QR Code di bawah ini untuk membayar:</h5>
            <img src="qr-placeholder.png" alt="QR Code Pembayaran" style="max-width:200px;">
            <p class="text-muted mt-2">Contoh QR Code (bisa diganti Midtrans/Tripay)</p>
        </div>
        <?php endif; ?>

        <a href="index.php" class="btn btn-primary mt-4">Kembali ke Beranda</a>
    </div>
</body>

</html>