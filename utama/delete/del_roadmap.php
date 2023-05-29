<?php
include "../../inc/koneksi.php";

$kd_brg = $_GET['id_peta'];

$hapus = mysqli_query($koneksi,"DELETE FROM peta WHERE id_peta='$kd_brg'");
echo "<script></script>";
header("refresh:0;../roadmap.php");?>