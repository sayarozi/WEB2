<?php
require 'functions.php';
$gamepc = query("select * from data_game");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Game</title>
</head>
<body>
    <h1>Daftar Game</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>AKSI</th>
            <th>GAMBAR</th>
            <th>JUDUL</th>
            <th>GENRE</th>
            <th>TANGGAL RILIS</th>
            <th>PENGEMBANG</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach ($gamepc as $row): ?>

        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar'] ?>" width="120">
            </td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['genre'] ?></td>
            <td><center><?= $row['tanggal rilis'] ?></center></td>
            <td><?= $row['pengembang'] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>