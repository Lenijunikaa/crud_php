<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
    </div>
    <br/>
    <a href="index.php">Lihat Semua Data</a>
    <br/>
    <h3>Edit Data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($host,"SELECT * FROM barang WHERE id='$id'")or die(mysqli_error());
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>

            <tr>
                <td>Deskripsi</td>
                <td>
                    <input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>">
                </td>
            </tr>

            <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga" value="<?php echo $data['harga'] ?>">
                </td>
            </tr>

            <tr>
                <td>Jumlah</td>
                <td>
                    <input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>