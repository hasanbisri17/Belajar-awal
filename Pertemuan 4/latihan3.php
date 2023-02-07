<?php 

$mahasiswa = [
    ["Hasan Bisri", "123456789", "Ilmu Komputer", "mhasanbisri84@gmail.com"],
    ["Firman Dwi", "1235544558", "Teknik Mesin", "ardi@gmail.com"],
    ["Nurul hudha", "1235544558", "Teknik Industri", "Nurul@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>List Daftar Mahasiswa</h1>

    <h4>Penuliasan Manual</h4>
    <ul>
        <li>Hasan Bisri</li>
        <li>123456789</li>
        <li>Ilmu Kolputer</li>
        <li>bisri171998@gmail.com</li>
    </ul>
    <br>
    <!-- <h4>Penuliasan menggunakan loop foreach</h4>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->
    <!-- <br> -->
    <!-- Pada penulisan ini menggunakan array numerik, array numerik adalah array yang pemanggilan indexnya adalah angka -->
    <h4>Penuliasan menggunakan loop foreach dan menampilkan array multi dimensi</h4>
    <?php foreach($mahasiswa as $mh) : ?>
        <ul>
            <li>Nama : <?= $mh[0] ?></li>
            <li>NIM : <?= $mh[1] ?></li>
            <li>Jurusan : <?= $mh[2] ?></li>
            <li>Email : <?= $mh[3] ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>