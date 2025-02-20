<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi = mysqli_connect('localhost', 'root', '', 'todolist_ukk');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
