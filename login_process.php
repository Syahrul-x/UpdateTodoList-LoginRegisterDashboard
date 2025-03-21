<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Hardcoded username dan password
    $users = [
        "syahrul" => "123",
        "putra" => "password1",
        "wijdan" => "password2",
        "rangga" => "rahasia",
        "serly" => "rahasia",
        "rizal" => "123",
        "wijdan" => '123'
    ];

    // Cek apakah username ada di array dan password sesuai
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $_SESSION['error'] = "Login failed! Username or password is incorrect.";
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}

