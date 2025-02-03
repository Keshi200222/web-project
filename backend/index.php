<?php
session_start();
require 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = md5($_POST["password"]);
    $query = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $user;
        header("Location: dashboard.php");
    } else {
        echo "<p class='error'>Invalid login credentials.</p>";
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Admin Login</h2>
    <form method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
