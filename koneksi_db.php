<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "laravel";

$mysql = new mysqli($servername, $username, $password, $database);

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}