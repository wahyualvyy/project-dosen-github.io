<?php
require_once "function.php";

$id = $_GET["Noid"];

$gr = query("SELECT * FROM tb_siswa WHERE id_siswa = $id")[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = '../guru/tambahmurid.php';
                </script>";
    } else {
        echo "<script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambahkan data</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <input type="hidden" name="id_siswa" value="<?= $gr["id_siswa"]; ?>">
            </li>
            <li>
                <label for="nim">NAMA</label>
                <input type="text" name="nama" id="nama" required value="<?= $gr["nama"]; ?>">
            </li>

            <li>
                <label for="nama">NIS</label>
                <input type="text" name="nis" id="nis" required value="<?= $gr["nis"]; ?>">
            </li>

            <li>
                <label for="email">KELAS</label>
                <input type="text" name="kelas" id="kelas" required value="<?= $gr["kelas"]; ?>">
            </li>

            <li>
                <label for="jurusan">TELEPON</label>
                <input type="text" name="telepon" id="telepon" required value="<?= $gr["telepon"]; ?>">
            </li>
            <li>
                <input type="hidden" name="id_guru" value="<?= $id_guru ?>">
            </li>
            <li>
                <button type="submit" name="submit" value="submit">GANTI</button>
            </li>
        </ul>
    </form>
</body>

</html>