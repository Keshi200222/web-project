<?php
// db_connect.php - Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_web";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>