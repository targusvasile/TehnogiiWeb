<?php
session_start();

//if ($_SESSION['user']) {
//    header('Location: profile.php');
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogIn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="assets/css/main.css">

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
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit" class="login-btn">Log In</button>
        <p>
            Don't have an account? - <a href="register.php">register</a>
        </p>
        <p class="msg none"></p>
    </form>
</div>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>