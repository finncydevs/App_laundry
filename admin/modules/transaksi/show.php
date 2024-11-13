    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Transaksi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Transaksi</li>
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
                            <h5 class="card-header">Daftar transaksi</h5>
                            <div class="card-body">
                                <div class="alert alert-info pt-4" role="alert">
                                    <ul>
                                        <li>Untuk ubah data click icon <i class="fa-solid fa-pen-to-square"></i></li>
                                        <li>Untuk hapus data click icon <i class="fa-solid fa-trash"></i></li>
                                    </ul>
                                </div>
                                <hr>
                                <a href="index.php?nav=t-tambah" type="button" class="btn btn-primary btn-sm"> <i
                                        class="fa-solid fa-plus">
                                    </i> Tambah
                                    Data
                                </a>
                                <button type="button" class="btn btn-secondary btn-sm">
                                    invoice</button>
                                <button type="button" class="btn btn-success btn-sm"><i
                                        class="fa-solid fa-file-export"></i>
                                    Export</button>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="40px">#</th>
                                            <th scope="col">invoice</th>
                                            <th scope="col" width="100px">Nama pelanggan</th>
                                            <th scope="col">Tanggal mulai</th>
                                            <th scope="col">berat (KG)</th>
                                            <th scope="col">tanggal selesai</th>
                                            <th scope="col">harga</th>
                                            <th scope="col" >status</th>
                                            <th scope="col" width="150px">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>#1234</td>
                                            <td>Pak mail</td>
                                            <td>2024-12-04</td>
                                            <td>2</td>
                                            <td>2024-12-06</td>
                                            <td>20000</td>
                                            <td>
                                            <a type="button" class="btn btn-primary " > proses
                                            </a>
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-warning sm-2" ><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a type="button"  href="index.php?nav=p-hapus&&hapus=<?php echo $data['id']; ?>"  class="btn btn-danger ml-2" name="aksi" value="aksi"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
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