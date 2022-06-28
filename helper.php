<?php

    define('HOST', 'localhost');
    define('USER', 'admin');
    define('PASS', '12345');
    define('DB', 'api_crud');

    $conn = mysqli_connect(HOST, USER, PASS, DB) or die ('Database connection failed');

    // Membuat data selalu tampil dalam bentuk json
    header('Content-Type: application/json');
?>