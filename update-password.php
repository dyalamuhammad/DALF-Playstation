<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Koneksi ke database
        $host = 'localhost';
        $username = 'root';
        $password_db = '';
        $database = 'register_playstation';

        $conn = mysqli_connect($host, $username, $password_db, $database);

        if (!$conn) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        // Perbarui password
        $sql = "UPDATE register SET passwords='$password' WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Password berhasil diperbarui, arahkan ke halaman sukses
            header("Location: web utama.php");
            exit;
        } else {
            echo "Gagal memperbarui password: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Email tidak ditemukan";
    }
} else {
    // Jika tidak ada akses langsung ke file ini, redirect ke halaman yang sesuai
    header("Location: forgot-password.php");
    exit;
}
?>
