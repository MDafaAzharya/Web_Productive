<?php
include "../../inc/koneksi.php";

if(isset($_POST['tambah'])){
    $task = $_POST['nama_task'];
    $id = $_POST['id'];
    $query = mysqli_query($koneksi, "INSERT INTO `todo`(`nama_task`, `status`, `tanggal`, `user`) VALUES ('$task','pendinng',now(),'$id')");

    if ($query) {
        echo "<script>
        location.href='../todo.php';</script>";
       
      }else{
        echo "<script>alert('data gagal di input');
        location.href='../todo.php';</script>";
        
    }
}
?>