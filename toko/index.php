<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css" href="bootstrap.min.css.map">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
    </div>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }else if($pesan == "update"){
            echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus.";
        }
    }
    ?>
    <br/>
    <a class="tombol" href="from_input.php">+ Tambah Data Baru</a>
    <h3>Data Barang</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Opsi</th>
        </tr>
    <?php
    include "koneksi.php";
    $query_mysql = mysqli_query($host, "SELECT * FROM barang") or die(mysqli_error($host));
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['deskripsi']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['jumlah']; ?></td>
        <td>
            <a href="from_edit.php?id=<?php echo $data['id'];?>">Edit</a>|
            <a href="hapus.php?id=<?php echo $data['id'];?>">Hapus</a>
        </td>
    </tr>
        <?php } ?>
    </table>
</body>
</html>