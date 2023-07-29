<?php
// Membaca data dari formulir login
$usernames = $_POST['usernames'];
$password = $_POST['password'];
$remember = isset($_POST['remember']) ? true : false;

// Koneksi ke database
$host = 'localhost';
$database = 'register_playstation';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Melakukan query ke database untuk memeriksa kecocokan email dan password
$sql = "SELECT * FROM register WHERE usernames='$usernames' AND passwords='$password'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    // Email dan password valid

    // Mengambil data pengguna dari hasil query
    $row = mysqli_fetch_assoc($result);

    // Menampilkan pesan sambutan dengan menggunakan email
    echo "Hai, $usernames";

    // Menyimpan data login dalam session
    session_start();
    $_SESSION["usernames"] = $usernames;

    // Menyimpan pesan notifikasi dalam session
    $_SESSION["notification"] = "Selamat Anda berhasil login.";

    // Mengarahkan pengguna ke halaman setelah login
    header("Location: web utama afterLogin.php");
    exit();
} else {
    // Email atau password tidak valid
    echo "<script>alert('Username atau password salah. Silakan coba lagi.'); history.back();</script>";
    exit();
}



// Menutup koneksi ke database
mysqli_close($conn);
?>
