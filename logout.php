<?php
// Mulai sesi dan hapus data sesi login
session_start();
session_unset();
session_destroy();

// Arahkan pengguna kembali ke halaman login
header("Location: login.html");
exit();
?>
