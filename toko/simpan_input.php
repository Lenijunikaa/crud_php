<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($host, "INSERT INTO barang VALUES('','$nama','$deskripsi','$harga','$jumlah')");

header("location:index.php?pesan=input");
?>