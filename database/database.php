<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "warung";


$conn = mysqli_connect($host, $username, $password, $database);
if ($conn) {
    echo "koneksi ke database berhasil";
} else {
    echo "koneksi ke database tidak berhasil";
}
