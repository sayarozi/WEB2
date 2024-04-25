<?php

require "function.php";

if (isset($_POST["submit"])){
    if (tambah($_POST) > 0 ){
        echo "
        <script>
        alert('data berhasil disimpan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal disimpan!');
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
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Data</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="id">id</label>
                <input type="text" nama="id" id="id" required>
            </li>
            <li>
                <label for="judul">judul</label>
                <input type="text" nama="judul" id="judul" required>
            </li>
            <li>
                <label for="genre">genre</label>
                <input type="text" nama="genre" id="genre" required>
            </li>
            <li>
                <label for="tglrilis">tanggal rilis</label>
                <input type="text" nama="tglrilis" id="tglrilis" required>
            </li>
            <li>
                <label for="pengembang">pengembang</label>
                <input type="text" nama="pengembang" id="pengembang" required>
            </li>
            <li>
                <label for="img">gambar</label>
                <input type="text" nama="img" id="img" required>
            </li>
            <br>
            <li>
                <button type="submit" nama="submit">Simpan</button>
            </li>
        </ul>
    </form>
    
</body>
</html>