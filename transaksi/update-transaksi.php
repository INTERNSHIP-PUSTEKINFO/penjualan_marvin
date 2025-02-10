<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id           = $_POST['id'];
$id_customer = $_POST['id_customer'];
$id_product       = $_POST['id_product'];
$jumlah       = $_POST['jumlah'];
$tanggal_transaksi       = $_POST['tanggal_transaksi'];


//query update data ke dalam database berdasarkan ID
$input_data = "UPDATE transaksi SET id_customer = '$id_customer', id_product = '$id_product', jumlah = '$jumlah', tanggal_transaksi = '$tanggal_transaksi' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($input_data)) {
    //redirect ke halaman index.php 
    header("location: index-transaksi.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>