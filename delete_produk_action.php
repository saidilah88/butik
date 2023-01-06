<?php
include "koneksi.php";

//menerima data dari method POST
$id= $_GET['id_produk'];

//proses menambah dalam database
$data = $koneksi->query("DELETE FROM produk
WHERE id_produk=$id");

  //mengarahkan tampilan kembali ke list
  if($data){
    header('location:produk_list.php');
  } else {
    echo "Hapus data gagal";
  }
  ?>