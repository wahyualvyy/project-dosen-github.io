<?php
include("koneksi.php"); 
require_once "function.php";


$id = $_GET["Noid"];

if (terhapus($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = '../admin/tambahuser.php';
        </script>";
} else {
    echo "<script;>
    alert('Data gagal dihapus');
    document.location.href = 'hapus.php';
    </script>";
}
?>