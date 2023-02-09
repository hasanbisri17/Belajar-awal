<?php
// pengecekan apakah tidak ada data di $_GEt
if( !isset($_GET["no"]) || 
    !isset($_GET["nim"]) || 
    !isset($_GET["nama"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["semester"]))
    {
    // redirect ke halaman awal
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil lengkap data mahasiswa</title>
    <style>
        .nomor{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data lengkap biodata Mahasiswa</h1>
    <table border="1" style="width: 100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>Jurusan</th>
            <th>Semester</th>
        </tr>
        <tr>
            <td class="nomor"><?= $_GET["nim"]; ?></td>
            <td class="nomor"><?= $_GET["nama"]; ?></td>
            <td class="nomor"><?= $_GET["email"]; ?></td>
            <td class="nomor"><?= $_GET["jurusan"]; ?></td>
            <td class="nomor"><?= $_GET["semester"]; ?></td>
        </tr>
    </table>
    <br>    
    <a href="latihan1.php">Kembali ke halaman awal</a>
</body>
</html>