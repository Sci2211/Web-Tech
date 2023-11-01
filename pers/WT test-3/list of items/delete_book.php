<?php
if (!isset($_GET['id'])) {
  header('Location: list.php');
  exit;
}
header('Location: list.php?message=Book deleted successfully');
exit;
?>