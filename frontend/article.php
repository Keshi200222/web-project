<?php
// Database connection
$host = "localhost"; // Change if needed
$user = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "news_web";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the article ID from URL
$article_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the article from the database
$sql = "SELECT * FROM news WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $article_id);
$stmt->execute();
$result = $stmt->get_result();
$article = $result->fetch_assoc();

if (!$article) {
    die("Article not found.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?> - NewsDaily</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">NewsDaily</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <article class="news-article">
            <h1><?php echo htmlspecialchars($article['title']); ?></h1>
            <p><small>Published on: <?php echo $article['timestamp']; ?></small></p>
            <p><small>Author: <?php echo htmlspecialchars($article['author']); ?></small></p>
            <img src="../admin-panel/<?php echo htmlspecialchars($article['image']); ?>" alt="News Image">
            <p><?php echo nl2br(htmlspecialchars($article['description'])); ?></p>
        </article>
    </main>

    <footer>
        <p>&copy; 2024 NewsDaily. All rights reserved.</p>
    </footer>
</body>

</html>

<?php
// Close connection
$stmt->close();
$conn->close();
?>