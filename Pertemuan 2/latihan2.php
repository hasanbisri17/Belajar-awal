<?php 
// Pengkondisian / Percabangan
// if else
// if else if else
// ternery
// switch


$x = 40;
if( $x < 40 ){
    echo "benar";
} else if ( $x == 40 ){
    echo "Tepat";
} else {
    echo "Salah";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian/Percabangan</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>

<body>
    <h3>Membuat tabel berwarna dengan perulangan for dengan gaya templating dan menggunakan percabangan if else</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- Pembuatan table pada perulangan for dan gaya penulisan Templating -->
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                    <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td>
                        <?= $i . "," . $j; ?>
                    </td>
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>
</body>

</html>