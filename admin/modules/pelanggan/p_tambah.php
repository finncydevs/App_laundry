<?php
include "../../config/database.php";
// include "modules/pelanggan/show.php";

if ($_POST['aksi']) {
    if ($_POST['aksi']== "simpan") {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $hp = $_POST['hp'];

        $r = mysqli_query($conn,"INSERT INtO pelanggan (nama, alamat, hp) VALUES ('$nama', '$alamat', '$hp')");
        
        if ($r) { 
            header("location:../../index.php?nav=pelanggan&p=succes");
        }else{
            echo "gagal di simpan";
        }

    }
}





?>