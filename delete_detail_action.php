<?php
    include "koneksi.php";

    // mererima data dari method GET
    $id_transaksi = $_GET['id_transaksi'];
    $id_produk = $_GET['id_produk'];

    // proses menghapus dalam database
    $data = $koneksi->query("DELETE FROM detail_transaksi
    WHERE id_transaksi=$id_transaksi AND id_produk=$id_produk");

    // mengarahkan tampilan kembali ke list
    if($data){
        header('location:detail_transaksi_form.php?id_transaksi='.$id_transaksi);
    } else {
        header('location:transaksi_list.php');
    }
?>