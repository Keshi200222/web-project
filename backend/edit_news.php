<!-- edit_news.php -->
<?php
session_start();
require 'db_connect.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM news WHERE id=$id");
    $row = $result->fetch_assoc();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $author = $_POST['author'];

    if (!empty($_FILES['image']['name'])) {
        $image = "uploads/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
        $query = "UPDATE news SET category='$category', title='$title', author='$author', description='$desc', image='$image' WHERE id=$id";
    } else {
        $query = "UPDATE news SET category='$category', title='$title', author='$author', description='$desc' WHERE id=$id";
    }

    $conn->query($query);
    echo "<p class='success'>News updated successfully.</p>";
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
            <h2>Edit News</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                Category: <input type="text" name="category" value="<?php echo $row['category']; ?>" required><br>
                Author: <input type="text" name="author" value="<?php echo $row['author']; ?>" required><br>
                Title: <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
                Description: <textarea name="description" required><?php echo $row['description']; ?></textarea><br>
                Image: <input type="file" name="image"><br>
                <img src="<?php echo $row['image']; ?>" width="100"><br>
                <input type="submit" value="Update News">
            </form>
        </main>
    </div>
</body>

</html>