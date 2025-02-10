<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama_suplier           = $_POST['nama_suplier'];
$alamat = $_POST['alamat'];
$telepon       = $_POST['telepon'];


//query insert data ke dalam database
$input_data = "INSERT INTO supplier (nama_suplier, alamat, telepon) VALUES ('$nama_suplier', '$alamat', '$telepon')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($input_data)) {

    //redirect ke halaman index.php 
    header("location: index-supplier.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>