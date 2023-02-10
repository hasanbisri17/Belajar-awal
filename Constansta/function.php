<?php

    function aritmatika($nilai1, $nilai2, $tugas){
        if($tugas == "+"){
            $hasil = $nilai1 + $nilai2;
        } elseif ($tugas == "-"){
            $hasil = $nilai1 - $nilai2;
        } elseif ($tugas == "*"){
            $hasil = $nilai1 * $nilai2;
        } elseif ($tugas == "/"){
            $hasil = $nilai1 / $nilai2;
        }
        return $hasil;
    }

    echo aritmatika(7,2,"+");
    echo "<br>";
    echo aritmatika(9,5,"-");
    echo "<br>";
    echo aritmatika(4,5,"*");
    echo "<br>";
    echo aritmatika(8,8,"/");
    echo "<br>";

    // cara lain dan mendifinisiakan sebuah nilai bisa menngunakan cara ini
    $ininilai1 = 7;
    $ininilai2 = 8;
    $tugasnya = "-";

    echo aritmatika($ininilai1, $ininilai2, $tugasnya);

?>