<?php

    $connect = mysqli_connect('localhost', 'root', '', 'tw');

    if (!$connect) {
        die('Error connect to DataBase');
    }