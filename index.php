<?php
include "connect.php";
include "./model/katalog.model.php";
include "./controller/katalog.controller.php";
include "./view/katalog/katalog.view.php";
$plants = new KatalogView(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Tanaman</title>
</head>
<body>
    <!-- navbar -->
    <?php include "./view/utils/navbar.utils.php";?>

    <h1>Katalog Tanaman</h1>
    <p>Temukan berbagai jenis tanaman hias, buah, dan herbal.</p>

    <!-- mencari tanaman via url -->
    <?php $plants->find(); ?>

    <!-- semua tanaman -->
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama </th>
            <th>Kategori</th>
            <th>Manfaat</th>
        </tr>
        <?php $plants->show(); ?>
    </table>
</body>
</html>
