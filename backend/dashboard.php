<?php
session_start();
require 'db_connect.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <?php include('navbar.php') ?>
        <div class="admin-container">


            <main class="content">
                <h1>Welcome, Admin</h1>
                <p>Manage your news posts efficiently from this panel.</p>
            </main>
        </div>
    </div>
</body>

</html>