<?php
if(isset($_POST['tasks'])) {
    $id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $task = $_POST['task'];
    $user_id = $_POST['user_id'];
    $status = $_POST['status'];

   $query = mysqli_query($koneksi, "INSERT INTO tasks(id,category_id,task,user_id,status) values('$id','$category_id','$task',$user_id,'$status')");

    if($query) {
        echo '<script>alert("Tambah Data Berhasil")</script>';
    }else{
        echo '<script>alert("Tambah Data Gagal")</script>';
    }
}

?>

<div class="container-fluid">
                        <h1 class="mt-4">Tasks</h1>
                        <ol class="breadcrumb mb-4">

                        </ol>

                        <form method="post">
                        <table class="table table-bordered">
                            <tr>
                                <td width="200">User_ID</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="id"></td>
                            </tr>

                            <tr>
                                <td>Category</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" step="0" name="category_id"></td>
                            </tr>


                            <tr>
                                <td>Task</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" step="0" name="task"></td>
                            </tr>

                            <tr>
                                <td>Users</td>
                                <td>:</td>
                                <td><select name="user_id" class="form-control">
                                    
                            </select></td>
                            </tr>

                            <tr>
                                <td>status</td>
                                <td>:</td>
                                <td><select name="status" class="form-control">
                                         <option value="complete">Complete</option>
                                        <option value="not_complete">Not Complete</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <td>
                            <button type="submit" class="btn btn-outline-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                            <a href="?page=tasks" class="btn btn-outline-danger">kembali</a>
                        </td>
                    </form>
  </div>