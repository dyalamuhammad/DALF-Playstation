<!-- reset-password-form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 100px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #006fcd;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <form method="post" action="update-password.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <!-- Input field untuk password baru -->
            <label for="password">Password Baru:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" onclick="showSuccessMessage()">Update Password</button>
        </form>
    </div>
    <script>
        function showSuccessMessage() {
            alert("Selamat, Password Anda berhasil diupdate!");
        }
    </script>
</body>
</html>
