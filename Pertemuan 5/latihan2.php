<?php 
// Array Numerik
// $mahasiswa = [
//     ["Hasan Bisri", "123456789", "bisri171998@gmail.com", "Ilmu Komputer"],
//     ["Firman Dwi", "987654321", "firman123@gmail.com", "teknik mesin"]
// ];

// Array Asosiatif
// Array Asosiatif adalah array yg key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Moahamd Hasan Bisri",
    "nim" => "123456789",
    "email" => "bisri171998@gmail.com",
    "jurusan" => "Ilmu Komputer",
    "gambar" => "bisri-2.png"
    ],
    [
        "nama" => "Firman Dwi Ardi",
        "nim" => "987654321",
        "email" => "ardi123@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "ardi-1.png"
    ],
    [
        "nama" => "Ali Masyhudha",
        "nim" => "111222333",
        "email" => "hudha321@gmail.com",
        "jurusan" => "Teknik Sipil",
        "gambar" => "huda-3.png"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array asosiatif</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>E-mail : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>