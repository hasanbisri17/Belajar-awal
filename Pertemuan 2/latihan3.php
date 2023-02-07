<?php 

// Pengkondisian menggunakan switch case

$angka = 10;

// if( $angka == 10 ){
//     echo "anda memasukkan angka 10";
// } else if( $angka == 20 ){
//     echo "anda memasukan angka 20";
// } else if( $angka == 30 ){
//     echo "anda memasukkan angka 30";
// } else{
//     echo "angka yg anda masukkan salah";
// }

switch( $angka ){
    case 10 :
        echo "anda memasukkan angka 10";
        break;
    case 20 : 
        echo "anda memasukkan angka 20";
        break;
    case 30 :
        echo "anda memasukkan angka 30";
        break;
    default : 
        echo "angka yang anda masukkan tidak ada";
        break;
}


?>