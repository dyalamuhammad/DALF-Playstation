<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .confirmation-container {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        .confirmation-container img {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .confirmation-container h3 {
            font-size: 24px;
            margin-top: 20px;
            color: #333;
        }

        .confirmation-container p {
            font-size: 16px;
            margin-top: 10px;
            color: #666;
        }

        .back-to-home {
            margin-top: 30px;
            text-align: center;
        }

        .back-to-home a {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            background-color: var(--main-color);
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .back-to-home a:hover {
            background-color: #4d8dff;
        }
        .confirmation-container img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            animation: checkmarkAnimation 0.5s ease-in-out;
        }

        @keyframes checkmarkAnimation {
            0% {
                opacity: 0;
                transform: scale(0.2);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <br><br><br><br><br><br><br>
    <div class="confirmation-container">
        <img src="gambar/checkmark.png" alt="Checkmark">
        <h3 class="success">Pembayaran Berhasil!</h3>
        <p>Terima kasih telah melakukan pembayaran. Pesanan Anda akan segera diproses.</p>
        <div class="back-to-home">
            <a href="web utama afterLogin.php">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>
</html>
