<?php
$idhapus = $_GET["id"];

if ( hapus($id) > 0) {
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
?>