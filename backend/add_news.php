<?php require 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST["category"];
    $title = $_POST["title"];
    $desc = $_POST["description"];
    $author = $_POST["author"];
    $image = "uploads/" .
        basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    $query = "INSERT INTO news (category, title, description, image, author) VALUES ('$category', '$title', '$desc', '$image', '$author')"
    ;
    $conn->query($query);
    echo "<p class='success'>News added successfully.</p>";
    header("Location: view_news.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <?php include('navbar.php') ?>
        <main class="content">
            <h2>Add News</h2>
            <form method="post" enctype="multipart/form-data">
                <label>Category:</label>
                <select name="category" required>
                    <option value="Technology">Technology</option>
                    <option value="Sports">Sports</option>
                    <option value="Business">Business</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Science">Science</option>
                    <option value="Politics">Politics</option>
                    <option value="Health">Health</option>
                    <option value="World">World</option>
                </select><br>

                <label>Title:</label>
                <input type="text" name="title" required><br>

                <label>Description:</label>
                <textarea name="description" required></textarea><br>

                <label>Image:</label>
                <input type="file" name="image" required><br>

                <label>Author:</label>
                <input type="text" name="author" required><br>

                <input type="submit" value="Add News">
            </form>
        </main>
    </div>
</body>

</html>