<?php
// Membaca data dari formulir
$username = $_POST['usernames'];
$email = $_POST['email'];
$password = $_POST['passwords'];

// Koneksi ke database
$host = 'localhost';
$database = 'register_playstation';
$user = 'root';
$conn = mysqli_connect($host, $user, '', $database);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Menyimpan data ke database
$sql = "INSERT INTO register (usernames, email, passwords) VALUES ('$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    // Data berhasil disimpan ke database
    header("Location: web utama.php"); // Mengarahkan pengguna kembali ke halaman utama.php
    exit(); // Menghentikan eksekusi script setelah mengarahkan pengguna
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
