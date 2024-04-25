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

    function hapus($id)
    {
        global $koneksi;
        mysqli_query($koneksi, "delete from data_game where id = $id");
        return mysqli_affected_rows($koneksi);
    }