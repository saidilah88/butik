<?php
	include "koneksi.php";
	
	//menerima data dari method POST
	$id=$_POST['id_pelanggan'];
	$nama=$_POST['nama_pelanggan'];
	$no_hp=$_POST['no_hp_pelanggan'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat_pelanggan'];
	
	//proses menambah dalam database
	$data=$koneksi->query("UPDATE pelanggan SET
		nama_pelanggan='$nama',no_hp_pelanggan='$no_hp',JK='$jk',alamat_pelanggan='$alamat' WHERE id_pelanggan=$id");
			
	// mengarahkan tampilan kembali ke list
	if($data){
		header('location:pelanggan_list.php');
	}else{
		echo "Tambah data gagal";
	}
?>