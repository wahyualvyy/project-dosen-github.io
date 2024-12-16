<?php

include("koneksi.php");

if (isset($_POST['submit']))
{
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $telepon = $_POST['telepon'];
    $id_guru = $_POST['id_guru'];

    $sql = "INSERT INTO tb_siswa(nama,nis,kelas,telepon,id_guru) VALUES('$nama','$nis','$kelas','$telepon','$id_guru')";
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
        echo '<script>window.location.href="../guru/tambahmurid.php";</script>';
        exit; // Pastikan untuk keluar agar tidak ada output tambahan yang dikirimkan
    }
}

?>