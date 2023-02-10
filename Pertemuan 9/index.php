<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>AKSI</th>
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
                    <a href="">Ubah</a> | 
                    <a href="">Hapus</a>
                </td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td><?= $mhs["semester"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>