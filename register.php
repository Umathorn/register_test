<?php
session_start();
include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>ลงทะเบียน</h1>
        </div>
        <form action="register_db.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-lable">ชื่อ - สกุล</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="regdate">วันที่สมัคร</label>
                <input type="date" name="regdate">
            </div>
            <div class="input-group">
                <label for="email">อีเมล</label>
                <input type="email" name="email">
            </div>
            <div class="mb-3">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" name="username">
            </div>
            <div class="mb-3">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="reg_btn">ลงทะเบียน</button>
            </div>
        </form>
    </div>
</body>

</html>