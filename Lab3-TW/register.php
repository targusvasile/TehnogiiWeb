<?php
    session_start();
//    if ($_SESSION['user']) {
//        header('Location: profile.php');
//    }
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
</head>
<body>
<div class="topnav">
    <a class="active" href="index.html">Acasa</a>
    <a href="pagina1.html">Paragraful 1</a>
    <a href="pagina2.html">Paragraful 2</a>
    <a href="pagina3.html">Paragraful 3</a>
    <a href="./Feeback/feedback.php">Feedback</a>

    <a href="index.php">login</a>

</div>
<div class="body1">
    <form >
        <label>Full Name</label>
        <input type="text" name="full_name" placeholder="Enter your name">
        <label>Login</label>
        <input type="text" name="login" placeholder="Choose a login">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Enter your email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <label>Confirm password</label>
        <input type="password" name="password_confirm" placeholder="Confirm password">
        <button type="submit" class="register-btn">Register</button>
        <p>
            Have an account? - <a href="./index.php">LogIn</a>
        </p>
        <p class="msg none"></p>

    </form>
</div>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>