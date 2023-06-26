<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($host, "UPDATE barang SET nama='$nama',deskripsi='$deskripsi',harga='$harga',
jumlah='$jumlah' WHERE id='$id'");

header("location:index.php?pesan=update");
?>