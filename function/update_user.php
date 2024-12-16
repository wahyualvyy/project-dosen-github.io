<?php
require_once "function.php";

$id = $_GET["Noid"];

$gr = query("SELECT * FROM tb_user WHERE id_guru = $id")[0];

if (isset($_POST['submit'])) {
    if (ubahuser($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = '../admin/tambahuser.php';
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
    <title>Mengedit data</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <input type="hidden" name="id_guru" value="<?= $gr["id_guru"]; ?>">
            </li>
            <li>
                <label for="user">Nama User</label>
                <input type="text" name="username" id="username" required value="<?= $gr["username"]; ?>">
            </li>
            <li>
                <label for="nama">Password</label>
                <input type="password" name="password" id="password" required value="<?= $gr["password"]; ?>">
            </li>

            <li>
                <label for="level">Level</label>
                <input type="" name="level" id="level" required value="<?= $gr["level"]; ?>">
            </li>
            <li>
                <label for="nama">nama</label>
                <input type="" name="nama" id="nama" required value="<?= $gr["nama"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit" value="submit">GANTI</button>
            </li>
        </ul>
    </form>
</body>

</html>