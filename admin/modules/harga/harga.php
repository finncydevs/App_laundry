<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Harga</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Harga</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <?php
                        $s = "SELECT * FROM harga";
                        $query = mysqli_query($conn, $s);
                        $row = mysqli_fetch_array($query);

                        if ($_GET['p'] == "edited") {

                            echo '<div class="alert alert-success" role="alert">
                            Diubah
                        </div>';
                        }
                        ?>
                        <h5 class="card-header">Form harga</h5>
                        <div class="card-body">
                            <form action="modules/harga/h_edit.php" method="POST">
                                <input value="<?php echo $row['id']; ?>" type="text" class="form-control" id="id" name="id" hidden>
                                <div class="form-group">
                                    <label for="nama">Harga</label>
                                    <input value="<?php echo $row['harga_perkilo']; ?>" type="text" class="form-control" id="harga" name="harga" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm" name="aksi" value="ubah">
                                    <i class="fa-solid fa-plus"></i> Ubah Harga
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->