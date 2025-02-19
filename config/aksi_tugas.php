<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $tanggalunggah = date('Y-m-d');
    $albumid = $_POST['albumid'];
    $userid = $_SESSION['userid'];
    $foto = $_FILES['lokasifile']['name'];
    $tmp = $_FILES['lokasifile']['tmp_name'];
    $lokasi = '../asset/img/';
    $namafoto = rand().'-'.$foto;

    move_uploaded_file($tmp, $lokasi.$namafoto);

    $sql = mysqli_query($koneksi, "INSERT INTO tugas VALUES('','$judulfoto','$deskripsifoto','$tanggalunggah','$namafoto','$albumid','$userid')");
    echo "<script>
    alert ('Data berhasil disimpan');
    location.href='../admin/tugas.php';
    </script>";
}

if(isset($_POST['edit'])){
    $fotoid = $_POST['fotoid'];
    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $tanggalunggah = date('Y-m-d');
    $albumid = $_POST['albumid'];
    $userid = $_SESSION['userid'];
    $foto = $_FILES['lokasifile']['name'];
    $tmp = $_FILES['lokasifile']['tmp_name'];
    $lokasi = '../asset/img/';
    $namafoto = rand().'-'.$foto;

    if($foto == null) {
        $sql = mysqli_query($koneksi, "UPDATE tugas SET judulfoto='$judulfoto',deskripsifoto='$deskripsifoto',
        tanggalunggah='$tanggalunggah', albumid='$albumid' WHERE tugasid='$tugasid'");
}else{
    $query = mysqli_query($koneksi, "SELECT * FROM tugas WHERE tugasid='$tugasid'");
    $data = mysqli_fetch_array($query);
    if (is_file('../admin/tugas.php/'.$data['lokasifile'])){
        unlink('../admin/tugas.php/'.$data['lokasifile']);
    }
    move_uploaded_file($tmp, $lokasi.$namafoto);
    $sql = mysqli_query($koneksi, "UPDATE tugas SET judulfoto='$judulfoto',deskripsifoto='$deskripsifoto', lokasifile='$namafoto',
        tanggalunggah='$tanggalunggah', albumid='$albumid' WHERE fotoid='$fotoid'");
    }
    echo "<script>
    alert ('Data berhasil disimpan');
    location.href='../admin/tugas.php';
</script>";

}

if (isset($_POST['hapus'])) {
    $fotoid = $_POST['fotoid'];
    $query = mysqli_query($koneksi, "SELECT * FROM tugas WHERE fotoid='$fotoid'");
    $data = mysqli_fetch_array($query);
    if (is_file('../admin/tugas.php/'.$data['lokasifile'])) {
        unlink('../admin/tugas.php/'.$data['lokasifile']);
}

$sql = mysqli_query($koneksi, "DELETE FROM tugas WHERE fotoid='$fotoid'");
echo "<script>
alert ('Data berhasil dihapus!');
location.href='../admin/tugas.php';
</script>";
}