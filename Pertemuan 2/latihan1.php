<?php
    // Url video referensi : 
    // Pada materi kali ini akan membahas mengenai perulangan pada bahas pemrograman PHP
    // For
    // while
    // do ... while
    // foreach = perulangan khusus array




    // for( $i = 0; $i < 10; $i++){
    //     echo "ini adalah angka ke " . $i . "<br/>";
    // }


    // $i = 0;
    // while($i < 10){
    //     echo "ini adalah angka ke " . $i . "<br/>";
    //     $i++;
    // }

    // $i = 20;
    // do{
    //     echo "ini adalah angka ke " . $i . "<br/>";
    //     $i++;
    // } while( $i < 10 )

        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <h3>Membuat tabel dengan perulangan for</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,2</td>
            <td>3,3</td>
            <td>3,4</td>
            <td>3,5</td>
        </tr> -->
        

        <!-- Pembuatan table pada perulangan for -->
        <?php 
            for( $i = 1; $i <= 5; $i++ ){
                echo "<tr>";
                for( $j = 1; $j <= 5; $j++ ){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <h3>Membuat tabel dengan perulangan for dengan gaya pemisah antara Tag HTML dan PHP</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- Pembuatan table pada perulangan for dan gaya penulisan pemisah antara HTML dan PHP -->
        <?php for( $i = 1; $i <= 5; $i++ ){ ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $j++ ){ ?>
                    <td>
                        <?= $i . "," . $j; ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <h3>Membuat tabel dengan perulangan for dengan gaya templating</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- Pembuatan table pada perulangan for dan gaya penulisan Templating -->
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <tr>
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