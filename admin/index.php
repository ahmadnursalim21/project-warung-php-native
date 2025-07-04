<?php
require_once "../middleware/admin.php";
require_once "../database/database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex">
        <?php include "sidebar.php" ?>
        <!-- Main Content -->
        <div class="p-4 flex-grow-1">
            <h1>Selamat Datang</h1>
            <p>Ini adalah konten utama halaman dashboard.</p>
        </div>
    </div>
    <?php include "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>