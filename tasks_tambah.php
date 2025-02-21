<?php
if (isset($_POST['category_id'])) {

    $tanggal = date('y/m/d');
    $category_id = $_POST['category_id'];
    $task = $_POST['task'];
    $priority = $_POST['priority'];
   

    $query = mysqli_query($koneksi, "INSERT INTO tasks (tanggal_date, category_id, task, priority) 
    values ('$tanggal','$category_id','$task', '$priority')");
    if ($query) {
        echo '<script>alert("Tambah data berhasil")
        location.href="?page=tasks"
        </script>';
    } else {
        echo '<script>alert("Tambah data Gagal!")</script>';
    }
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">To do List</h1>
    <ol class="breadcrumb mb-4">

    </ol>
    <hr>
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td>Task</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="task"></td>
            </tr>
            <tr>
                <td width="200">Category</td>
                <td width="1">:</td>
                <td><input class="form-control" type="text" name="category_id"></td>
            </tr>
            <tr>
                <td>Priority</td>
                <td>:</td>
                <td>
                    <select class="form-control" name="priority">
                        <option value="1">Tidak Perlu</option>
                        <option value="2">Bebas</option>
                        <option value="3">Wajib</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td>
                    <button type="submit" class="btn btn-outline-success">Simpan</button>
                    <a href="?page=tasks" class="btn btn-outline-danger">kembali</a>
                </td>
            </tr>
        </table>
    </form>
</div>