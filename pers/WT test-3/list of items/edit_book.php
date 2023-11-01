<?php
if (!isset($_GET['id'])) {
  header('Location: list.php');
  exit;
}

$book = ['id' => 1, 'title' => 'Book 1', 'author' => 'Author 1'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $title = $_POST['title'];
  $author = $_POST['author'];
  header('Location: list.php?message=Book updated successfully');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Book</title>
</head>
<body>
  <h1>Edit Book</h1>

  <form action="edit_book.php" method="POST">
    <label for="title">Title:</label>
    <input type="text" name="title" value="<?php echo $book['title']; ?>" required><br>
    <br>
    <label for="author">Author:</label>
    <input type="text" name="author" value="<?php echo $book['author']; ?>" required><br>
    <br>
    <input type="submit" value="Update Book">
  </form>
</body>
</html>