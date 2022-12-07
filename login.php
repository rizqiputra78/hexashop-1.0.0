<?php

require_once 'functions.php';
session_start();

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['submit'])) {
    if (is_null(login($_POST))) {
        echo "<script>
            alert('Username not registered!');
        </script>";
    } else if (!login($_POST)) {
        echo "<script>
            alert('Wrong username/ password!');
        </script>";
    } else {
        $userData = getUserData($_POST['username']);
        $_SESSION['level'] = $userData['level'];
        $_SESSION['name'] = $userData['username'];
        $_SESSION['id'] = $userData['id'];
        // $_SESSION['photo'] = $userData['image'];
        $_SESSION['login'] = true;
        header('Location: index.php');
        // if ($userLevel == 'admin') {
        //     header('Location: admin.php');
        // }

        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title> 
    <link rel="stylesheet" href="assets/css/style.css">
    <style> 
        .iyahh {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
        <form action="" method="POST">
            <h1>Login</h1>
            <hr>
            <p>Login Pages</p>
            <div class="email">
                <label for="">Username : </label>
                <input type="text" placeholder="isi username kamu" name="username" required>
            </div>
            <div class="pw">
                <label for="">Password : </label>
                <input type="password" placeholder="password" name="password" required>
            </div>
            <button type="submit" name="submit" >Login</button>
            <div class="iyahh">
                <a href="register.php">Daftar Akun</a>
            </div>
        </form>
    </div>
        <div class="right">
            <img src="assets/images/ilustrasi.png" alt="">    
        </div>
    </div>
</body>
</html>