<?php
include "koneksi.php";

//menerima data dari method POST
$nama = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga_produk'];

//proses menambah dalam database
$data = $koneksi->query("INSERT INTO produk(nama_produk, deskripsi, harga_produk) VALUES(
  '$nama','$deskripsi','$harga')"); 

  //mengarahkan tampilan kembali ke list
  if($data){
    header('location:produk_list.php');
  } else {
    echo "Tambah data gagal";
  }
  ?>