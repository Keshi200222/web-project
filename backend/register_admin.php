<?php
require 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = md5($_POST["password"]);
    $query = "INSERT INTO admin (username, password) VALUES ('$user', '$pass')";
    if ($conn->query($query) === TRUE) {
        echo "<p class='success'>Admin registered successfully.</p>";
    } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
    }
}
?>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Register Admin</h2>
    <form method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>