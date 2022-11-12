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
        <form action="login_db.php" method="POST">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <div class="mb-3">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" name="username">
            </div>
            <div class="mb-3">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="login_btn">ลงทะเบียน</button>
            </div>
        </form>
    </div>
</body>

</html>