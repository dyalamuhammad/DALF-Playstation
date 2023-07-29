<!-- reset-password.php -->
<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_playstation";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa apakah ada koneksi yang sukses
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil email dari form
$email = $_POST['email'];

// Periksa apakah email terdaftar di database
$sql = "SELECT * FROM register WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Email terdaftar, generate token reset password (contoh sederhana, Anda bisa menggunakan metode lain)
    $token = uniqid();

    // Simpan token di database untuk email yang sesuai
    $updateSql = "UPDATE users SET reset_token='$token' WHERE email='$email'";
    mysqli_query($conn, $updateSql);

    // Redirect ke halaman reset password dengan menyertakan token
    header("Location: reset-password-form.php?token=$token");
    exit();
} else {
    // Email tidak terdaftar
    echo "<script>alert('Email tidak terdaftar.'); window.location.href = 'forgot-password.php';</script>";
}

