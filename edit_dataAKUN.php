<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data DALF Playstation</title>
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
            margin-bottom: 20px;
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
        <h1>Edit Data DALF Playstation</h1>

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

        // Ambil data dari database berdasarkan ID
        $usernames = $_POST['usernames'];
        $sql = "SELECT * FROM register WHERE usernames = '$usernames'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>

            <form action="update_dataAKUN.php" method="POST">
                <label for="usernames">Username:</label>
                <input type="text" name="usernames" value="<?php echo $row['usernames']; ?>" required>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

                <label for="passwords">Password:</label>
                <input type="text" name="passwords" value="<?php echo $row['passwords']; ?>" required>

                <input type="submit" name="update" value="Update">
            </form>

            <?php
        } else {
            echo "<div class='error'>Data tidak ditemukan.</div>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
