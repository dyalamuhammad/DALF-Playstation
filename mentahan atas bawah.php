<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>DALF Playstation</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
        }
        :root {
            --bg-color: #ffffff;
            --text-color: #111111;
            --main-color: #006fcd;
            --big-font: 4.5rem;
            --h2-font: 3rem;
            --h3-font: 2rem;
            --normal-font: 1rem;
        }
        body {
            background: var(--bg-color);
            color: var(--text-color);
        }
        header {
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            padding: 20px 14%;
            transition: all .35s ease;
        }
        .logo {
            background-image: url(gambar/DalfPlaystation.png);
            background-repeat: no-repeat;
            background-size: contain;
            width: 300px;
            height: 70px;
        }
        .navlist {
            display: flex;
        }
        .navlist a{
            color: var(--text-color);
            font-weight: 600;
            padding: 10px 25px;
            font-size: var(--normal-font);
            transition: all .36s ease;
            padding: 30px;
        }
        .navlist a:hover {
            color: var(--main-color);
        }
        section {
            padding: 100px 14%;
        }
        .home {
            min-height: 100vh;
            width: 100%;
            background: url(gambar/playstation5.png);
            background-size: cover;
            background-position: center top;
            position: relative;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            align-items: center;
        }
        .home-text h1 {
            font-size: var(--big-font);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: .6rem;
            margin-bottom: 1.4rem;
        }
        .home-text span {
            font-size: var(--h2-font);
        }
        .home-text p {
            font-size: var(--normal-font);
            font-weight: 500;
            margin-bottom: 3rem;
            letter-spacing: .2rem;
        }
        .btn {
            display: inline-block;
            padding: 13px 25px;
            background: var(--main-color);
            color: var(--bg-color);
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 600;
            border-radius: 5px;
            transition: all .35s ease;
        }
        .btn:hover {
            transform: translateY(-5px);
            background: var(--text-color)
        }
        header.sticky {
            background: var(--bg-color);
            padding: 14px 14%;
            box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);
        }
        .center-text {
            text-align: center;
        }
        .center-text h2 {
            font-size: var(--h3-font);
        }
        .featured-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, auto));
            gap: 1.3rem;
            align-items: center;
            margin-top: 4rem;
        }
        .row {
            position: relative;
            transition: all .35s ease;
        }
        .row img {
            width: 100%;
            height: auto;
        }
        .fea-text {
            top: 40px;
            left: 50px;
        }
        .fea-text h5 {
            font-size: 19px;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }
        .fea-text p {
            color: #555;
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 400;
        }
        .row .arrow {
            bottom: 40px;
            left: 50px;
        }

        .row .arrow i {
            height: 35px;
            width: 35px;
            background: var(--bg-color);
            border-radius: 50%;
            font-size: 20px;
            color: var(--text-color);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all .35 ease;
        }
        .row:hover {
            transform: scale(0.9) translateY(-5px);
            cursor: pointer;
        }
        .row:hover i {
            background: var(--main-color);
            color: var(--bg-color);
        }
        .cta {
            height: 60vh;
            width: 100%;
            background: url(gambar/ctaplaystation.png);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }
        .cta-text h6 {
            font-size: 17px;
            font-weight: 500;
            letter-spacing: .6px;
            margin-bottom: 14px;
            color: white;
        }
        .cta-text h4 {
            font-size: 3.3rem;
            line-height: 1.2;
            letter-spacing: .6rem;
            margin-bottom: 30px;
            color: white;
        }
        .new-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            gap: 1.3rem;
            align-items: center;
            margin-top: 4rem;
            text-align: center;
        }
        .box {
            position: relative;
            transition: all .40s ease;
        }
        .box img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .box h5 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .box h6 {
            font-size: 16px;
            font-weight: 700;
        }
        .sale {
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 30px;
            background-color: var(--main-color);
            color: var(--bg-color);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .box:hover {
            transform: scale(0.9) translateY(-5px);
            cursor: pointer;
        }
        .contact {
            background-color: var(--text-color);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, auto));
            gap: 2rem;
        }
        .main-contact h3 {
            font-size: 23px;
            margin-bottom: 1.6rem;
            color: var(--bg-color);
        }
        .main-contact h5 {
            font-size: 15px;
            font-weight: 600;
            color: #555;
        }
        .icons {
            display: flex;
            margin-top: 2rem;
        }
        .icons i{
            font-size: 25px;
            margin-right: 1rem;
            color: #555;
            transition: all .35s ease;
        }
        .icons i:hover {
            color: var(--bg-color);
            transform: scale(1.1) translateY(-5px);
        }
        .main-contact li {
            margin-bottom: 15px;
        }
        .main-contact li a {
            display: block;
            color: #555;
            font-size: var(--normal-font);
            font-weight: 600;
            transition: all .35s ease;
        }
        .main-contact li a:hover {
            transform: translateX(-8px);
            color: var(--bg-color);
        }
        .copyright {
            text-align: center;
            padding: 20px;
            background: var(--text-color);
        }
        .copyright p{
            color: #555;
            font-size: 14px;
            letter-spacing: 1px;
        }
        .top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
        }
        .top i {
            font-size: 22px;
            color: var(--bg-color);
            padding: 14px;
            background: var(--main-color);
            border-radius: 2rem;
        }
        .wrapper {
            width: 900px;
            margin: 5% auto;
        }
        .single-price {
            width: 33%;
            background-color: black;
            float: left;
            margin-top: 1%;
            box-shadow: 1px 1px 20px rgba(0,0,0,0.5);
            text-align: center;
            transition: 0.9s;
            margin-bottom: 15%;
            margin-right: 3px;
            border-radius: 25px;
        }
        .price {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid var(--main-color);
            margin: 5% auto 0 auto;
            text-align: center;
        }
        .deals {
            margin-top: 10%;
        }
        .single-price h1 {
            font-size: 18px;
            color: #fff;
            line-height: 3;
            text-transform: uppercase;
        }
        .price h2 {
            font-size: 38px;
            color: #fff;
            margin-top: 30%;
        }
        .deals h4 {
            font-size: 14px;
            font-weight: normal;
            text-align: center;
            color: #fff;
            line-height: 3;
        }
        .single-price:hover {
            background: var(--main-color);
            color: #fff;
            box-shadow: 0 0 15px rgba(0,0,0,1);
            transform: scale(1.1);
            z-index: 1;
            border-radius: 25px;
        }
        .single-price:hover .price {
            border-color: #fff;
        }
        .single-price a {
            text-decoration: none;
            background: var(--main-color);
            color: #fff;
            padding: 10px 60px;
            display: inline-block;
            margin: 10% auto;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 25px;
        }
        .single-price:hover a {
            background: #262626;
            color: #fff;
        }
        .card {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card .box{
            position: relative;
            width: 320px;
            padding: 40px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
            border-radius: 4px;
            margin: 20px;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center;
        }
        .card .box .icon {
            position: relative;
            width: 70px;
            height: 70px;
            color: #fff;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            border-radius: 50%;
            font-size: 40px;
            font-weight: 700;
            transition: 1s;
        }
        .btnLogin-popup {
            width: 130px;
            height: 50px;
            background: transparent;
            border: 2px solid #000;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            color: #000;
            font-weight: 500;
            margin-left: 40px;
            transition: .5s;
        }
        .btnLogin-popup:hover {
            background: var(--main-color);
            color: #fff;
        }
        .user {
            display: flex;
            align-items: center;
        }
        .user i {
            color: var(--main-color);
            font-size: 28px;
            margin-right: 7px;
        }
        #menu-icons {
            font-size: 35px;
            color: var(--text-color);
            cursor: pointer;
            z-index: 10001;
            display: none;
        }
        .login-wrapper {
            position: fixed;
            top: 25%;
            right: 35%;
            width: 400px;
            height: 440px;
            background: white;
            border: 2px solid rgba(255,255,255,.5);
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0,0,0,.5);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transform: scale(0);
            transition: transform .5s ease, height .2s ease;
            z-index: 999;
        }
        .login-wrapper.active-popup {
            transform: scale(1);
        }
        .login-wrapper .form-box {
            width: 100%;
            padding: 40px;
        }
        .form-box h2 {
            font-size: 2em;
            color: #000;
            text-align: center;
        }
        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 2px solid #000;
            margin: 30px 0;
        }
        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #000;
            font-weight: 500;
            pointer-events: none;
            transition: .5s;
        }
        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: #000;
            font-weight: 600;
            padding: 0 35px 0 5px;
        }
        .input-box .icons-login {
            position: absolute;
            right: 8px;
            font-size: 1.2em;
            color: #000;
            line-height: 57px;
        }
        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;
        }
        .remember-forgot {
            font-size: .9em;
            color: #000;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
        }
        .remember-forgot label input {
            accent-color: var(--main-color);
            margin-right: 3px;
        }
        .remember-forgot a {
            color: #000;
            text-decoration: none;
        }
        .remember-forgot a:hover {
            text-decoration: underline;
        }
        .btn-login {
            width: 100%;
            height: 45px;
            background: var(--main-color);
            border: none;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            color: #fff;
            font-weight: 500;
        }
        .login-register {
            font-size: .9em;
            color: #000;
            text-align: center;
            font-weight: 500;
            margin: 25px 0 10px;
        }
        .login-register p a {
            color: #000;
            text-decoration: none;
            font-weight: 500;
        }
        .login-register p a:hover {
            text-decoration: underline;
        }
        .login-wrapper .icon-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 45px;
            height: 45px;
            background: #000;
            font-size: 2em;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 20px;
            cursor: pointer;
            z-index: 1;
        }
        .login-wrapper .form-box.login {
            transition: transform .18s ease;
            transform: translateX(0);
        }
        .login-wrapper.active .form-box.login {
            transition: none;
            transform: translateX(-400px);
        }
        .login-wrapper .form-box.register {
            position: absolute;
            transition: none;
            transform: translateX(400px);
        }
        .login-wrapper.active .form-box.register {
            transition: transform .18s ease;
            transform: translateX(0);
        }
        .login-wrapper.active {
            height: 520px;
        }
        .greeting {
            /* Mengatur tampilan teks */
            font-weight: bold;
            color: #333;
            font-size: 18px;
            margin-left: 10px;
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
            <li><a href="#home">Home</a></li>
            <li><a href="#fitur">Berita</a></li>
            <li><a href="#New">Sale</a></li>
            <li><a href="#Kontak">Kontak</a></li>
        </ul>

        <?php
        // Menghubungkan ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "register_playstation";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Query untuk mendapatkan username dari database
        $sql = "SELECT usernames FROM register";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $username = $row["usernames"];

            // Menampilkan username di header
            echo '<div class="dropdown">';
            echo '<button class="dropbtn">Hai, ' . $username . ' ▼</button>';
            echo '<div class="dropdown-content">';
            echo '<a href="web utama.php">Logout</a>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "Tidak ada data.";
        }

        $conn->close();
        ?>
    </header>

    <br><br><br><br><br><br><br><br><br><br><br>

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