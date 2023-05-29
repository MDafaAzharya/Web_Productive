<?php
include "../../inc/koneksi.php";

$kd_brg = $_GET['id_note'];

$hapus = mysqli_query($koneksi,"DELETE FROM note WHERE id_note='$kd_brg'");
echo "<script></script>";
header("refresh:0;../note.php");?>