<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM customer WHERE id = '$id'";

if($connection->query($query)) {
    header("location: show-customer.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>