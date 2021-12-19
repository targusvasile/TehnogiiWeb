<?php

session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$login'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "This login already exists",
        "fields" => ['login']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if ($full_name === '') {
    $error_fields[] = 'full_name';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'email';
}

if ($password_confirm === '') {
    $error_fields[] = 'password_confirm';
}


if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Check boxes",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

if ($password === $password_confirm) {


    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

    $response = [
        "status" => true,
        "message" => "Done!",
    ];
    echo json_encode($response);


} else {
    $response = [
        "status" => false,
        "message" => "Passwords don't match",
    ];
    echo json_encode($response);
}

?>
