<?php
	include "koneksi.php";
	
	//menerima data dari method POST
	$id=$_POST['id_produk'];
	$nama=$_POST['nama_produk'];
	$deskripsi=$_POST['deskripsi'];
	$harga=$_POST['harga_produk'];
	
	//proses menambah dalam database
	$data=$koneksi->query("UPDATE produk SET
		nama_produk='$nama',deskripsi='$deskripsi',harga_produk='$harga' WHERE id_produk=$id");
			
	// mengarahkan tampilan kembali ke list
	if($data){
		header('location:produk_list.php');
	}else{
		echo "Tambah data gagal";
	}
?>