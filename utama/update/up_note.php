<?php
include "../../inc/koneksi.php";

if(isset($_GET['update'])){
    $id = $_GET['update'];
    $query = mysqli_query($koneksi, "UPDATE note SET status='selesai' WHERE id_task='$id'");

    if ($query) {
        echo "<script>
        location.href='../todo.php';</script>";
       
      }else{
        echo "<script>alert('Task Belum Selesai');
        location.href='../todo.php';</script>";
        
    }
}
?>