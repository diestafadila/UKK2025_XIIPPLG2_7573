<div class="container-fluid px-4">
    <h1 class="mt-4">Tugas</h1>

    <a href="?page=tasks_tambah" class="btn btn-outline-primary">+ Tambah Tugas</a>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Tugas</th>
            <th>Kategori</th>
            <th>Prioritas</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM tasks");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['tanggal_date']; ?></td>
                <td><?php echo $data['task']; ?></td>
                <td><?php echo $data['category_id']; ?></td>
                <td><?php echo $data['priority']; ?></td>
                <td>
                    <?php
                    if ($data['status'] ==  "1") {
                        echo '<span class="badge bg-success">Selesai</span>';
                    } else {
                        echo '<span class="badge bg-danger">Belum Selesai</span>';
                    }
                    ?>
                </td>

                <td>
                    <?php if ($data['status'] == 0) { ?>
                        <a href="?page=tasks_selesai&id=<?php echo $data['category_id']; ?>" class="btn btn-outline-info">Selesai</a>
                    <?php } ?>

                    <a href="?page=tasks_hapus&id=<?php echo $data['category_id']; ?>" class="btn btn-outline-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>