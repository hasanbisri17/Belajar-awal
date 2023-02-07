<?php 
    
    // pada pertemuan pertama kali ini akan memabahas tentang sintaks-sintaks PHP dasar
    // di file ini adalah materi untuk penulisan sintaks dasar pada PHP dan di pertemuan berikutnya membahas PHP lebih lanjut
    // ada beberapa sintaks PHP yg perlu di ketahui, contohnya :
    // untuk mencetak/print pada sintaks PHP :
    // * echo, print = digunakan untuk mencetak sintaks PHP yang sudah di buat
    // * print_r() = digunakan untuk mencetak PHP dan menampilkan jumlah data
    // * var_dump() = digunakan untuk mencetak PHP dan menampilkan type data serta jumlah data

    // ada beberapa jenis tioe data dan operator pada bahasa pemrograman PHP
    // type data ada : 
    // * String = type data ini di gunakan untuk menuliskan type data berupa text dan karakter
    // * Integer = type data ini digunakan untuk menulisakan type data berupa bilangan bulat
    // * float = type data ini digunakan untuk menuliskan type data berupa bilangan pecahan
    // * boolean = type data ini digunakan untuk mencetak data berupa pernyataan benar/salah

    // Operator
    // => Operator aritmatika = operator yang berfungsi sebangi alat pembagian, pengurangan dan perkalian pada fariabel
    //  * Perkalian (*)
    //  * Penjumlahan (+)
    //  * Pengurangan (-)
    //  * Pembagian (/)
    //  * Modulus (%)
    // => Operator Perbandingan = oprator yang berfungsi sebagai alat perbandingan dan logic sebuah fariabel
    //  * Lebih Kecil dari (<)
    //  * Lebih besar dari (>)
    //  * Lebih Kecil dari samadengan (<=)
    //  * Lebih besar dari samadengan (>=)
    //  * Samadengan (==)
    //  * Tidak samadengan (!=)

    // => Operator Identitas = untuk mengecek suatu type data antar fariabel sama atau tidak
    //  * ===, !==

    // => Oprator Logika
    //  * &&, ||, !


    $nama_depan = "Hasan";
    $nama_belakang = "Bisri";
    $nama_lengkap = "Hasan Bisri";
    $umur = 24;
    $BB = 95.6;
    $JK = true;

    $x = 20;
    
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>Biodata Singkat saya</h1>
        <ul>
            <li>Nama Depan        : <?= $nama_depan; ?> </li>
            <li>Nama Belakang        : <?= $nama_belakang; ?> </li>
            <li>Nama Lengkap        : <?= $nama_depan . " " . $nama_belakang; ?> </li>
            <li>Umur        : <?= $umur; ?></li>
            <li>Berat Badan : <?= $BB; ?></li>
        </ul>
        <?= var_dump($x < 30 || $x % 3 == 0); ?>
    </body>
    </html>



