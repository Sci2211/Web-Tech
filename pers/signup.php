
<?php
require "userdata.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login Form</title>
    <style>
        body {
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Signup Form -->
    <h2>Signup</h2>
    <form class="max-width-1" action="login.php" method='POST'>
        <?php
        if(count($errors) == 1){
        ?>
        <div class="alert alert-danger text-center">
        <?php
            foreach($errors as $showerror){
                echo $showerror;
            }
        ?>
        </div>
        <?php
        }elseif(count($errors) > 1){
            ?>
            <div class="alert alert-danger">
            <?php
            foreach($errors as $showerror){
            ?>
            <li><?php echo $showerror; ?></li>
            <?php
            }
        }
        ?>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
        <input type="submit" value="Submit">
    </form>
        <!-- Link to Login Page -->
    </div><br>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>

</html>
