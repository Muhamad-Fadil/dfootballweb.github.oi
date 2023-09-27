<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Koneksi ke database
    $mysqli = new mysqli("localhost", "root", "", "database_football");

    if ($mysqli->connect_error) {
        die("Koneksi gagal: " . $mysqli->connect_error);
    }

    // Cek apakah username dan password cocok
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $mysqli->query($query);

    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
        header("Location: ../homePage/index.php"); // Ganti dengan halaman selamat datang
    } else {
        echo "<script>alert('Username dan Password Anda Salah');window.location='login.php';</script>";
    }

    $mysqli->close();
}
?>
