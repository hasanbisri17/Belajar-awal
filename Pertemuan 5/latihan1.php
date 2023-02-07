<?php
    // URL video referensi : 
    // pada pertemuan kali akan membahas tentang Array asosiatif
    // Array Asosiatif adalah array yg indengnya bukan berupa numerik, melainkan indexnya menggunakan string

    // Review materi sebelumnya
    // Array
    // cara lama membuat Array
    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");

    // cara baru membuat array
    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    $arr = [1223, "Bisri", true];
    // Menampilkan Array
    // Menggunakan debuging

    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    // Mencetak 1 element pada array
    echo $arr[1];

?>