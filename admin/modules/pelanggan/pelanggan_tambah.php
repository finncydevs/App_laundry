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
                            <h5 class="card-header">Form Pelanggan</h5>
                            <div class="card-body">
                                <form action="modules/pelanggan/p_tambah.php" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no.hp">Handphone</label>
                                        <input type="text" class="form-control" id="hp" name="hp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm" value="simpan" name="aksi"><i
                                            class="fa-solid fa-plus"></i>
                                        Tambahkan
                                        Data</button>
                                    <a href="index.php?nav=pelanggan" type="button" class="btn btn-danger btn-sm"> <i
                                            class="fa-solid fa-clock-rotate-left"></i>
                                        </i> batal
                                    </a>
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