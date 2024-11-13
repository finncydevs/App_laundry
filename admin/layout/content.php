<?php
error_reporting(0);

    if($_GET['nav'] == 'pelanggan') {
        include 'modules/pelanggan/show.php';
    }elseif ($_GET['nav'] == 'p-tambah') {
        include 'modules/pelanggan/pelanggan_tambah.php';
    }elseif($_GET['nav']== "p-hapus"){
        include 'modules/pelanggan/p_hapus.php';
    }elseif ($_GET['nav'] == "p-edit") {
        include 'modules/pelanggan/pelanggan_edit.php';
    }
    elseif($_GET['nav']== "transaksi"){
        include 'modules/transaksi/show.php';
    }elseif($_GET['nav']== "t-tambah"){
        include 'modules/transaksi/transaksi_tambah.php';
    }
    else{
        include "dashboard.php";
    }

