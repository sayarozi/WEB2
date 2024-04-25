<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "gamepc");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $id = htmlspecialchars($_data["id"]);
    $judul = htmlspecialchars($_data["judul"]);
    $genre = htmlspecialchars($_data["genre"]);
    $tglrilis = htmlspecialchars($_data["tanggal rilis"]);
    $pengembang = htmlspecialchars($_data["pengembang"]);
    $img = htmlspecialchars($_data["gambar"]);


      //query insert ke database
      $query = "insert into data_game
      VALUES
      ('','$id','$judul','$genre','$tglrilis','$pengembang','$img')
      ";
      
      mysqli_qeury($koneksi,$query);
      return mysqli_affected_rows($koneksi);
}

    function hapus($noid)
    {
        global $koneksi;
        mysqli_query($koneksi, "delete from data_game where noid = $noid");
        return mysqli_affected_rows($koneksi);
    }

    function ubah($data){
    global $koneksi;
    $id = $data["id"];
    $judul = htmlspecialchars($_data["judul"]);
    $genre = htmlspecialchars($_data["genre"]);
    $tglrilis = htmlspecialchars($_data["tanggal rilis"]);
    $pengembang = htmlspecialchars($_data["pengembang"]);
    $img = htmlspecialchars($_data["gambar"]);

      //query insert ke database
      $query = "UPDATE data_game SET
                id = '$id',
                judul = '$judul',
                genre = '$genre',
                tanggal rilis = '$tglrilis',
                pengembang = '$pengembang',
                gambar = '$img',
            WHERE id = $id
        ";
      
      mysqli_qeury($koneksi,$query);
      return mysqli_affected_rows($koneksi);
    }

    function cari($keyword){
        $query = "SELECT * FROM data_game
                    WHERE
                    judul LIKE '%$keyword%' OR
                    genre LIKE '%$keyword%' OR
                    tanggal rilis LIKE '%$keyword%' OR
                    pengembang LIKE '%$keyword%' OR
                    gambar LIKE '%$keyword%' OR
        ";

        return query($query);
    }