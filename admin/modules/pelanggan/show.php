    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pelanggan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pelanggan</li>
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
                            <h5 class="card-header">Daftar Pelanggan</h5>
                            <div class="card-body">
                                <div class="alert alert-info pt-4" role="alert">
                                    <ul>
                                        <li>Untuk ubah data click icon <i class="fa-solid fa-pen-to-square"></i></li>
                                        <li>Untuk hapus data click icon <i class="fa-solid fa-trash"></i></li>
                                    </ul>
                                </div>
                                <hr>
                                <?php 
                                if ($_GET['p']== "succes") {
                                    
                                echo '<div class="alert alert-success" role="alert">
                                    Data Berhasil Di Simpan
                                </div>' ;
                                }elseif ($_GET['p']== "berhasil") {
                                echo '<div class="alert alert-primary" role="alert">
                                    Data Berhasil Di Hapus
                                </div> ';
                                    }
                                    ?>
                                    
                                <a href="index.php?nav=p-tambah" type="button" class="btn btn-primary btn-sm"> <i
                                        class="fa-solid fa-plus">
                                    </i> Tambah
                                    Data
                                </a>
                                <button type="button" class="btn btn-success btn-sm"><i
                                        class="fa-solid fa-file-export"></i>
                                        Export</button>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="40px">#</th>
                                            <th scope="col" width="340px">Nama</th>
                                            <th scope="col">No.Hanphone</th>
                                            <th scope="col" width="470px">Alamat</th>
                                            <th scope="col" width="150px">Aksi</th>
                                        </tr>
                                    </thead>

                                    <?php 
                                    $query = mysqli_query($conn,"select * from pelanggan");

                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>

                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['hp']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td>
                                                <a type="button" href="index.php?nav=p-edit&&edit=<?php echo $data['id'];?>"  class="btn btn-warning sm-2" ><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a type="button"  href="modules/pelanggan/p_hapus.php?hapus=<?php echo $data['id']; ?>"  class="btn btn-danger ml-2" name="hapus" value="hapus"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->