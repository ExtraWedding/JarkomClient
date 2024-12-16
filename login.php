<?php
session_start();
require 'koneksi_db.php'; // Pastikan file koneksi database di-load

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query ke database untuk cek username
    $stmt = $mysql->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Ambil data password dari database
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username; // Set session pengguna
            header("Location: index.php");
            exit();
        } else {
            // Password salah
            header("Location: login.php?error=true");
            exit();
        }
    } else {
        // Username tidak ditemukan
        header("Location: login.php?error=true");
        exit();
    }
}
?>
