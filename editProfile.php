<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php require "layouts/header.php" ?>

    <!-- Edit Profile Form -->
    <div class="container my-5">
        <div class="card mx-auto shadow-sm" style="max-width: 600px;">
            <div class="card-body">
                <h4 class="mb-4 text-center">Edit Profil</h4>

                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                            value="<?= htmlspecialchars($user['fullname']) ?>" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?= htmlspecialchars($user['email']) ?>" required>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address"
                            rows="3"><?= htmlspecialchars($user['address']) ?></textarea>
                    </div>

                    <!-- Foto Profil -->
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Foto Profil</label><br>
                        <img src="<?= $user['avatar'] ?>" alt="Avatar" class="rounded-circle mb-2" width="80">
                        <input class="form-control" type="file" id="avatar" name="avatar">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require "layouts/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>