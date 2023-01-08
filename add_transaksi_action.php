<?php
    include "koneksi.php";

    // mererima data dari method post
    $tanggal = $_POST['tanggal'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_admin = $_POST['id_admin'];

    // proses menambah dalam database
    $data = $koneksi->query("INSERT INTO 
    transaksi(tanggal, id_pelanggan, id_admin) VALUES(
        '$tanggal',$id_pelanggan,$id_admin)");

    // mengambil ID terakhir yang diinputkan
    $li = $koneksi->query('SELECT LAST_INSERT_ID() as lastid');

    $data_lastid = $li->fetch_assoc();

    // mengarahkan tampilan ke halaman detail transaksi
    if($data){
        header('location:detail_transaksi_form.php?id_transaksi='.$data_lastid['lastid']);
    } else {
        header('location:transaksi_list.php');
    }
?>