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
    $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $author = $_POST['author'];
    $content = $_POST['content'];

    if (!empty($_FILES['image']['name'])) {
        $image = "uploads/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
        $query = "UPDATE news SET category=?, title=?, author=?, description=?, content=?, image=? WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssssi", $category, $title, $author, $desc, $content, $image, $id);
    } else {
        $query = "UPDATE news SET category=?, title=?, author=?, description=?, content=? WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssi", $category, $title, $author, $desc, $content, $id);
    }

    if ($stmt->execute()) {
        echo "<p class='success'>News updated successfully.</p>";
        header("Location: view_news.php");
        exit();
    } else {
        echo "<p class='error'>Error updating news: " . $stmt->error . "</p>";
    }

    $stmt->close();
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
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">

                <label>Category:</label>
                <select name="category" required>
                    <?php
                    $categories = ["Technology", "Sports", "Business", "Entertainment", "Science", "Politics", "Health", "World"];
                    foreach ($categories as $cat) {
                        $selected = ($row['category'] == $cat) ? "selected" : "";
                        echo "<option value='$cat' $selected>$cat</option>";
                    }
                    ?>
                </select><br>

                <label>Author:</label>
                <input type="text" name="author" value="<?php echo htmlspecialchars($row['author']); ?>" required><br>

                <label>Title:</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required><br>

                <label>Description:</label>
                <textarea name="description"
                    required><?php echo htmlspecialchars($row['description']); ?></textarea><br>

                <label>Image:</label>
                <input type="file" name="image"><br>
                <img src="<?php echo htmlspecialchars($row['image']); ?>" width="100"><br>

                <label>Content:</label>
                <textarea name="content" style="height:400px"
                    required><?php echo htmlspecialchars($row['content']); ?></textarea><br>

                <input type="submit" value="Update News">
            </form>
        </main>
    </div>
</body>

</html>