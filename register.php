<?php
require_once 'functions.php';
session_start();
if(isset($_SESSION['login'])){
    header('Location: index.php');
    exit;
}

$alert = '';

if (isset($_POST['submit'])) {
    if ($_POST['password'] != $_POST['confirm']) {
        $alert = "Password confirm doesn't match!";
    } else {
        $result = register($_POST);
        if ($result) {
            echo "<script>
                document.location.href= 'login.php';
            </script>";
        } else {
            echo "<script>
                document.location.href = 'register.php';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman signup</title> 
    <link rel="stylesheet" href="assets/css/style.css">
    <style> 
        .iyahh {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
        <form action="" method="POST">
            <h1>Sign-up</h1>
            <hr>
            <p>Sign-up Page</p>
            <div class="email">
                <label for="username">Username : </label>
                <input type="text" id="username" placeholder="isi username kamu" name="username" required>
            </div>
            <div class="pw">
                <label for="pw">Password : </label>
                <input type="password" id="pw" placeholder="password" name="password" required>
            </div>
            <div class="pw">
                <label for="pw">confirm Password : </label>
                <input type="password" id="pw" placeholder="password" name="confirm" required>
            </div>
            <button type="submit" name="submit">Sign-up</button>
            <div class="iyahh">
                <a href="login.php">Login akun</a>
            </div>
        </form>
    </div>
        <div class="right">
            <img src="assets/images/ilustrasi.png" alt="">    
        </div>
    </div>
</body>
</html>