<h1 class="mt-4 text-center">To Do List</h1>    
<div class="row">
    <div class="col-xl-6 col-md-6">
            <div class="card text-black mb-4" style="background-color:khaki">
                <div class="card-body">
                    <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM categories"));
                    ?>
                    Category</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="?page=categories">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card text-black mb-4" style="background-color:khaki">
                <div class="card-body">
                    <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tasks"));
                    ?>
                    Tasks</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="?page=tasks">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

