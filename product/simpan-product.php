<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$kategori           = $_POST['kategori'];
$nama_produk = $_POST['nama_produk'];
$deskripsi       = $_POST['deskripsi'];
$stock       = $_POST['stock'];
$harga       = $_POST['harga'];
$berat       = $_POST['berat'];
$supplier       = $_POST['supplier'];


//query insert data ke dalam database
$input_data = "INSERT INTO product (kategori, nama_produk, deskripsi, stock, harga, berat, id_supplier ) VALUES ('$kategori', '$nama_produk', '$deskripsi', '$stock', '$harga', '$berat', '$supplier' )";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($input_data)) {

    //redirect ke halaman index.php 
    header("location: index-product.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>