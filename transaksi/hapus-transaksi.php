<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM transaksi WHERE id = '$id'";

if($connection->query($query)) {
    header("location: index-transaksi.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>