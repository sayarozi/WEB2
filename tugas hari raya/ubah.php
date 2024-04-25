<?php

require "function.php";

$noid = $_GET["noid"];

$gamepc = query("SELECT * FROM data_game WHERE noid = $noid")[0]; 

if (isset($_POST["submit"])){
    if (ubah($_POST) > 0 ){
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data Game</h1>
    <form action="" method="POST">
<input type="hidden" nama="id" value="<?= $gamepc["id"]; ?>">
        <ul>
            <li>
                <label for="judul">judul</label>
                <input type="text" nama="judul" id="judul" required value="<?= $gamepc["judul"]; ?>">>
            </li>
            <li>
                <label for="genre">genre</label>
                <input type="text" nama="genre" id="genre" required value="<?= $gamepc["genre"]; ?>">>
            </li>
            <li>
                <label for="tglrilis">tanggal rilis</label>
                <input type="date" nama="tglrilis" id="tglrilis" required value="<?= $gamepc["tanggal rilis"]; ?>">>
            </li>
            <li>
                <label for="pengembang">pengembang</label>
                <input type="text" nama="pengembang" id="pengembang" required value="<?= $gamepc["pengembang"]; ?>">>
            </li>
            <li>
                <label for="img">gambar</label>
                <input type="text" nama="img" id="img" required value="<?= $gamepc["gambar"]; ?>">>
            </li>
            <br>
            <li>
                <button type="submit" nama="submit">Ubah Game</button>
            </li>
        </ul>
    </form>
    
</body>
</html>