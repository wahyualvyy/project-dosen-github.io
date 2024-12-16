<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
echo "<script>
        alert('anda yakin ingin log out');
        document.location.href = '../login.php';
        </script>";
?>