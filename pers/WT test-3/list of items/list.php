<!DOCTYPE html>
<html>
<head>
  <title>Book List</title>
</head>
<body>
  <h1>Book List</h1>

  <?php
  
  if (isset($_GET['message'])) {
    echo '<p>' . $_GET['message'] . '</p>';
  }
  ?>

  <h2>Add a Book</h2>
  <form action="add_book.php" method="POST">
    <label for="title" style="color:green;">Title:</label>
    <input type="text" name="title" required><br>
    <br>
    <label for="author" style="color:green;">Author:</label>
    <input type="text" name="author" required><br>
    <br>
    <input type="submit" value="Add Book">
  </form>

  <h2>Book List</h2>
  <?php
  
  $books = [
    ['id' => 1, 'title' => 'Book 1', 'author' => 'Author 1'],
    ['id' => 2, 'title' => 'Book 2', 'author' => 'Author 2'],
    ['id' => 3, 'title' => 'Book 3', 'author' => 'Author 3']
  ];

  if (count($books) > 0) {
    echo '<ul>';
    foreach ($books as $book) {
      echo '<li>';
      echo $book['title'] . ' by ' . $book['author'];
      echo ' <a href="edit_book.php?id=' . $book['id'] . '">Edit</a>';
      echo ' <a href="delete_book.php?id=' . $book['id'] . '">Delete</a>';
      echo '</li>';
    }
    echo '</ul>';
  } else {
    echo '<p>No books found.</p>';
  }
  ?>

</body>
</html>