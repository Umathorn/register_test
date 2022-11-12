<?php
session_start();
include('server.php');

$errors = array();

if (isset($_POST['reg_btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $regdate = mysqli_real_escape_string($conn, $_POST['regdate']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password);

        $sql = "INSERT INTO users (name, regdate, email, username, password) VALUES ('$name', '$regdate', '$email', '$username', '$password')";
        mysqli_query($conn, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: indexreg.php');
    } else {
        header("location: register.php");
    }
}
