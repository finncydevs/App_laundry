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
                            <h5 class="card-header">Form Transaksi</h5>
                            <div class="card-body">
                                <form action="modules/pelanggan/pelanggan_aksi.php" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama Pelanggan</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="---Pilih Nama Pelanggan---" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat">berat</label>
                                        <input type="text" class="form-control" id="berat" name="berat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no.hp">tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Jenis Pakaian</th>
                                                        <th style="width: 200px;">Jumlah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="number" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="number" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="number" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="number" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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