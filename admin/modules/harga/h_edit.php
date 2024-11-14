<?php
include "../../config/database.php";

if ($_POST['aksi'] == 'ubah') {
    $id = $_POST['id'];
    $harga = $_POST['harga'];


    $s = "UPDATE harga set harga_perkilo='$harga' WHERE id='$id'";
    $query = mysqli_query($conn, $s);

    // var_dump($id, $harga);
    if ($query) {
        header('location:../../index.php?nav=harga&p=edited');
    }
}
