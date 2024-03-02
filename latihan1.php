<?php

$mahasiswa = [
    [
        "nim" => "23510017",
        "nama" => "rozi",
        "jurusan" => "Sistem Informasi",
        "email" => "rozi@stimata.ac.id",
        "img" =>  "img/foto1.jpg"
    ],
    [
        "nim" => "23518888",
        "nama" => "jesika",
        "jurusan" => "Teknologi Informasi",
        "email" => "jesika@stimata.ac.id",
        "img" =>  "img/foto2.jpg"
    ],
    [
        "nim" => "23519999",
        "nama" => "anonim",
        "jurusan" => "Teknologi Informasi",
        "email" => "anonim@stimata.ac.id",
        "img" =>  "img/foto3.jpg"
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metode request</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan.php?nama=<?php echo $mhs['nama']; ?>&nim=<?php echo $mhs['nim']; ?>&jurusan=<?php echo $mhs['jurusan']; ?>&email=<?php echo $mhs['email']; ?>&img=<?php echo $mhs['img']; ?>" > <?php echo $mhs['nama']; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>