<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        transition: 0.5s;
    }

    .kotak:hover {
        transform: rotate(360deg);

    }
    </style>
</head>

<body>
    <?php $arr = [
        [1,3,4],
        [76,45,34],
        [23,68,87]]; 
    ?>
    <?php foreach($arr as $number) : ?>
    <?php foreach($number as $a) : ?>
    <div class="kotak"><?= $a; ?><br></div>
    <?php endforeach; ?>
    <?php endforeach; ?>
</body>

</html>