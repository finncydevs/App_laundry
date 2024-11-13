<?php
include "../../config/database.php";


if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    
    $quary = "DELETE FROM pelanggan WHERE id=".$id;
    $r   = mysqli_query($conn,$quary);

    if ($r) {
        header("location:../../index.php?nav=pelanggan&p=berhasil");
    }
}