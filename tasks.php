<h1 class="mt-4">Tasks</h1>

<div class="container-fluid px-4">    
        <a href="?page=tasks_tambah" class="btn btn-outline-primary">+ tambah Data</a>
        <ol class="breadcrumb mb-4"></ol>
            <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Categories</th>
                        <th>Tasks</th>
                        <th>User</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    $i = 1;
                        $query = mysqli_query($koneksi, "SELECT*FROM tasks");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['category_id']; ?></td>
                                <td><?php echo $data['task']; ?></td>
                                <td><?php echo $data['user_id']; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <td>
                                    <a href="?page=tasks_ubah&&id=<?php echo $data['id']; ?>" class="btn btn-outline-info">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin menhapus data ini?');" href="?page=tasks_hapus&&id=<?php echo $data['id']; ?>" class="btn btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>