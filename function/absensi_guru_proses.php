<?php
include("koneksi.php");

if (isset($_POST['submit']))
{
    $nis = $_POST['nis'];
    $absen = $_POST['hadir'];
    $tanggal = $_POST['tanggal'];

    if (isset($absen))
    {
        $no = 0;
        foreach ($absen as $row)
        {
            $id_siswa = $nis[$no];

            $query = mysqli_query($koneksi, "INSERT INTO tb_absensi VALUES ('', '$id_siswa', '$tanggal', '$row'); ");

            $no++;
        }
    }

    if ($query)
    {
        // Jika query berhasil, tampilkan popup berhasil menggunakan JavaScript
        echo '<script>alert("Data berhasil disimpan!");</script>';
        echo '<script>window.location.href="../guru/dashboard.php";</script>';
        exit; // Pastikan untuk keluar agar tidak ada output tambahan yang dikirimkan
    }
}
?>