
<!DOCTYPE html>
<html>
<head>
  <title>Welcome Page</title>
  <style>
    body {
      background-color: #f5f5f5;
    }

    form {
      margin: 0 auto;
      width: 50%;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      text-align: center;
      background-color: #000;
      color: #fff;
    }
  </style>
</head>
<body>

  <h1>Welcome Page</h1>

  <form action="welcome.php" method="post">
    Your name: <input type="text" name="name">
    <input type="submit" value="Submit">
  </form>
  <?php
    $name = $_POST["name"];
    $welcomeMessage = "Welcome to our website, $name!";
    echo $welcomeMessage;
  ?>
</body>
</html>
