<?php
$user = [
    'username' => $_SESSION['username'] ?? 'guest',
    'email' => 'user@example.com',
    'fullname' => 'Nama Lengkap',
    'address' => 'Jl. Contoh No. 123, Indonesia',
    'avatar' => '../images/avatar.jpg'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile | Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <?php require "layouts/header.php" ?>

    <!-- Profile Section -->
    <div class="container my-5">
        <div class="card mx-auto shadow" style="max-width: 600px;">
            <div class="card-body text-center">
                <img src="<?= $user['avatar'] ?>" class="rounded-circle mb-3" width="120" height="120" alt="Avatar">
                <h4 class="card-title"><?= htmlspecialchars($user['fullname']) ?></h4>
                <p class="text-muted">@<?= htmlspecialchars($user['username']) ?></p>

                <hr>

                <div class="text-start">
                    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
                    <p><strong>Alamat:</strong> <?= htmlspecialchars($user['address']) ?></p>
                </div>

                <a href="editProfile.php" class="btn btn-primary mt-3">Edit Profil</a>
            </div>
        </div>
    </div>

    <?php require "layouts/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>