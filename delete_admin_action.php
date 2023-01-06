<?php
include "koneksi.php";

//menerima data dari method POST
$id= $_GET['id_admin'];

//proses menambah dalam database
$data = $koneksi->query("DELETE FROM admin
WHERE id_admin=$id");

  //mengarahkan tampilan kembali ke list
  if($data){
    header('location:admin_list.php');
  } else {
    echo "Hapus data gagal";
  }
  ?>