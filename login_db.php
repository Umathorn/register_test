<?php
session_start();
include('server.php');

$errors = array();

if (isset($_POST['login_btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        if ($row > 0) {
            $_SESSION["name"] = $row['name'];
            $_SESSION["regdate"] = $row['regdate'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["success"] = "Your are now logged in";
            header("location: index.php");
        } else {
            array_push($errors, "Wrong Username or Password");
            $_SESSION['error'] = "Wrong Username or Password!";
            header("location: login.php");
        }
    }
}
