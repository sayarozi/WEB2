<?php
require 'function.php';
$gamepc = query("SELECT * FROM data_game");

if (isset($_POST["cari"])){
    $gamepc = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Game</h1>
    <a href="tambah.php">Tambah Data Game</a>
    <br></br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="masukkan kata kunci pencarian"
         autocomplete="off">
        <button type="submit" nama="cari">Cari</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>judul</th>
            <th>genre</th>
            <th>tanggal rilis</th>  
            <th>pengembang</th>
            <th>gambar</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($gamepc as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
            </td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['genre'] ?></td>
            <td><?= $row['tanggal rilis'] ?></td>
		    <td><?= $row['pengembang'] ?></td>
			<td>
                <img src="img/<?= $row['gambar'] ?>" width="50">
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>
</html> 