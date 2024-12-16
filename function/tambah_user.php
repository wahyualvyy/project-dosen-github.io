<?php

include("koneksi.php");

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama     = $_POST['nama'];
    $level     = $_POST['level'];

    $sql = "INSERT INTO tb_user(username,nama,level ,password) VALUES('$username','$nama','$level','$password')";
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
        echo '<script>window.location.href="../admin/tambahuser.php";</script>';
        exit; // Pastikan untuk keluar agar tidak ada output tambahan yang dikirimkan
    }
}

?>