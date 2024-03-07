<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form ction="keygenGenerator" method="post">
        <label for="password">Entrez le mot de pass:</label>
        <input type="text" id="password" name="password" required>
        <imput type="submit" value="Crypter">
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["passwords"])) {
        // Crypter le mot de pass avec BCRYPT
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }
    ?>