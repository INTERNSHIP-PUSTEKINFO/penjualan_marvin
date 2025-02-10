<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id           = $_POST['id'];
$nama_suplier           = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$telepon       = $_POST['telepon'];


//query update data ke dalam database berdasarkan ID
$input_data = "UPDATE supplier SET nama_suplier = '$nama_suplier', alamat = '$alamat', telepon = '$telepon' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($input_data)) {
    //redirect ke halaman index.php 
    header("location: index-supplier.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>