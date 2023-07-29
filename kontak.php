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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>DALF Playstation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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
        .carding {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .carding h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .carding label {
            display: block;
            margin-bottom: 10px;
        }

        .carding input[type="text"],
        .carding input[type="email"],
        .carding select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        .carding input[type="submit"] {
            background-color: #006fcd;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .carding input[type="submit"]:hover {
            background-color: black;
        }
        textarea {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 12px 20px;
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

    <!---login wrapper-->
    <div class="login-wrapper">
        <span class="icon-close">
            <i class='bx bx-x' ></i>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="POST" onsubmit="showAlertsLogin(event)">
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-envelope' ></i></span>
                    <input type="usernames" name="usernames" id="usernames" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember" id="remember">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="register.php" method="POST" onsubmit="showAlerts(event)">
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-user'></i></span>
                    <input type="text" name="usernames" id="usernames" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="email" id="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="passwords" id="passwords" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <input type="submit" class="btn-login" value="Register">
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br>
    <!---isi formulir-->
    <section class="carding" id="carding">
        <h2>Hubungi Kami</h2>
        <form action="kontak done.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required><br>

            <label for="paket">Pesan:</label>
            <textarea name="" id="" cols="30" rows="10" required></textarea>
            </select><br>

            <input type="submit" value="Submit">
        </form>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br>

    <!---contact--->
    <section class="contact" id="contact">
        <div class="main-contact">
            <h3>DALF Playstation</h3>
            <h5>Bergabung Bersama Kami</h5>
            <div class="icons">
                <a href="https://www.instagram.com/dalfplaystation/"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.facebook.com/profile.php?id=100093389473048"><i class='bx bxl-facebook-square' ></i></a>
                <a href="https://twitter.com/DalfPlaystation"><i class='bx bxl-twitter' ></i></a>
            </div>
        </div>

        <div class="main-contact">
            <h3>Explore</h3>
            <li><a href="https://blog.playstation.com/">Berita</a></li>
            <li><a href="kupon.php">Voucher</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </div>

        <div class="main-contact">
            <h3>Pelayanan</h3>
            <li><a href="form.php">Sewa Console</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
        </div>
    </section>

    <div class="copyright">
        <p>Copyright © 2023 All rights reserved | DALF Playstation</p>
    </div>
</body>
<script>
    const header = document.querySelector("header");

    window.addEventListener("scroll", function() {
        header.classList.toggle ("sticky", window.scrollY > 0);
    });
</script>
</html>