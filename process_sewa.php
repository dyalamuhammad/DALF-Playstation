<?php
// Ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$paket = $_POST['paket'];

// Buat koneksi ke database
$servername = "localhost";
$username = "root";
$password = ""; // Biarkan kosong jika tidak ada password yang diatur
$database = "sewa_playstation";

$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi ke database
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat query SQL untuk menyimpan data ke database
$sql = "INSERT INTO sewa (nama, email, alamat, paket) VALUES ('$nama', '$email', '$alamat', '$paket')";

// Jalankan query SQL
if ($conn->query($sql) === TRUE) {
    // Data berhasil disimpan ke database
    header("Location: web utama afterLogin.php"); // Mengarahkan pengguna kembali ke halaman utama.php
    exit(); // Menghentikan eksekusi script setelah mengarahkan pengguna
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
?>
