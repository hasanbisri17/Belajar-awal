<?php 
// variabel scope/lingkup variabel

// $x = 10;

// function tampilx(){
//     global $x;
//     echo $x;
// }

// tampilx();


// pembahasan pada materi kali ini adalah SUPERGLOBAL yg ada di PHP
// variabel global ini  merupakan array asosiatif
// pembahasan pertama yaitu $_GET
// $_GET["nama"] = "Firman Dwi Ardi";
// $_GET["Jurusan"] = "Teknik Mesin";

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
    <title>Daftar List mahasiswa</title>
</head>
<body>
    <h1>Daftar List Mahasiswa</h1>
    <h4>Tabel Mahasiswa</h4>
    <table border="1">
    
        <tr>
            <th>No</th>
            <th>AKSI</th>
            <th>NAMA</th>
        </tr> 
        <?php foreach( $mahasiswa as $mhs ) : ?>      
            <tr>
                <td><?= $mhs["no"]; ?></td>
                <td>
                    <a href="latihan2.php?nim=<?= $mhs["nim"]; ?>&nama=<?= $mhs["nama"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&semester=<?= $mhs["semester"]; ?>">edit</a>
                </td>
                <td><?= $mhs["nama"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>