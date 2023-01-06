<?php
include "koneksi.php";

//menerima data dari method POST
$nama = $_POST['id_admin'];
$nama = $_POST['nama_admin'];
$psw = $_POST['password'];

//proses menambah dalam database
$data = $koneksi->query("UPDATE admin SET
nama_admin='$nama', password='$psw'
WHERE id_admin=$id");

  //mengarahkan tampilan kembali ke list
  if($data){
    header('location:admin_list.php');
  } else {
    echo "Ubah data gagal";
  }
  ?>