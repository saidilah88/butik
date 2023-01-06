<?php
include "koneksi.php";

//menerima data dari method POST
$id= $_GET['id_pelanggan'];

//proses menambah dalam database
$data = $koneksi->query("DELETE FROM pelanggan
WHERE id_pelanggan=$id");

  //mengarahkan tampilan kembali ke list
  if($data){
    header('location:pelanggan_list.php');
  } else {
    echo "Hapus data gagal";
  }
  ?>