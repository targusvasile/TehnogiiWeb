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
    <a href="index.php">login</a>

</div>
<div class="body1">
    <form action="vendor/signin.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">Log In</button>
        <p>
            Don't have an account? - <a href="register.php">register</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</div>
</body>
</html>