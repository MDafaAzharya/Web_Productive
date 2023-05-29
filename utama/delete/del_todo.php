<?php
include "../../inc/koneksi.php";

$kd_brg = $_GET['id_task'];

$hapus = mysqli_query($koneksi,"DELETE FROM todo WHERE id_task='$kd_brg'");
echo "<script></script>";
header("refresh:0;../todo.php");?>