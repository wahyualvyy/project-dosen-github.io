<?php
require_once "function.php";


$id = $_GET["Noid"];

if (hapus($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = '../guru/tambahmurid.php';
        </script>";
} else {
    echo "<script;>
    alert('Data gagal dihapus');
    document.location.href = 'hapus.php';
    </script>";
}
?>