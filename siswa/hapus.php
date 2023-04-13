<?php
if (isset($_GET['id'])) {
    include "config.php";
    $id        = $_GET['id'];

    $sql ="UPDATE jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE id=$id";
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