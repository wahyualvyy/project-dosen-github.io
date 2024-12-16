<?php
require_once "function.php";


$id = $_GET["Noid"];

if (hapus2($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = '../admin/tambahguru.php';
        </script>";
} else {
    echo "<script;>
    alert('Data gagal dihapus');
    document.location.href = 'hapus.php';
    </script>";
}
?>