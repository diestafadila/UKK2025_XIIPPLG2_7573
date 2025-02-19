<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($koneksi, "INSERT INTO tasks VALUES ('','$namaalbum','$deskripsi','$tanggal','$userid')");

    echo "<script>
    alert('Data berhasil disimpan!');
    location.href='../admin/tasks.php';
    </script>";
}

if (isset($_POST['edit'])) {
    $albumid = $_POST['albumid'];
    $namaalbum = $_POST['namaalbum'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date('Y-m-d');
    $userid = $_SESSION['userid'];

    $sql = mysqli_query($koneksi, "UPDATE tasks SET namaalbum='$namaalbum', deskripsi='$deskripsi', tanggaldibuat='$tanggal' WHERE id='$albumid'");
    if ($sql) { // Query succeeded
        echo "<script>
        alert('Data berhasil disimpan!');
        location.href='../admin/tasks.php';
        </script>";
    } else { // Query failed
        echo "<script>
        alert('Error: " . mysqli_error($koneksi) . "');
        </script>";
    }
    
}

if(isset($_POST['hapus'])) {
    $albumid = $_POST['tasks'];

    $sql = mysqli_query($koneksi, "DELETE FROM tasks WHERE albumid='$albumid'");

    echo "<script>
    alert('Data berhasil dihapus!');
    location.href='../admin/album.php';
    </script>";
}


?>