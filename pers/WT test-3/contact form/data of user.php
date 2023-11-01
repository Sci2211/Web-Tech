<?php
session_start();
require "connect.php";
$email = "";
$name = "";
$errors = array();

// if user signup button
if(isset($_POST['Conact Form'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['phone no.']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['message']);
    
    $email_check="SELECT * FROM usertable WHERE email='$email'";
    $res = mysqli_query($con,$email, $email_check);
    if (mysqli_num_rows($res) > 0){
        $error['email'] = "Email that you have entered already exist!";
    }
    if ($password !== $message){
        $error['phone no.'] = "Phone no is wrong,";
    }
    if (count($error)===0){
        $encpass = password_hash($password,PASSWORD_BCRYPT);

        $insert_data = "INSERT INTO usertable(name,email,password,confirm_password) values('$name','$email','$encpass','$message')";
        $data_check = mysqli_query($con , $insert_data);
    }

}