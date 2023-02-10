<?php
// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// ambil dara dari table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// if ( !$result ){
//     echo mysqli_error($conn);
// }

// ambil data (fetch) mahasiswa dari object $result
// Pengertian
// mysqli_fetch_row() => Mengembalikan array numerik
// mysqli_fetch_assoc() => Mengembalikan array assosiatif
// mysqli_fetch_array() => Mengembalikan keduanya
// mysqli_fetch_object()
// $mhs = mysqli_fetch_assoc($result);

// var_dump($mhs);

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
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> | 
                    <a href="">Hapus</a>
                </td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["semester"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>