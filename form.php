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
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br>
    <!---isi formulir-->
    <section class="carding" id="carding">
        <h2>Form Sewa PlayStation</h2>
        <form action="process_sewa.php" method="POST" onsubmit="showAlert()">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required><br>

            <label for="paket">Paket:</label>
            <select name="paket" id="paket" required>
                <option value="Basic">Basic</option>
                <option value="Standard">Standard</option>
                <option value="Premium">Premium</option>
            </select><br>

            <input type="submit" value="Submit">
        </form>
    </section>
</body>
<script>
    const header = document.querySelector("header");

    window.addEventListener("scroll", function() {
        header.classList.toggle ("sticky", window.scrollY > 0);
    });
    function showAlert() {
        alert("Data sudah terkirim, Silahkan tunggu pengiriman");
    }
</script>
</html>