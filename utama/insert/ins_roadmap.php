<?php
include "../../inc/koneksi.php";

if(isset($_POST['tambah'])){
    $judul = $_POST['title'];
    $notes = $_POST['isi'];
    $info = $_POST['ket'];
    $query = mysqli_query($koneksi, "INSERT INTO `peta`(`judul`, `isi`, `kategori`) VALUES ('$judul','$notes','$info')");

    if ($query) {
        echo "<script>alert('RoadMap Berhasil Di input');
        location.href='../roadmap.php';</script>";
       
      }else{
        echo "<script>alert('data gagal di input');
        location.href='../roadmap.php';</script>";
        
    }
}
?>