<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $title = $_POST['title'];
  $author = $_POST['author'];
  header('Location: list.php?message=Book added successfully');
  exit;
}
?>