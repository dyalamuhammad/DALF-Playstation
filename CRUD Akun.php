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
        <h1>CRUD Akun DALF Playstation</h1>

        <?php
        // Buat koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "register_playstation";

        $conn = new mysqli($servername, $username, $password, $database);

        // Cek koneksi ke database
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Tambah data
        if (isset($_POST['submit'])) {
            $usernames = $_POST['usernames'];
            $email = $_POST['email'];
            $passwords = $_POST['passwords'];

            // Query SQL untuk insert data
            $sql = "INSERT INTO register (usernames, email, passwords) VALUES ('$usernames', '$email', '$passwords')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='success'>Data berhasil disimpan.</div>";
            } else {
                echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }

        // Hapus data
        if (isset($_POST['delete'])) {
            $usernames = $_POST['usernames'];

            // Query SQL untuk delete data
            $sql = "DELETE FROM register WHERE usernames = '$usernames'";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='success'>Data berhasil dihapus.</div>";
            } else {
                echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }

        // Ambil data dari database
        $sql = "SELECT * FROM register";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Username</th><th>Email</th><th>Password</th><th>Aksi</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["usernames"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["passwords"] . "</td>";
                echo "<td>";
                echo "<form action='' method='POST'>";
                echo "<input type='hidden' name='usernames' value='" . $row["usernames"] . "'>";
                echo "<input type='submit' name='delete' value='Hapus'>";
                echo "</form>";
                echo "<form action='edit_dataAKUN.php' method='POST'>";
                echo "<input type='hidden' name='usernames' value='" . $row["usernames"] . "'>";
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
            <label for="usernames">Username:</label>
            <input type="text" name="usernames" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="text" name="passwords" required>

            <input type="submit" name="submit" value="Simpan">
        </form>
    </div>
</body>
</html>