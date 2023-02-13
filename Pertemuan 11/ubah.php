<?php 


require 'functions.php';

// Ambil data dari URL/GET
$id = $_GET["id"];
// Query data maha siswa berdasarkan id databasennya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah pernah di tekan atau belum
if( isset( $_POST["submit"] ) ) {

    // Cek apakah data berhasil di ubah atau tidak
    if ( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <br>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NIM : </label>
                <input type="text" name="nrp" id="nrp" require value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" require value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">E-MAIL : </label>
                <input type="text" name="email" id="email" require value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" require value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="semester">SEMESTER : </label>
                <input type="text" name="semester" id="semester" require value="<?= $mhs["semester"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>