<?php
include "koneksi.php";

//menerima data dari method POST
$nama = $_POST['nama_admin'];
$psw = $_POST['password'];

//proses menambah dalam database
$data = $koneksi->query("INSERT INTO admin(nama_admin, password) VALUES(
  '$nama','$psw')"); 

  //mengarahkan tampilan kembali ke list
  if($data){
    header('location:admin_list.php');
  } else {
    echo "Tambah data gagal";
  }
  ?>