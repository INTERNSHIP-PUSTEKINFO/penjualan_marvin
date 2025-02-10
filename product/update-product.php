<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id           = $_POST['id'];
$kategori           = $_POST['kategori'];
$nama_produk = $_POST['nama_produk'];
$deskripsi       = $_POST['deskripsi'];
$stock       = $_POST['stock'];
$harga       = $_POST['harga'];
$berat       = $_POST['berat'];
$id_supplier       = $_POST['id_supplier'];

//query update data ke dalam database berdasarkan ID
$input_data = "UPDATE product SET kategori = '$kategori', nama_produk = '$nama_produk', deskripsi = '$deskripsi', stock = '$stock', harga = '$harga', berat = '$berat', id_supplier = '$id_supplier' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($input_data)) {
    //redirect ke halaman index.php 
    header("location: index-product.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>