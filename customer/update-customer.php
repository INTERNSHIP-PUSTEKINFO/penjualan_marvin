<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id           = $_POST['id'];
$nama_customer           = $_POST['nama_customer'];
$alamat = $_POST['alamat'];
$telepon       = $_POST['telepon'];
$jenis_kelamin       = $_POST['jenis_kelamin'];

//query update data ke dalam database berdasarkan ID
$input_data = "UPDATE customer SET nama_customer = '$nama_customer', alamat = '$alamat', telepon = '$telepon', jenis_kelamin = '$jenis_kelamin' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($input_data)) {
    //redirect ke halaman index.php 
    header("location: index-customer.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>