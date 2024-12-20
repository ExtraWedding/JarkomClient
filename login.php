<?php
session_start();
require 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $mysql->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username; // Set session pengguna
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php?error=true");
            exit();
        }
    } else {
        header("Location: login.php?error=true");
        exit();
    }
}
?>
