<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Jika tombol cari di klik
    if( isset($_POST["cari"]) ){
        $mahasiswa = cari($_POST["keyword"]);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <button>
        <a href="tambah.php">Tambah Data Mahasiswa</a>
    </button>
    <br/>
    <br/>
    <form action="" method="post">

        <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>

    </form>
    <br/>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>AKSI</th>
            <th>GAMBAR</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>JURUSAN</th>
            <th>SEMESTER</th>
        </tr>

        <?php $i =1; ?>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> | 
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin ingin menghapus data?');">Hapus</a>
                </td>
                <td>
                    <img src="img/<?= $mhs["gambar"]; ?>" alt="">
                </td>
                <td><?= $mhs["nrp"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td style="text-align: center;"><?= $mhs["jurusan"]; ?></td>
                <td style="text-align: center;"><?= $mhs["semester"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>