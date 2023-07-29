<?php
// Mulai sesi
session_start();
        
// Periksa apakah email pengguna sudah disimpan dalam sesi
if (isset($_SESSION["usernames"])) {
    // Email pengguna ada dalam sesi
    $usernames = $_SESSION["usernames"];
        
    // Menampilkan pesan sambutan
    echo " ";
} else {
    // Email pengguna tidak ada dalam sesi, pengguna belum login
    echo "Anda belum login. Silakan login terlebih dahulu.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .product {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .product img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .product h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .product p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .product .harga-headset {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product .btn {
            display: inline-block;
            background-color: var(--main-color);
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
        }
        /* Gaya untuk dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            /* Gaya untuk tombol dropdown */
            background-color: #ffffff;
            color: #333;
            padding: 10px;
            font-size: 18px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            /* Gaya untuk konten dropdown */
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            /* Gaya untuk link dropdown */
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            /* Gaya untuk link dropdown saat dihover */
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <!---header-->
    <header>
        <a href="web utama afterLogin.php" class="logo"></a>

        <ul class="navlist">
            <li><a href="web utama afterLogin.php">Home</a></li>
            <li><a href="https://blog.playstation.com/">Berita</a></li>
            <li><a href="kupon.php">Voucher</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
        <li class="dropdown">
            <?php
            echo '<div class="dropdown">';
            echo '<button class="dropbtn">Hai, ' . $usernames . ' ▼</button>';
            echo '<div class="dropdown-content">';
            echo '<a href="web utama.php">Logout</a>';
            echo '</div>';
            echo '</div>';
            ?>
        </li>
    </header>
    <br><br><br><br><br><br><br>

    <div class="container">
        <h1>Headset</h1>
        <br><br>
        <div class="product-list">
            <div class="product">
                <img src="gambar/cloudheadset.png" alt="Product 1">
                <p>PULSE 3D Wireless Headset</p>
                <span class="harga-headset">Rp459.000</span><br><br>
                <a href="pulse 3d product.php" class="btn">Beli</a>
            </div>
            <div class="product">
                <img src="gambar/goldwirelessheadset.jpg" alt="Product 2">
                <p>PlayStation® GOLD Wireless Headset</p>
                <span class="harga-headset">Rp399.000</span><br><br>
                <a href="gold wireless product.php" class="btn">Beli</a>
            </div>
            <div class="product">
                <img src="gambar/hyperxps4.png" alt="Product 3">
                <p>PlayStation® HyperX Cloud Gaming Headset</p>
                <span class="harga-headset">Rp599.000</span><br><br>
                <a href="hyperx product.php" class="btn">Beli</a>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>

    <!---contact--->
    <section class="contact" id="contact">
        <div class="main-contact">
            <h3>DALF Playstation</h3>
            <h5>Bergabung Bersama Kami</h5>
            <div class="icons">
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-facebook-square' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
            </div>
        </div>

        <div class="main-contact">
            <h3>Explore</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#fitur">Fitur</a></li>
            <li><a href="#New">New</a></li>
            <li><a href="#Kontak">Kontak</a></li>
        </div>

        <div class="main-contact">
            <h3>Pelayanan</h3>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Free Shipping</a></li>
            <li><a href="#">Gift Cards</a></li>
        </div>

        <div class="main-contact">
            <h3>Belanja</h3>
            <li><a href="#">Console</a></li>
            <li><a href="#">Aksesoris</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Sale</a></li>
        </div>
    </section>
    <div class="copyright">
        <p>Copyright © 2023 All rights reserved | Website ini dibuat untuk project Praktikum Pemrograman Web by DALF Playstation</p>
    </div>
</body>
<script>
    const header = document.querySelector("header");

    window.addEventListener("scroll", function() {
        header.classList.toggle ("sticky", window.scrollY > 0);
    });
</script>
</html>

