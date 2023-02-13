<?php 


require 'functions.php';


// cek apakah tombol submit sudah pernah di tekan atau belum
if( isset( $_POST["submit"] ) ) {

    // Cek apakah data berhasil di tambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Di tambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal di tambahkan');
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <br>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NIM : </label>
                <input type="text" name="nrp" id="nrp" require>
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" require>
            </li>
            <li>
                <label for="email">E-MAIL : </label>
                <input type="text" name="email" id="email" require>
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" require>
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="text" name="gambar" id="gambar" require>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>