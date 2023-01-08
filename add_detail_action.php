<?php
    include "koneksi.php";

    // mererima data dari method post
    $id_transaksi = $_POST['id_transaksi'];
    $id_produk = $_POST['id_produk'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    // proses menambah dalam database
    $data = $koneksi->query("INSERT INTO 
    detail_transaksi VALUES(
        $id_transaksi,$id_produk,$jumlah,$harga)");

    // mengarahkan tampilan ke halaman detail transaksi
    if($data){
        header('location:detail_transaksi_form.php?id_transaksi='.$id_transaksi);
    } else {
        header('location:transaksi_list.php');
    }
?>