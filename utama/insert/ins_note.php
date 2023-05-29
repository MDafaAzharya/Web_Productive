<?php
include "../../inc/koneksi.php";

if(isset($_POST['tambah'])){
    $judul = $_POST['title'];
    $notes = $_POST['isi'];
    $id = $_POST['id'];
    $query = mysqli_query($koneksi, "INSERT INTO `note`( `judul`, `isi`,`tgl_dibuat`,`tgl_upfate`,`user`) VALUES ('$judul','$notes',now(),now(),'$id')");

    if ($query) {
        echo "<script>alert('Catatan Berhasil Di input');
        location.href='../note.php';</script>";
       
      }else{
        echo "<script>alert('data gagal di input');
        location.href='../note.php';</script>";
        
    }
}
?>