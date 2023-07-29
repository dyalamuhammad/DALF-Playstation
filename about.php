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
  <title>About Us - DALF PlayStation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Roboto', sans-serif;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 40px 15px;
    }

    .team-description {
      text-align: left;
      margin-bottom: 40px;
    }

    .team-description h1 {
      font-size: 96px;
      margin-bottom: 10px;

      font-family: 'Bebas Neue', sans-serif;
    }

    .team-description p {
      color: #777;
      font-size: 18px;
    }

    .team-card {
      border-radius: 18px 18px 50px 18px;
      background-color: #fff;
      padding: 10px;
      text-align: center;
      margin-bottom: 30px;
      transition: transform 0.3s ease;
    }

    .team-card:hover {
      transform: translateY(-5px);
      box-shadow: 0px 2px 20px 13px rgba(140, 191, 241, 0.21);
      background-color: #fff;
    }

    .team-card img {
      width: 100%;
      height: 400px;
      border-radius: 20px 20px 20px 85px;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .team-card h3 {
      font-size: 24px;
      font-weight: 600;
      height: 75px;
      margin-bottom: 10px;
    }

    .team-card p {
      color: #777;
      margin-bottom: 10px;
    }

    .footer {
      background-color: #121212;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .footer p {
      margin: 0;
    }

    .banner img {
      position: absolute;
      width: 100%;
      height: 500px;
      background-image: url('gambar/gambar ps.jpg');
      object-fit: cover;
    }

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

    .product-image {
      text-align: center;
      margin-bottom: 20px;
    }

    .product-image img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-price {
      font-size: 18px;
      color: #f00;
      margin-bottom: 10px;
    }

    .product-description {
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .btn {
      display: inline-block;
      background-color: var(--main-color);
      ;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: var(--main-color);
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
  <section class="container my-5" id='about'>
    <div class="team-description">
      <h1>About Us</h1>
      <p>DALF PlayStation merupakan proyek yang kami kembangkan sebagai bagian dari tugas praktikum pemrograman web kami, dengan
        keterlibatan kelima anggota tim kami.Kami memahami betapa pentingnya menyediakan aksesibilitas dan kenyamanan dalam mendapatkan
        perangkat dan permainan PlayStation yang Anda sukai. Dengan DALF PlayStation, kami ingin memberikan platform yang menyenangkan dan
        mudah bagi Anda untuk menyewa konsol PlayStation dan membeli peralatan gaming yang berkualitas.<br><br>Tujuan utama kami adalah memberikan
        layanan yang unggul kepada pelanggan kami. Kami berkomitmen untuk menyediakan stok konsol PlayStation terbaru dan berbagai peralatan
        gaming yang dibutuhkan, sehingga Anda dapat menikmati pengalaman gaming terbaik di rumah Anda sendiri. Selain itu, kami menyadari
        pentingnya keandalan dan keamanan transaksi online, dan itulah mengapa kami menjaga standar tinggi dalam hal perlindungan data
        pelanggan.</p>
    </div>

  </section>

  <div class="banner">
    <img src="gambar/gambar ps.jpg" alt="">
  </div>


  <br><br><br><br><br><br><br><br> <br><br><br><br>
  <section class="container my-5">


    <div class="row justify-content-center">

      <div class="col-md-4">
        <div class="team-card">
          <img src="gambar/cr.jpg" alt="Member 1">
          <h3>Daril Pratomo Sriramdanu</h3>
          <p>2110511129</p>
          <p>S1 Informatika</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-card">
          <img src="gambar/messi.jpg" alt="Member 2">
          <h3>Muhammad Farobby Mumtaz</h3>
          <p>2110511132</p>
          <p>S1 Informatika</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-card">
          <img src="gambar/mbappe.jpg" alt="Member 3">
          <h3>Leondra Herfino Ilham</h3>
          <p>2110511152</p>
          <p>S1 Informatika</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-card">
          <img src="gambar/neymar.jpg" alt="Member 4">
          <h3>Muhammad Fathur Hidayat</h3>
          <p>2110511153</p>
          <p>S1 Informatika</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="team-card">
          <img src="gambar/maldini.jpg" alt="Member 5">
          <h3>Dyala Muhammad Panahpertama</h3>
          <p>2110511165</p>
          <p>S1 Informatika</p>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>