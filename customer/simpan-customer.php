<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_customer           = $_POST['nama_customer'];
$alamat = $_POST['alamat'];
$telepon       = $_POST['telepon'];
$jenis_kelamin       = $_POST['jenis_kelamin'];


//query insert data ke dalam database
$input_data = "INSERT INTO customer (nama_customer, alamat, telepon, jenis_kelamin) VALUES ('$nama_customer', '$alamat', '$telepon', '$jenis_kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($input_data)) {

    //redirect ke halaman index.php 
    header("location: index-customer.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>