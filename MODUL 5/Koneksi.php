<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "prakmodul5";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
die("<script>alert('Gagal tersambung dengan database.')</script>");
}