<?php
require "../database/database.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];

    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO pelanggan (nama_pelanggan, email, no_hp, password) VALUES ('$name','$email','$no_hp','$hash_password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: login.php");
    } else {
        header("Location: register.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page | Regsiter</title>

    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="d-grid">
        <div class="shadow-lg rounded-3" style="width: 300px;">
            <h2>Register Akun</h2>
            <form action="
        register.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" id="name" aria-describedby="username" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">NO HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div>

                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
                <div>
                    <p>Sudah mempunyai akun ?</p>
                    <a href="login.php">login akun</a>
                </div>
            </form>
        </div>
    </div>


    <script src="../public/bootstrap/js/bootstrap.js"></script>
</body>

</html>