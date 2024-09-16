<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
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
    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Log Out</a>
    </form>
</div>
</body>
</html>