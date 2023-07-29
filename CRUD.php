<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DALF Playstation</title>
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

        form {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input[type="text"],
        form input[type="email"],
        form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        .success {
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            padding: 10px;
            margin-bottom: 15px;
        }

        .error {
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            color: #a94442;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CRUD DALF Playstation</h1>

        <?php
        // Buat koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "sewa_playstation";

        $conn = new mysqli($servername, $username, $password, $database);

        // Cek koneksi ke database
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Tambah data
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $paket = $_POST['paket'];

            // Query SQL untuk insert data
            $sql = "INSERT INTO sewa (nama, email, alamat, paket) VALUES ('$nama', '$email', '$alamat', '$paket')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='success'>Data berhasil disimpan.</div>";
            } else {
                echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }

        // Hapus data
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];

            // Query SQL untuk delete data
            $sql = "DELETE FROM sewa WHERE id = '$id'";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='success'>Data berhasil dihapus.</div>";
            } else {
                echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }

        // Ambil data dari database
        $sql = "SELECT * FROM sewa";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nama</th><th>Email</th><th>Alamat</th><th>Paket</th><th>Aksi</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["alamat"] . "</td>";
                echo "<td>" . $row["paket"] . "</td>";
                echo "<td>";
                echo "<form action='' method='POST'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<input type='submit' name='delete' value='Hapus'>";
                echo "</form>";
                echo "<form action='edit_data.php' method='POST'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<input type='submit' name='edit' value='Edit'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='error'>Tidak ada data.</div>";
        }

        $conn->close();
        ?>
        <br><br>
        <form action="" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required>

            <label for="paket">Paket:</label>
            <select name="paket" required>
                <option value="Basic">Basic</option>
                <option value="Standard">Standard</option>
                <option value="Premium">Premium</option>
            </select>

            <input type="submit" name="submit" value="Simpan">
        </form>
    </div>
</body>
</html>