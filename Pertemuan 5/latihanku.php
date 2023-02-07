<?php
// Latihanku menggunakan Array asosiatif
$mahasiswa = [
    [
        "no" => "1",
        "nim" => "123456789",
        "nama" => "Hasan Bisri",
        "email" => "bisri171998@gmail.com",
        "jurusan" => "Ilmu Komputer",
        "semester" => "8"
    ],
    [
        "no" => "2",
        "nim" => "987654321",
        "nama" => "Firman Dwi Ardi",
        "email" => "Firman@gmail.com",
        "jurusan" => "Teknik Mesin",
        "semester" => "6"
    ],
    [
        "no" => "3",
        "nim" => "998665332",
        "nama" => "Ali Masyhuda",
        "email" => "hudha@gmail.com",
        "jurusan" => "Teknik Sipil",
        "semester" => "7"
    ],
    [
        "no" => "4",
        "nim" => "789554226",
        "nama" => "Fajar Agus Kurniawan",
        "email" => "fajar@gmail.com",
        "jurusan" => "Management",
        "semester" => "10"
    ],
    [
        "no" => "5",
        "nim" => "665334992",
        "nama" => "Darwin Adwaya",
        "email" => "darwin@gmail.com",
        "jurusan" => "Peternakan",
        "semester" => "8"
    ],
    [
        "no" => "6",
        "nim" => "996225887",
        "nama" => "Khasbi Akhrori",
        "email" => "khasbi@gmail.com",
        "jurusan" => "Informatika",
        "semester" => "5"
    ],
    [
        "no" => "7",
        "nim" => "556996325",
        "nama" => "Bagus Eka",
        "email" => "bagus@gmail.com",
        "jurusan" => "Pendidikan Agama",
        "semester" => "9"
    ],
    [
        "no" => "8",
        "nim" => "556225448",
        "nama" => "Randi",
        "email" => "randi@gmail.com",
        "jurusan" => "Psikolog",
        "semester" => "3"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini latihan menggunakan array</title>
    <style>
        .nomor{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>List Data Mahasiswa</h1>
    <table border="1" style="width: 100%;">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>Jurusan</th>
            <th>Semester</th>
        </tr>
        <?php foreach( $mahasiswa as $mhs ) : ?>
                <tr>
                    <td class="nomor"><?= $mhs["no"]; ?></td>
                    <td class="nomor">
                        <a href="#">Edit</a> || <a href="#">Hapus</a>
                    </td>
                    <td class="nomor"><?= $mhs["nim"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["email"]; ?></td>
                    <td><?= $mhs["jurusan"]; ?></td>
                    <td class="nomor"><?= $mhs["semester"]; ?></td>
                </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
