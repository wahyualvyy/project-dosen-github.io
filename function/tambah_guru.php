<?php

include("koneksi.php");

if (isset($_POST['submit']))
{
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $tanggal = $_POST['tanggal'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tb_guru(nama,nis,tanggal,telepon,alamat) VALUES('$nama','$nis','$tanggal','$telepon','$alamat')";
    if (mysqli_query($koneksi, $sql))
    {

    } else
    {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($koneksi);
    }

    if ($sql)
    {
        // Jika query berhasil, tampilkan popup berhasil menggunakan JavaScript
        echo '<script>alert("Data berhasil ditambahkan!");</script>';
        echo '<script>window.location.href="../admin/tambahguru.php";</script>';
        exit; // Pastikan untuk keluar agar tidak ada output tambahan yang dikirimkan
    }
}

?>