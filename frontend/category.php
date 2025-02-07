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

// Get the category from URL
$category = isset($_GET['category']) ? $_GET['category'] : 'general';

// Sanitize input
$category = $conn->real_escape_string($category);

// Fetch news for the selected category
$sql = "SELECT * FROM news WHERE category = '$category' ORDER BY timestamp DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($category); ?> News - NewsDaily</title>
    <link rel="stylesheet" href="category.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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
        <section class="category-news">
            <h1><?php echo ucfirst($category); ?> News</h1>

            <div class="news-container">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<a href='article.php?id=" . $row['id'] . "'>";
                        echo "<div class='news-card'>";
                        echo "<img src='../admin-panel/" . $row['image'] . "' alt='News Image'>";
                        echo "<div class='news-card-body'>";
                        echo "<h2>" . $row['title'] . "</h2>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<p><small>Published on: " . $row['timestamp'] . "</small></p>";
                        echo "<p><small>Author : " . $row['author'] . "</small></p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                    }
                } else {
                    echo "<p>No news articles found in this category.</p>";
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 NewsDaily. All rights reserved.</p>
    </footer>
</body>

</html>

<?php
// Close connection
$conn->close();
?>