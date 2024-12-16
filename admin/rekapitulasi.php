<?php
include("../function/koneksi.php");
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

$querySiswa = mysqli_query($koneksi, "SELECT * FROM tb_guru");
$query_absen = mysqli_query($koneksi, "SELECT * FROM absen_guru");

$query = mysqli_query($koneksi, "SELECT a.*, s.nama, s.telepon FROM tb_guru s inner join absen_guru a on a.id_guru = s.nis");


$bulan = isset($_POST['cek']) ? $_POST['bulan'] : date('m');
$tahun = isset($_POST['cek']) ? $_POST['tahun'] : date('Y');

$data_bulan = [
    "01" => "Januari",
    "02" => "Februari",
    "03" => "Maret",
    "04" => "April",
    "05" => "Mei",
    "06" => "Juni",
    "07" => "Juli",
    "08" => "Agustus",
    "09" => "September",
    "10" => "Oktober",
    "11" => "November",
    "12" => "Desember",
];

}else
{
  // Handle the case where the user is not logged in
  header("location:../login.php");
  echo "User not logged in.";
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TK AISYIAH | Rekapitulasi</title>
    
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css" />

    <!-- CSS +++ -->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 3px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

    </style>
    <script>
        function toggleTable() {
            var table = document.getElementById('data-table');
            table.classList.toggle('minimized');
        }
    </script>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="../dist/img/aisyiah.png"
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <div class="">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"
                ><i class="fas fa-bars"></i
              ></a>
            </li>
          </div>
          <li class="nav-item  text-center">
            <a href="#" class="nav-link ">TK Aisyiah</a> 
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img
            src="../dist/img/aisyiah.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">TK AISYIAH</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="../dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block" style="font-size: 20px">Admin</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-header">Fiture</li>
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>Absensi</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="rekapitulasi.php" class="nav-link">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>Rekapitulasi Absensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tambahguru.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                  <p>Tambahkan Data Murid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tambahuser.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                  <p>Tambahkan Data Murid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../function/logout.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                  <p>Logout</p>
                </a>
              </li>

              
             
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  
                  <li class="breadcrumb-item active"></li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <form method="post">
        <label for="">Pilih Bulan</label>
        <select name="bulan" id="" required>
            <option value="" selected disabled>Pilih</option>
            <?php


            $nama_bulan = '';

            if(date('m') == $bulan) {
                $selected = 'selected';
                $nama_bulan = $val;
            } else {
                $nama_bulan = $val;
                $selected = '';
            }

            foreach($data_bulan as $key => $val) {
                $nama_bulan = isset($_POST['cek']) ? $val : $val;
                echo '<option value="'.$key.'">'.$val.'</option>';
            }
            ?>


        </select>
        <input type="number" value="<?= date('Y') ?>" name="tahun">
        <button type="submit" name="cek">Cek</button>
    </form>
    <div class="container">
<div class="col-md-auto">
<table >
        <tr>
            <th colspan="34">Bulan <?= $nama_bulan; ?></th>
            <th colspan="5">Rekapitulasi</th>
        </tr>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">NIP</th>
            <th rowspan="2">Nama</th>
            <?php for ($i = 1; $i <= 31; $i++) : ?>
                <th><?= $i ?></th>
            <?php endfor; ?>
            <th>Nama</th>
            <th>H</th>
            <th>I</th>
            <th>S</th>
            <th>A</th>
        </tr>
        <tr></tr>
        <?php
        $b = 1;
        foreach ($querySiswa as $rowSiswa) :
        ?>
            <tr>
                <td><?= $b++ ?></td>
                <td><?= $rowSiswa['nis'] ?><input type="hidden" name="nis[]" value="<?= $rowSiswa['nis'] ?>"></td>
                <td><?= $rowSiswa['nama'] ?></td>
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    $tgl = $tahun . '-' . $bulan . '-' . $i;
                    $query_absen = mysqli_query($koneksi, "SELECT id_status FROM absen_guru WHERE id_guru = '" . $rowSiswa['nis'] . "' AND tanggal = '$tgl'");
                    $absen = "";
                    if (mysqli_num_rows($query_absen) > 0) {
                        $absen = mysqli_fetch_assoc($query_absen)['id_status'];
                    }
                    echo "<td>$absen</td>";
                }
                ?>

                <?php
                $query_h = mysqli_query($koneksi, "SELECT COUNT(id_status) as h from absen_guru where year(tanggal) ='$tahun' and  MONTH(tanggal) = '$bulan' and id_status = 'H' and id_guru = '" . $rowSiswa['nis'] . "' ");
                $H = mysqli_fetch_assoc($query_h);
                $query_i = mysqli_query($koneksi, "SELECT COUNT(id_status) as i from absen_guru where year(tanggal) ='$tahun' and MONTH(tanggal) = '$bulan' and id_status = 'I' and id_guru = '" . $rowSiswa['nis'] . "' ");
                $I = mysqli_fetch_assoc($query_i);
                $query_s = mysqli_query($koneksi, "SELECT COUNT(id_status) as s from absen_guru where year(tanggal) ='$tahun' and MONTH(tanggal) = '$bulan' and id_status = 's' and id_guru = '" . $rowSiswa['nis'] . "' ");
                $S = mysqli_fetch_assoc($query_s);
                $query_a = mysqli_query($koneksi, "SELECT COUNT(id_status) as a from absen_guru where year(tanggal) ='$tahun' and MONTH(tanggal) = '$bulan' and id_status = 'a' and id_guru = '" . $rowSiswa['nis'] . "' ");
                $A = mysqli_fetch_assoc($query_a);
                ?>
                <td><?= $rowSiswa['nama'] ?></td>
                <td><?= $H['h'] ?></td>
                <td><?= $I['i'] ?></td>
                <td><?= $S['s'] ?></td>
                <td><?= $A['a']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div><button onClick="window.print()">Print this page
</button></div>
</div>
</div>
              <!-- /.Left col -->
              <!-- right col (We are only adding the ID to make the widgets sortable)-->
              
      <!-- /.content-wrapper -->
      

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
  </body>
</html>
