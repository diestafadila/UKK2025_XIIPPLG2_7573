<?php
session_start();
$userid = $_SESSION['userid'];
include '../config/koneksi.php';
if ($_SESSION['status'] != 'Login'){
  echo "<script>
  alert('Anda belum Login!');
  location.href='../index.php';
  </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFCFCF;">
  <div class="container">
    <a class="navbar-brand" href="index.php">MY TODO LIST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a href="home.php" class="nav-link">Home</a>
        <a href="tasks.php" class="nav-link">List Tugas</a>
        <a href="tugas.php" class="nav-link">Tugas</a>
     </div>
          <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">
        Keluar</a>
    </div>
  </div>
</nav>    



<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy; UKK pplg | dista</p>

</footer>

<script type="text/javascript" src="../ asset/css/bootstrap.min.css"></script>
</body>
</html>




