<?php
session_start();
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
    <title>Websie Galeri Foto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-header">Tambah Data Tugas</div>
                <div class="card-body">
                    <form action="../config/aksi_tasks.php" method="POST">
                        <label class="form-label">Nama Data Tugas</label>
                        <input type="text" name="namaalbum" class="form-control" required>
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" required></textarea>
                        <button type="submit" class="btn btn-primary mt-2" name="tambah">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>

<div class="col-md-8">
<div class="card mt-2">
    <div class="card-header">Data Tugas</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>category</th>
                    <th>tasks</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $userid = $_SESSION['userid'];
                $query = mysqli_query($koneksi, "SELECT * FROM tasks");
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['category_id'] ?></td>
                    <td><?php echo $data['task'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td>
 <!-- Tombol Edit -->
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
      data-bs-target="#edit<?php echo $data[''] ?>">Edit</button>

       <div class="modal fade" id="edit<?php echo $data['category_id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $data['albumid'] ?>" aria-hidden="true">
       <div class="modal-dialog">
       <div class="modal-content">
       <div class="modal-header">
       <h1 class="modal-title fs-5" id="editModalLabel<?php echo $data['category_id'] ?>">Edit Data</h1>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
       <form action="../config/aksi_tasks.php" method="POST">
       <input type="hidden" name="albumid" value="<?php echo $data['albumid'] ?>">
       <label class="form-label">Nama Album</label>
       <input type="text" name="namaalbum" value="<?php echo $data['namaalbum'] ?>" class="form-control" required>
       <label class="form-label">Deskripsi</label>
       <textarea class="form-control" name="deskripsi" required><?php echo $data['deskripsi']; ?></textarea>
       </div>
       <div class="modal-footer">
       <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
       </form>
       </div>
         </div>
           </div>
            </div>


<button type="button" class="btn btn-danger" data-bs-toggle="modal" 
        data-bs-target="#hapus<?php echo $data['albumid'] ?>">Hapus</button>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<p>&copy; UKK PPLG | dista</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>