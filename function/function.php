<?php 

include("koneksi.php");

    function query($guru){
        global $koneksi;

        $result = mysqli_query($koneksi, $guru);
        $empty = [];
        while ($row = mysqli_fetch_assoc($result)){
            $empty []=$row;
        } 
        return $empty;
    }

    function hapus($data){
        global $koneksi;
    
        mysqli_query($koneksi,"DELETE FROM tb_siswa WHERE id_siswa = $data");
        return mysqli_affected_rows($koneksi);
    }


    function ubah($data){
        global $koneksi;
    
        $id = $data ["id_siswa"];
        $nama = htmlspecialchars($data ["nama"]);
        $nis = htmlspecialchars($data ["nis"]);
        $kelas = htmlspecialchars($data ["kelas"]);
        $telepon = htmlspecialchars($data ["telepon"]);
    
        $query = "UPDATE tb_siswa SET 
                    nama = '$nama',
                    nis = '$nis',
                    kelas = '$kelas',
                    telepon = '$telepon' 
                    WHERE id_siswa = '$id'";
    
        mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);
    }
    function hapus2($data){
        global $koneksi;
    
        mysqli_query($koneksi,"DELETE FROM tb_guru WHERE id = $data");
        return mysqli_affected_rows($koneksi);
    }
    function terhapus($data){
        global $koneksi;
    
        mysqli_query($koneksi,"DELETE FROM tb_user WHERE id_guru = $data");
        return mysqli_affected_rows($koneksi);
    }
    function ubahguru($data){
        global $koneksi;
    
        $id = $data ["id"];
        $nama = htmlspecialchars($data ["nama"]);
        $nis = htmlspecialchars($data ["nis"]);
        $tanggal = htmlspecialchars($data ["tanggal"]);
        $telepon = htmlspecialchars($data ["telepon"]);
        $alamat = htmlspecialchars($data ["alamat"]);
    
        $query = "UPDATE tb_guru SET 
                    nama = '$nama',
                    nis = '$nis',
                    tanggal = '$tanggal',
                    telepon = '$telepon',
                    alamat = '$alamat'
                    WHERE id = '$id'";
    
        mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);
    }
    function ubahuser($data){
        global $koneksi;
    
        $id = $data ["id_guru"];
        $username = htmlspecialchars($data ["username"]);
        $password = htmlspecialchars($data ["password"]);
        $level = htmlspecialchars($data ["level"]);
        $nama = htmlspecialchars($data ["nama"]);
    
        $query = "UPDATE tb_user SET 
                    username = '$username',
                    password = '$password',
                    level = '$level',
                    nama = '$nama'
                    WHERE id_guru = '$id'";
    
        mysqli_query($koneksi,$query);
        
        return mysqli_affected_rows($koneksi);
    }

?>