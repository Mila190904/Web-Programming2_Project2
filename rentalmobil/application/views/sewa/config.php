<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbrentalmobil";
// Komeksi dan memilih database di server
$connect = mysqli_connect($server, $username, $password, $database) or die("Gagal");
?>