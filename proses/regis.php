<?php
include '../inc/koneksi.php';

$username = $_POST['nama'];
$password = $_POST['password'];
$mail = $_POST['email'];

$sql = "INSERT INTO `akun`(`id_akun`, `name`, `password`, `email`, `no_telp`, `alamat`, `sekolah`) VALUES ('','$username','$password','$mail','-','-','-')";
$hasil = mysqli_query($koneksi, $sql);

session_start();
echo "<script>alert('Daftar Berhasil');
location.href='../login.php';</script>";
?>

