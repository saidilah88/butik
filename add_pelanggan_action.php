<?php
include "koneksi.php";

//menerima data dari method POST
$nama = $_POST['nama_pelanggan'];
$no_hp = $_POST['no_hp_pelanggan'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat_pelanggan'];

//proses menambah dalam database
$data = $koneksi->query("INSERT INTO pelanggan(nama_pelanggan, no_hp_pelanggan, jk, alamat_pelanggan ) VALUES(
  '$nama','$no_hp','$jk','$alamat')"); 

  //mengarahkan tampilan kembali ke list
  if($data){
    header('location:pelanggan_list.php');
  } else {
    echo "Tambah data gagal";
  }
  ?>