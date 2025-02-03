<?php
session_start();
require 'db_connect.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
    header("Location: view_news.php");
    exit();
}
?>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this news article?")) {
                window.location.href = "view_news.php?delete_id=" + id;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <?php include('navbar.php') ?>
        <main class="content">
            <h2>View News</h2>
            <?php
            $result = $conn->query("SELECT * FROM news");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='news-card'>";
                echo "<img src='" . $row['image'] . "' width='100'>";
                echo "<div class='news-card-body'>";
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>" . $row['author'] . "</p>";
                echo "</div>";
                echo "<div class='news-card-btns'>";
                echo "<a href='edit_news.php?id=" . $row['id'] . "'>Edit</a>";
                echo "<button onclick='confirmDelete(" . $row['id'] . ")'>Delete</button>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </main>
    </div>
</body>

</html>