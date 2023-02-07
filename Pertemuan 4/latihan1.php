<?php 

// Array
// variable yang dapat menampung banyak nilai
// ellement pada array boleh berisi type data yg berbeda
// Array adalah sebuah pasangan antara key dan value
// key-nya adalah index yg dimulai dari 0


// cara lama membuat Array
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");

// cara baru membuat array
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

// cara menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $bulan[4];
echo "<br>";
echo "<br>";

// Menambahkan element baru pada Array
var_dump($bulan);
$bulan[] = "DesJan";
$bulan[] = "JanJan";
echo "<br>";
var_dump($bulan);


?>