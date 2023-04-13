<?php
if (isset($_POST['simpan'])) {
    include "config.php";
    $nis   = $_POST['nis'];
    $nama   = $_POST['nama'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan_id    = $_POST['jurusan_id'];

    $sql ="INSERT INTO jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi'";
    $simpan = mysqli_query($con,$sql);
    if ($simpan) {
        header('location:index.php?m=jurusan&s=tampil');
        // echo "berhasil";
    }else {
       include "index.php?mm=jurusan&s=tampil'";
       echo '<script language="JavaScript">';
       echo 'alert("Data Gagal Ditambahkan."';
       echo '</script>';
    }
} else {
    echo '<script>windo.history.back()</script>';
}