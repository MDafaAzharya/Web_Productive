<?php
include "../../inc/koneksi.php";

if(isset($_POST['add'])){
    $info = $_POST['info'];
    $id = $_POST['id'];
    $query = mysqli_query($koneksi, "INSERT INTO `kategori`(`id_kat`, `nama_kat`,`user`) VALUES ('','$info','$id')");

    if ($query) {
        echo "<script>alert('RoadMap Berhasil Di input');
        location.href='../roadmap.php';</script>";
       
      }else{
        echo "<script>alert('data gagal di input');
        location.href='../roadmap.php';</script>";
        
    }
}
?>