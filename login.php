<?php
session_start();
require_once "middleware/isLogin.php";
require "database/database.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM pelanggan WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password']; // password terenkripsi di DB

        if (password_verify($password, $hashed_password)) {
            // Simpan session
            $_SESSION['user_id'] = $row['id_pelanggan'];
            $_SESSION['username'] = $row['nama_pelanggan'];
            $_SESSION['role'] = $row['role'];

            // Redirect ke halaman utama
            header("Location: index.php");
            exit;
        } else {
            // Password salah
            $_SESSION['error'] = "Password salah!";
            header("Location: login.php");
            exit;
        }
    } else {
        // Email tidak ditemukan
        $_SESSION['error'] = "Email tidak ditemukan!";
        header("Location: login.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class=" card p-3 rounded-3 shadow-lg" style="width: 300px;">
            <?php if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            } ?>
            <h2 class="text-center mb-3">Login Akun</h2>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" required name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required name="password">
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="text-center mt-3">
                    <p>Anda belum mempunyai akun ? <a href="register.php">Daftar sekarang</a></p>

                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>